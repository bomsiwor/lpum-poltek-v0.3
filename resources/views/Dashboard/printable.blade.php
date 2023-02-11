<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen</title>

    <style>
        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-Bold.ttf') }}) format("truetype");
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-BoldItalic.ttf') }}) format("truetype");
            font-weight: 700;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-ExtraBold.ttf') }}) format("truetype");
            font-weight: 800;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-ExtraBoldItalic.ttf') }}) format("truetype");
            font-weight: 800;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-Light.ttf') }}) format("truetype");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-LightItalic.ttf') }}) format("truetype");
            font-weight: 300;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-Medium.ttf') }}) format("truetype");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-MediumItalic.ttf') }}) format("truetype");
            font-weight: 500;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-Regular.ttf') }}) format("truetype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-SemiBold.ttf') }}) format("truetype");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-SemiBoldItalic.ttf') }}) format("truetype");
            font-weight: 600;
            font-style: italic;
        }

        @font-face {
            font-family: 'Open Sans';
            src: url({{ storage_path('fonts/OpenSans/OpenSans-Italic.ttf') }}) format("truetype");
            font-weight: 400;
            font-style: italic;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-position: top left;
            background-size: 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            background-image: url({{ public_path('assets/images/bg-surat-test.jpg') }});
        }

        @page {
            margin: 0;
        }

        table {
            border: 1px solid black;
        }

        .container {
            padding: 1cm 2cm 2cm 2.5cm;
        }

        p {
            font-size: 12pt;
        }

        .kop-surat {
            margin: 0 auto;
            padding: 5px;
        }

        .tengah {
            text-align: left;
            padding-left: 15px;
        }

        h1 {
            font-size: 16pt;
        }

        h2 {
            font-size: 12pt;
        }

        h1,
        h2 {
            margin-top: 5px;
            margin-bottom: 0;
            line-height: 10px;
        }

        .logo-kop {
            width: 95px;
            margin: 5px;
        }

        .subtitle {
            margin-top: 0;
            font-size: 9pt;
            line-height: normal;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kop-surat">
            <table width="100%">
                <tr>
                    <td><img src="{{ public_path('assets/images/Logo-lpum.png') }}" alt="" class="logo-kop">
                    </td>
                    <td class="tengah">
                        <h1>LPUM Poltek Nuklir</h1>
                        <h2>Lembaga Pemilihan Umum Poltek Nuklir</h2>
                        <p class="subtitle">Jl. Babarsari Kotak POB 6101/YKKB, Ngentak, Caturtunggal, Kec. Depok,
                            Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia</p>
                    </td>
                </tr>
            </table>

            <h1 style="text-align: center">Surat Keputusan</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum accusantium, error debitis exercitationem
                porro
                voluptate aut harum provident molestias odit ratione dolorem impedit blanditiis vero quos magni
                reiciendis
                voluptatem consequuntur enim optio, quae quasi corrupti numquam in? Dignissimos, doloremque eos!</p>
        </div>
    </div>
</body>

</html>
