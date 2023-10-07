<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="Asetpictures/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- font goole --}}

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    {{-- akhir font google --}}
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/layanan.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Parage | {{ $title }}</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="" id="sidebar-wrapper">
            {{-- <div class="sidebar-heading d-flex text-center pt-2 pb-0 text-light fs-4  text-uppercase border-bottom border-2"><img src="Asetpictures/logo.png" alt="" class="logodesa"><h3 style="font-family: 'Satisfy', cursive; font-style: italic">sidespa</h3></div> --}}
            <a href="{{ url('/') }}">
                <div
                    class="sidebar-heading d-flex text-center pt-2 pb-0 text-light fs-4  text-uppercase border-bottom border-2">
                    <img src="Asetpictures/logo.png" alt="" class="logodesa"> <img
                        src="Asetpictures/logosidespa.png" alt="" class="sidespa" style="width: 85px">
                </div>
            </a>
            <div class="list-group list-group-flush my-3 pos">
                <a href="{{ url('/dashboard') }}"
                    class="list-group-item list-group-item-action text-light bg-transparent  {{ Request::is('dashboard*') ? 'aktip' : '' }}"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ url('/buat-berita') }}"
                    class="list-group-item list-group-item-action text-light bg-transparent  {{ Request::is('buat-berita*') ? 'aktip' : '' }}"><i
                        class="bi bi-newspaper"></i> Buat Berita</a>
                <a href="{{ url('/pengajuan-surat') }}"
                    class="list-group-item list-group-item-action bg-transparent text-light  {{ Request::is('pengajuan-surat*') ? 'aktip' : '' }} "><i
                        class="bi bi-envelope-paper-fill"></i> Pengajuan Surat</a>

                {{-- jika yg login bukan admin maka hiden dengan blade @can --}}
                {{-- ('isAdmin di ambil dari AppServiceProvider') --}}
                @can('isAdmin')
                    <div class="dropend list-group-item text-light bg-transparent">
                        <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> <i class="bi bi-folder-plus"></i>
                            Register
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-text-fill"></i>
                                    Register Surat Keterangan</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="{{ url('/register-nikah') }}"><i
                                        class="bi bi-person-hearts"></i> Register Pengantar Nikah</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-vcard-fill"></i> Register KK
                                    & KTP</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-repeat"></i> Register Pindah &
                                    Datang</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-reddit"></i> Register Kelahiran &
                                    Kematian</a></li>
                        </ul>
                    </div>



                    <a href="{{ url('/surat-masuk') }}"
                        class="list-group-item list-group-item-action bg-transparent text-light  {{ Request::is('surat-masuk*') ? 'aktip' : '' }} "><i
                            class="bi bi-file-earmark-pdf-fill"></i> Surat Masuk</a>
                    <a href="{{ url('/surat-keluar') }}"
                        class="list-group-item list-group-item-action bg-transparent text-light  {{ Request::is('surat-keluar*') ? 'aktip' : '' }} "><i
                            class="bi bi-send-plus"></i> Surat Keluar</a>
                @endcan
                {{-- Akhir @can('isAdmin') --}}
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-2 px-4 header">

                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 m-0 text-capitalize text-light">{{ $title }}</h2>
                </div>

                <!-- username sidebar -->
                <div class="dropdown ms-auto dropstart">
                    {{-- <span class="text-light">Admin</span>  --}}
                    <img src="Asetpictures/kandi.png" alt="" class="rounded-full profil-user bg-light"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu">
                        <li class=""><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i>
                                Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Pengaturan</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        {{-- tombol loguot --}}
                        <form action="/logout" method="post">
                            @csrf
                            <li><button type="submit" name="" class="dropdown-item text-danger fw-bold"><i
                                        class="bi bi-box-arrow-left"></i> Keluar</button></li>
                        </form>
                        {{-- akhir tombol logout --}}
                    </ul>
                </div>

                <!-- end username -->
            </nav>

            <div class="container">
                @yield('dashboard')
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
        let sidebar = document.getElementById('page-content-wrapper')

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };

        sidebar.addEventListener('click', function(e) {
            sidebar.classList.toggle('margin')
        })
    </script>
</body>

</html>
