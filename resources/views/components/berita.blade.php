@extends('menu.navbar')

@section('components')
    <!-- header -->
    {{-- @include('menu.header') --}}
    <!-- akhir header -->

    {{-- @include('menu.layanan') --}}
    <div class="container">



        <!-- Berita Terbaru -->
        <nav class="navbar navbar-expand-lg color-nav-berita navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-title-categori" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach ($categoriAll as $categori)
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page"
                                    href="/kategori/{{ $categori->slug }}">{{ $categori->nama }}</a>
                                {{-- <a class="nav-link"
                                    href="{{ route('kategori', $categori->slug) }}">{{ $categori->nama }}</a> --}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <article class="mb-3 overflow-hidden w-100">
            <div class="row">
                <div class="col-md-12 header-hero">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="berita-hero">
                </div>
                <div class="col-md-8 px-5  rounded overflow-hidden">
                    <a href="/categori/{{ $categori->slug }}">
                        <p class="badge text-dark mt-2 px-3 fs-5" style="background: #AED2FF">{{ $berita->categori->nama }}
                        </p>
                    </a>

                    <h2 class="text-primary fw-bold">{{ $berita->title }}</h2>
                    <table class="text-success">
                        <tr>
                            <td class="pe-2">Di Tulis Oleh </td>
                            <td>: </td>
                            <td class="ps-2"> {{ $berita->user->nama }}</td>
                        </tr>
                        <tr>
                            <td class="pe-2">Di Buat </td>
                            <td>: </td>
                            <td class="ps-2"> {{ $berita->created_at->diffForHumans() }}</td>
                        </tr>
                    </table>
                    <p class="">{!! $berita->body !!}</p>

                </div>

                <div class="col-md-4">
                    <h3 class="mt-2 ms-2"><i class="bi bi-newspaper"></i> <u>Berita Terkait</u></h3>
                    @foreach ($allBerita as $categori)
                        <a href="/berita/{{ $categori->slug }}"
                            class="d-flex align-items-center mt-2 me-2 text-decoration-none text-dark side-categori">
                            <img src="{{ asset('storage/' . $categori->image) }}" alt=""
                                class="image-categori ps-2">
                            <p class="px-2">{{ Illuminate\Support\Str::words($categori->title, 8) }} </p>
                        </a>
                    @endforeach
                </div>

            </div>
        </article>
    </div>

    {{-- footer --}}
    @include('menu.footer')
    {{-- akhir footer --}}
    <!--Aakhir Berita Terbaru -->
@endsection
