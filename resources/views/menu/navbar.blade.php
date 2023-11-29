<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- favicon --}}
    <link rel="shortcut icon" href="Asetpictures/mylogo.ico" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/kelurahan.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/kelurahan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Parage | {{ $title }}</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="color container-fluid d-flex align-items-center justify-content-between fixed-top ">
        <a href="" class="navbar-brand"><img src="Asetpictures/mylogo.png" alt="" class="logo"></a>
        <ul class="nav d-flex align-items-center pe-4 list">
            <li class="nav-item hover">
                <a href="{{ url('/') }}" class="p-2 {{ Request::is('/') ? 'aktif' : '' }}">
                    <span class="icon"><i class="bi bi-house-door"></i></span>
                    <span class="text"><i class="bi bi-house-door"></i> Beranda</span>
                </a>
            </li>
            <li class="nav-item hover">
                <a href=" {{ url('/tentang') }}" class="p-2 {{ Request::is('tentang') ? 'aktif' : '' }}">
                    <span class="icon"><i class="bi bi-person-lines-fill"></i></span>
                    <span class="text"><i class="bi bi-person-lines-fill"></i> Tentang</span>
                </a>
            </li>
            <li class="nav-item hover">
                <a href="{{ url('/berita') }}" class="p-2 {{ Request::is('berita') ? 'aktif' : '' }}">
                    <span class="icon"><i class="bi bi-newspaper"></i></span>
                    <span class="text"><i class="bi bi-newspaper"></i> Berita</span>
                </a>
            </li>
            @auth
                {{-- jika sudah login maka tampilkan opsi ke dashboard --}}
                <li class="nav-item dropdown">
                    <a class="nav-link text-white rounded dropdown-toggle " href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="text text-capitalize"><i class="bi bi-person-circle"></i> Hi,
                            {{ auth()->user()->nama }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form action="/logout" method="post">
                            @csrf
                            <li><button type="submit" name="" class="dropdown-item" href="#">Keluar</button>
                            </li>
                        </form>
                    </ul>
                </li>
            @else
                {{-- jika user belom login maka tampilkan button login --}}
                <li class="nav-item hover">
                    <a href="{{ url('/login') }}" class="p-2 {{ Request::is('login') ? 'aktif' : '' }}">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="text"><i class="bi bi-person-circle"></i> Login</span>
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
    <!-- akhir Navbar -->
    <section class="mt-5 container">
        @yield('components')
    </section>

    <!-- scroll up -->
    <button class="scroll-top"><i class="bi bi-arrow-up-square-fill"></i></button>
    {{-- akhir scroll up --}}


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    {{-- <script src="js/kelurahan.js"></script> --}}
    <script src="js/loadcard.js"></script>
    <script src="js/scrool_btn.js"></script>
    {{-- <script src="js/actifebtn.js"></script> --}}
</body>

</html>
