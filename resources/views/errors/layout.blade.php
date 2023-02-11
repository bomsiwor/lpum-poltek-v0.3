<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}" />

    <!-- Main CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />

    {{-- Custom CSS Real --}}
    <link rel="stylesheet" href="{{ asset('dist/css/kustom.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="error-box">
            <div class="error-body text-center">
                <h1 class="error-title" style="color: #023e8a">@yield('code')</h1>
                <h3 class="text-uppercase error-subtitle">@yield('message')</h3>
                <p class="text-muted m-t-30 m-b-30">PUTER BALIK KE AWAL AJA YAKK</p>
                <a href="{{ route('pagu') }}"
                    class="btn tema-3 btn-rounded waves-effect waves-light m-b-40 text-white">Back to
                    home</a>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader").fadeOut();
    </script>
</body>

</html>
