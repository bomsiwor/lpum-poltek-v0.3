<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Portal LPUM - {{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}" />


    <!-- Main CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />

    {{-- MDI --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css">
    {{-- FontAwesom --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}
    <script src="https://kit.fontawesome.com/21c1c2d6a2.js" crossorigin="anonymous"></script>

    {{-- Custom CSS Real --}}
    <link rel="stylesheet" href="{{ asset('dist/css/kustom.css') }}">

    <!-- Alertify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/alertifyjs/css/alertify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/alertifyjs/css/themes/bootstrap.css') }}">

    {{-- Jquery --}}
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>

    {{-- SWAL --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Chart -->
    <link rel="stylesheet" href="https://unpkg.com/charts.css/dist/charts.min.css" />
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- Signature --}}
    <script src="{{ asset('assets/libs/jquery-sign/jq-signature.min.js') }}"></script>

    {{-- BS JS --}}
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    {{--  Medium Zoom --}}
    <script src="
    https://cdn.jsdelivr.net/npm/medium-zoom@1.0.8/dist/medium-zoom.min.js
    "></script>
    <!-- Checkbox -->
    <script src="../assets/libs/jquery.simple-checkbox-table.js"></script>
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- dataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
</head>

@yield('bodi')

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!-- Bootstrap tether Core JavaScript -->

<script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
<!--This page JavaScript -->
<!--chartis chart-->


<!-- Alertify JavaScript -->
<script src="{{ asset('assets/libs/alertifyjs/alertify.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('dist/js/custom.js') }}"></script>

</html>
