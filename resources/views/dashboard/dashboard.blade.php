<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
            <div class="sidebar-heading text-center py-2 text-light fs-4 fw-bold text-uppercase border-bottom"><img src="Asetpictures/logo.png" alt="" class="logodesa"> SIDESPA</div>
            <div class="list-group list-group-flush my-3 pos">
                <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action text-light bg-transparent fw-bold {{ Request::is('dashboard') ? 'aktip' : '' }}"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ url('/pengajuan-surat') }}" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ Request::is('pengajuan-surat') ? 'aktip' : '' }} "><i class="bi bi-envelope-paper-fill"></i> Pengajuan Surat</a>
                <a href="{{ url('/list-surat') }}" class="list-group-item list-group-item-action bg-transparent text-light fw-bold  {{ Request::is('list-surat') ? 'aktip' : '' }} "><i class="fas fa-chart-line me-2"></i>List Pengajuan</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-light fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-light fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-light fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-light fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-light fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-2 px-4 header">
                
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 m-0 text-uppercase text-light">{{ $title }}</h2>
                </div>

                <!-- username sidebar -->
                <div class="dropdown ms-auto dropstart">
                    <img src="Asetpictures/kandi.png" alt="" class="rounded-full profil-user bg-light" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu">
                        <li class=""><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        {{-- tombol loguot --}}
                        <form action="/logout" method="post">
                            @csrf
                              <li><button type="submit" name="" class="dropdown-item text-danger fw-bold"><i class="bi bi-box-arrow-left"></i> Keluar</button></li>
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

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        sidebar.addEventListener('click', function (e) {
            sidebar.classList.toggle('margin')
        })
    </script>
</body>

</html>