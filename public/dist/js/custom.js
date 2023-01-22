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
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
});

// $(document).bind("contextmenu", function (e) {
//   return false;
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
            alertify.success("Sukses edit profil!");
            $(".formProfil").prop("disabled", true);
            $("#edit-profile-button").html("Edit Profil");
            $("#save-profile-button").hide();
        },
        function () {
            alertify.error("Batal");
        }
    );
});
