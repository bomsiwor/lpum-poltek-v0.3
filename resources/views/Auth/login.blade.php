@extends('Layouts.template')

@section('bodi')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <img src="../assets/images/Logo-lpum.png" alt="" style="width: 120px"
                class="animate__animated animate__fadeIn" />
        </div>
        <div class="d-flex justify-content-center align-items-center" style="height: 150px">
            <div>
                <h1 class="fw-bold animate__animated animate__bounce animate__delay-2s" style="font-size: 40px">
                    Selamat datang! &#128025;
                </h1>
                <div class="text-center fw-bold">Portal LPUM</div>
                <div class="text-center animate__animated animate__fadeInDown">
                    Silakan <b class="tema-1">Login</b> untuk melanjutkan
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-center justify-content-center" style="height: 300px">
            <div class="col-md-5">
                <div class="card shadow-lg animate__animated animate__fadeInDown animate__slow animate__delay-1s">
                    <div class="card-body">
                        <form action="/auth/login" method="post" class="form-horizontal form-material mx-2" id="form-login"
                            autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="cuma bisa email"
                                        class="form-control form-control-line" name="email" id="email" required />
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control form-control-line" name="password"
                                        id="password" required />
                                    <div id="passwordFeedback" class="valid-feedback">
                                        Nice!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn tema-2" id="tombol">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="text-center">
                            Hubungi <b><a href="#" class="tema-1">NARAHUBUNG</a></b> apabila
                            terkendala login.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
