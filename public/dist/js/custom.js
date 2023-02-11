$(function () {
    "use strict";

    $(".preloader").fadeOut();
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on("click", function () {
        $("#main-wrapper").toggleClass("show-sidebar");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on(
        "click",
        function () {
            $(".app-search").toggle(200);
            $(".app-search input").focus();
        }
    );

    // ==============================================================
    // Resize all elements
    // ==============================================================
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();

    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //****************************
    var setsidebartype = function () {
        var width =
            window.innerWidth > 0 ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
            $("#logoutButton").show();
            $("#profileButton").show();
            $(".paslon-photo").css("width", "300px");
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
            $("#logoutButton").hide();
            $("#profileButton").hide();
        }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
});

// $(document).bind("contextmenu", function (e) {
//     return false;
// });

document.body.addEventListener("keydown", (event) => {
    if (event.ctrlKey && "us".indexOf(event.key) !== -1) {
        event.preventDefault();
    }
});

$("#edit-profile-button").click(function (e) {
    e.preventDefault();
    if ($(this).text() === "Edit Profil") {
        $(this).html("Batal");
        $(".formProfil").prop("disabled", false);
        $("#save-profile-button").show();
    } else {
        $(".formProfil").prop("disabled", true);
        $(this).html("Edit Profil");
        $("#save-profile-button").hide();
    }
});

$("#save-profile-button").click(function (e) {
    e.preventDefault();
    alertify.confirm(
        "Simpan perubahan?",
        "Kamu dapat mengedit ulang detail profilmu kalau mau",
        function () {
            var form = $("#profileDetail");
            var url = $("#profileDetail").attr("action");

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                dataType: "json",
                success: function (response) {
                    console.log(response);
                },
            });
            // alertify.success("Sukses edit profil!");
            Swal.fire(
                "Berhasil",
                "Memperbarui profilmu yang cupu itu",
                "success"
            );
            $(".formProfil").prop("disabled", true);
            $("#edit-profile-button").html("Edit Profil");
            $("#save-profile-button").hide();
            setTimeout(() => {
                location.reload();
            }, 500);
        },
        function () {
            alertify.error("Batal");
        }
    );
});

$("#sendEmailButton").click(async function (e) {
    e.preventDefault();
    let result;
    var recipes = [
        { nama: "boma", email: "bomsiwor@gmail.com" },
        { nama: "jara", email: "dimasboma24@gmail.com" },
    ];

    var count = recipes.length - 1;
    $(this).html(
        '<i class="fa-solid fa-asterisk fa-spin" style="--fa-animation-duration: 5s;"></i> Mengirim'
    );
    $("#emailProgress").removeAttr("hidden");

    $(this).attr("disabled", true);
    $.when(
        $.each(recipes, function (index, recipe) {
            setTimeout(async () => {
                try {
                    await $.ajax({
                        type: "GET",
                        url: "/surat/kirim",
                        data: recipe,
                        dataType: "json",
                    }).then((result) => {
                        alertify.notify("Sukses", "warning", 3);
                        $("#countEmail").html(`(${index + 1} / ${count + 1})`);
                        console.log(result.message);
                    });

                    if (index == count) {
                        alertify.notify("Sukses mengirim semua", "success", 3);
                        $("#sendEmailButton").html(
                            '<i class="fa-regular fa-circle-check fa-beat-fade"></i> Terkirim'
                        );
                        $("#emailProgress").attr("hidden", true);
                    }
                } catch (error) {
                    console.log(error);
                }
            }, index * 2000);
        })
    );
});
