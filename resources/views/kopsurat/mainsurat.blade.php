<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cetak</title>
    <link rel="stylesheet" href="{{ public_path('css/kopsurat.css') }}">
</head>

<body>
    <div id="kopsurat">
        {{-- head surat --}}
        <div class="head">
            <img src="{{ public_path('Asetpictures/logodesa.jpg') }}" alt="" class="logodesa">
            <h1 style="padding-right: 40px;">PEMERINTAH KABUPATEN LEBAK KECAMATAN CIKULUR <br> DESA PARAGE</h1>
            <p class="alamat-desa">Alamat: Jl.H. Mamad Km.03 Kp.Parage Langgar Ds.Parage Kec.Cikulur
                Kab.Lebak-Banten, 42356<br>Email : <a href="#">desaparage@gmail.com</a></p>
        </div>
        {{-- <h3 style="text-align: center;"><u>{{ $title }}</u></h3> --}}
        <div style="text-align: center; font-size: 19px; font-weight: bold;"><u>{{ $title }}</u><br>
            <div style="text-align: center; font-size:15px; font-weight: normal;">No:141.1/......
                -Ket/Ds-2011/{{ bulanHelper::bulan() }}/{{ Carbon\Carbon::now()->year }}</div>
        </div>
        {{-- <p style="text-align: center;">No:474/..... -Ket/Ds-2011/{{ bulanHelper::bulan() }}/{{ Carbon\Carbon::now()->year}}</p> --}}
        {{-- akhir head surat --}}

        {{-- body surat --}}
        <div class="container">
            @yield('body')
        </div>
        {{-- akhir body surat --}}
    </div>

</body>

</html>
