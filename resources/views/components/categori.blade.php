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
            <p>sadlk</p>
            @foreach ($categori as $item)
                <h2>{{ $item->slug }}</h2>
            @endforeach



        </main>
    </div>
    {{-- maps dan komentar --}}
    @include('menu.maps')
    {{-- akhir maps dan komentar --}}

    {{-- footer --}}
    @include('menu.footer')
    {{-- akhir footer --}}
    <!--Aakhir Berita Terbaru -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
@endsection
