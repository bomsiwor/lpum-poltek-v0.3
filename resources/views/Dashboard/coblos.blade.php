@extends('Layouts.template')

@section('bodi')
    @include('Layouts.preload')
    @include('Layouts.header')
    @include('Layouts.sidebar')
    @include('Layouts.page-wrapper')


    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4">
                @if (!auth()->user()->vote_status)
                    <div class="card border-danger">
                        <div class="card-body text-center">
                            <h1 class="card-title fs-3">
                                &#10071; Kamu belum memilih! &#10071;
                            </h1>
                            <p>Jangan golput bangsat!</p>
                            <h6 class="card-subtitle">Cuma suruh pencet aja susah bener.</h5>
                        </div>
                    </div>
                @else
                    <div class="card border-success">
                        <div class="card-body text-center">
                            <h1 class="card-title fs-2">
                                &#10024; Kamu sudah memilih! &#10024;
                            </h1>
                            <p>
                                Terimakasih atas partisipasi kamu. Nantikan perhitungan suara
                                yang akan dilaksanakan pada tanggal ...
                            </p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h1 class="card-title">
                            &#128512; Hitung Mundur Waktu pemilu
                        </h1>
                        <div id="countdown">
                            <p class="waktu-mundur fs-2">
                                <b id="days"></b> hari <b id="hours"></b> jam
                                <b id="minutes"></b> menit <b id="seconds"></b> detik
                            </p>
                        </div>
                        <h6 class="card-subtitle subtext-waktu">
                            Jangan sampai kehabisan waktu! Gunakan hak suaramu!
                            &#128520;
                        </h6>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="card-title">Nomor urut 1</h1>
                        <h2>Jokowi Ahok</h2>
                        <img src="../assets/images/jokowi-ahok.jpg" alt="" style="width: 400px; border-radius: 5px"
                            class="shadow-sm paslon-photo" />
                        <hr />
                        <div class="fs-3 fw-bold">Visi</div>
                        <div class="text-start">
                            <ol type="1">
                                <li>Ajur</li>
                                <li>Mumur</li>
                                <li>Remokkkk</li>
                            </ol>
                        </div>
                        <hr />
                        <div class="fs-3 fw-bold">Misi</div>
                        <div class="text-start">
                            <ol type="1">
                                <li>Ajur</li>
                                <li>Mumur</li>
                                <li>Remokkkk</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div class="me-auto p-2 fw-bold">Yakin dengan dia?</div>
                            <div class="p-2">
                                <button class="btn tema-3 coblos" id="coblosButton" value="1">
                                    Coblos
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="card-title">Nomor urut 2</h1>
                        <h2>Prabowo Sandi</h2>
                        <img src="../assets/images/prabowo-sandi.jpg" alt=""
                            style="width: 400px; border-radius: 5px" class="shadow-sm paslon-photo" />
                        <hr />
                        <div class="fs-3 fw-bold">Visi</div>
                        <div class="text-start">
                            <ol type="1">
                                <li>Ajur</li>
                                <li>Mumur</li>
                                <li>Remokkkk</li>
                            </ol>
                        </div>
                        <hr />
                        <div class="fs-3 fw-bold">Misi</div>
                        <div class="text-start">
                            <ol type="1">
                                <li>Ajur</li>
                                <li>Mumur</li>
                                <li>Remokkkk</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div class="me-auto p-2 fw-bold">Yakin dengan dia?</div>
                            <div class="p-2">
                                <button class="btn tema-3 coblos" id="coblosButton" value="2">
                                    Coblos
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="card-title">Nomor urut 3</h1>
                        <h2>Naruto Sasuke</h2>
                        <img src="../assets/images/naruto-sasuke.jpg" alt=""
                            style="width: 400px; border-radius: 5px" class="shadow-sm paslon-photo" />
                        <hr />
                        <div class="fs-3 fw-bold">Visi</div>
                        <div class="text-center">
                            Konoha yang maju mengikuti Industri 4.0
                        </div>
                        <hr />
                        <div class="fs-3 fw-bold">Misi</div>
                        <div class="text-start">
                            <ol type="1">
                                <li>Pembangunan KRL antar desa</li>
                                <li>
                                    Pemberian bantuan pendidikan bagi ninja kurang mampu
                                </li>
                                <li>Transparansi ujian jounin</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div class="me-auto p-2 fw-bold">Yakin dengan dia?</div>
                            <div class="p-2">
                                <button class="btn tema-3 coblos" id="coblosButton" value="3">
                                    Coblos
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="card-title">Nomor urut 3</h1>
                        <h2>Naruto Sasuke</h2>
                        <img src="../assets/images/spongbob-patrik.png" alt=""
                            style="width: 400px; border-radius: 5px" class="shadow-sm paslon-photo" />
                        <hr />
                        <div class="fs-3 fw-bold">Visi</div>
                        <div class="text-center">
                            Bikini Bottom aman tentram dan asri
                        </div>
                        <hr />
                        <div class="fs-3 fw-bold">Misi</div>
                        <div class="text-start">
                            <ol type="1">
                                <li>Perbaikan aspal perbatasan rock bottom</li>
                                <li>Peningkatan keamanan sekitar chum bucket</li>
                                <li>Kaderisasi mermaid-man Barnacle Boy</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div class="me-auto p-2 fw-bold">Yakin dengan dia?</div>
                            <div class="p-2">
                                <button class="btn tema-3 coblos" id="coblosButton" value="4">
                                    Coblos
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    @include('Layouts.footer')

    <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "3/7/",
                birthday = dayMonth + yyyy + " 20:16:00";

            today = mm + "/" + dd + "/" + yyyy;
            if (today > birthday) {
                birthday = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(birthday).getTime(),
                x = setInterval(function() {
                    const now = new Date().getTime(),
                        distance = countDown - now;

                    (document.getElementById("days").innerText = Math.floor(distance / day)),
                    (document.getElementById("hours").innerText = Math.floor(
                        (distance % day) / hour
                    )),
                    (document.getElementById("minutes").innerText = Math.floor(
                        (distance % hour) / minute
                    )),
                    (document.getElementById("seconds").innerText = Math.floor(
                        (distance % minute) / second
                    ));

                    //do something later when date is reached
                    if (distance < 0) {
                        $(".waktu-mundur").html("Pemilunya dah selesai");
                        if ({{ auth()->user()->vote_status }} == 1) {
                            $(".subtext-waktu").html("Makasih ya &#128516;");
                        } else {
                            $(".subtext-waktu").html("Kamu malah golput anj &#128545;");
                        }
                        clearInterval(x);
                    }
                    //seconds
                }, 0);
        })();

        $(".coblos").click(function(e) {
            e.preventDefault();
            alertify.confirm(
                "Kamu Yakin?",
                "<b>Kalo udah milih gabis ganti pilihan</b></br>Kamu akan memilih nomor urut " +
                $(this).val(),
                function() {
                    alertify.success("Sukses nyoblos digital!");
                },
                function() {
                    alertify.error("Belum jadi milih");
                }
            );
        });
    </script>
@endsection
