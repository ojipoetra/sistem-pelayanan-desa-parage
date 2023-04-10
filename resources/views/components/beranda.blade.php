@extends('menu.navbar')

@section('components')
    


<!-- header -->
@include('menu.header')
<!-- akhir header -->

@include('menu.layanan')
    <div class="container">

        <!-- Berita Terbaru -->
        <main class="my-3">
            <h2 class="mt-2 text-center rounded fw-semibold text-light bg-primary">Berita Terkini</h2>
            <div class="row justify-content-evenly ">
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="" class="card text-decoration-none text-dark p-2">
                        {{-- <img src="Saved Pictures//error.jpg" class="card-img-top" alt="..."> --}}
                        <h4 class="card-title">Descripsi</h4>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, delectus!
                        </p>
                    </a>
                </div>
        </main>
    </div>
    {{-- maps dan komentar --}}
    @include('menu.maps')
    {{-- akhir maps dan komentar --}}

    {{-- footer --}}
    @include('menu.footer')
    {{-- akhir footer --}}
    <!--Aakhir Berita Terbaru -->
@endsection