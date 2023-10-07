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

                @forelse ($beritas as $item)
                    <div class="col-md-4 mt-3">
                        <a href="/berita/{{ $item->slug }}" class="card text-decoration-none text-dark shadow"
                            style="height: 280px; border-bottom: #050a30 solid 3px;">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="..."
                                style="overflow:hidden">
                            <h5 class="card-title p-2">{{ $item->title }}</h5>
                        </a>
                    </div>

                @empty
                    <p>Berita Kosong😪</p>
                @endforelse

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
