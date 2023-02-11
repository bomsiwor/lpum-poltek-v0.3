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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                    data-bs-target="#disabled-tab-pane" type="button" role="tab"
                                    aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">gaada isinya</div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                tabindex="0">
                                @include('dashboard.tab1')
                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                                tabindex="0">
                                <button class="btn btn-primary" id="sendEmailButton">
                                    Kirim email</button>
                                <div id="emailProgress" hidden>
                                    <p class="mb-0 mt-1">Mengirim <span id="countEmail"></span></p>
                                    <p class="animate__animated animate__pulse animate__infinite infinite text-danger">
                                        Jangan di
                                        refresh!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                                tabindex="0">gaada isinya</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Timeline LPUM </h5>
                        <div>
                            <ul class="nav nav-tabs" id="pemiluTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-primary" id="pemilu-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#pemilu-1-pane" type="button" role="tab"
                                        aria-controls="pemilu-1-pane" aria-selected="true">
                                        Pemilu 1
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pemilu-2-tab" data-bs-toggle="tab"
                                        data-bs-target="#pemilu-2-pane" type="button" role="tab"
                                        aria-controls="pemilu-2-pane" aria-selected="false">
                                        Pemilu 2
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pemilu-3-tab" data-bs-toggle="tab"
                                        data-bs-target="#pemilu-3-pane" type="button" role="tab"
                                        aria-controls="pemilu-3-pane" aria-selected="false">
                                        Pemilu 3
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pemiluTabContent">
                            <div class="tab-pane fade show active" id="pemilu-1-pane" role="tabpanel"
                                aria-labelledby="pemilu-1" tabindex="0">
                                <div id="content">
                                    <ul class="timeline">
                                        <li class="event" data-date="12:30 - 1:00pm">
                                            <h3>Registrasi <span class="badge bg-danger">Online</span></h3>

                                            <p>Calon registrasi melalui web LPUM </p>
                                        </li>
                                        <li class="event" data-date="2:30 - 4:00pm">
                                            <h3>Kampanye</h3>
                                            <p>Calon melakukan promosi diri</p>
                                        </li>
                                        <li class="event" data-date="5:00 - 8:00pm">
                                            <h3>Debat Terbuka #1 <span class="badge bg-success">Offline</span></h3>
                                            <p>
                                                Calon melakukan debat dengan topik
                                                <b>Kecerdasan berorganisasi</b>
                                                <br /><a href="#">Detail</a>
                                            </p>
                                        </li>
                                        <li class="event" data-date="8:30 - 9:30pm">
                                            <h3>Pemilihan</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Fugit velit perspiciatis quo
                                                omnis exercitationem distinctio a praesentium,
                                                corrupti ea voluptatum!
                                            </p>
                                            <p class="text-danger">
                                                Sampai 9 Agustus 2023 12:00
                                            </p>
                                        </li>
                                        <li class="event" data-date="8 Agustus 2023 15:00">
                                            <h3>Penghitungan</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Voluptatem veritatis excepturi ea omnis
                                                nobis culpa.
                                                <br />
                                                <span class="text-danger fw-bold">Sampai 9 Agustus 2023</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pemilu-2-pane" role="tabpanel" aria-labelledby="pemilu-2"
                                tabindex="0">
                                ...
                            </div>
                            <div class="tab-pane fade" id="pemilu-3-pane" role="tabpanel" aria-labelledby="pemilu-3"
                                tabindex="0">
                                ...
                            </div>
                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                aria-labelledby="disabled-tab" tabindex="0">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="signature"></div>
                        <button class="btn btn-primary" id="clearSign">Clear</button>
                        <button id="saveBtn" class="btn btn-primary" onclick="saveSignature();">Save
                            Signature</button>
                    </div>
                    <div id="signature">
                        <p><em>Your signature will appear here when you click "Save Signature"</em></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="collapse" id="kolaps1">
                        <p>
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when the user activates the relevant trigger.
                        </p>
                    </div>
                    <div class="collapse" id="kolaps2">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At aspernatur quod odit, nulla est
                            ducimus exercitationem aliquam reprehenderit ipsam excepturi!
                        </p>
                    </div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#kolaps1"
                        aria-expanded="false" aria-controls="kolaps1">
                        Button with data-bs-target
                    </button>
                    <button class="btn tema-3" type="button" data-bs-toggle="collapse" data-bs-target="#kolaps2"
                        aria-expanded="false" aria-controls="kolaps2">Kolaps 2</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <script>
        $('.signature').jqSignature({
            height: 300
        });
        $("#clearSign").click(function(e) {
            e.preventDefault();
            $('.signature').jqSignature('clearCanvas');
        });

        function saveSignature() {
            $('#signature').empty();
            var dataUrl = $('.signature').jqSignature('getDataURL');
            console.log(dataUrl);
            var img = $('<img>').attr('src', dataUrl);
            $('#signature').append($('<p>').text("Here's your signature:"));
            $('#signature').append(img);
        }
    </script>

    @include('Layouts.footer')
@endsection
