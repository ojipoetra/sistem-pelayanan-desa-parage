@extends('menu.navbar')

@section('components')
    <!-- header -->
    {{-- @include('menu.header') --}}
    <!-- akhir header -->

    {{-- @include('menu.layanan') --}}
    <div class="container">



        <!-- Berita Terbaru -->
        <article class="my-3 overflow-hidden">
            <div class="row">
                <div class="col-md-8 px-5 rounded overflow-hidden" style="background: #F6F6F6; ">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="img-fluid">
                    <a href="">
                        <p class="badge text-dark mt-2 px-3 fs-5" style="background: #AED2FF">{{ $berita->categori->nama }}
                        </p>
                    </a>

                    <h4 class="color: #050a30">{{ $berita->title }}</h4>
                    <span>12 oktober 2023</span>
                    <p class="">{!! $berita->body !!}</p>

                </div>
                {{-- <div class="col-md-4 d-grid gap-2">
                    <h2 class="text-light rounded" style="background: #050a30">Berita Yang Sesuai</h2>
                    @foreach ($allBerita as $item)
                        <div class=" row ms-2" style="background: #ba4343">
                            <div class="col-md-5">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid ">
                                <span class="badge text-dark mt-1 px-1"
                                    style="background: #AED2FF">{{ $berita->categori->nama }}</span>
                            </div>
                            <div class="col-7 col-md-4">
                                <p>{{ $item->title }}</p>
                            </div>
                        </div>
                    @endforeach

                </div> --}}

                <div class="col-md-4">
                    {{-- <h2 class="">Berita Terkait</h2>
                    @forelse ($allBerita as $item)
                        <a href="/berita/{{ $item->slug }}" class="card text-decoration-none text-dark shadow row"
                            style="height: 280px; border-bottom: #050a30 solid 3px;">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top col-md-5" alt="..."
                                style="overflow:hidden">
                            <h5 class="card-title p-2 col-7 col-md-4">{{ $item->title }}</h5>
                        </a>

                    @empty
                        <p>Berita Kosong😪</p>
                    @endforelse --}}


                    <div class="card mb-3" style="max-width: 540px;">
                        @forelse ($allBerita as $item)
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting .</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Berita Kosong</p>
                        @endforelse

                    </div>
                </div>

            </div>
        </article>
    </div>
    {{-- maps dan komentar --}}
    @include('menu.maps')
    {{-- akhir maps dan komentar --}}

    {{-- footer --}}
    @include('menu.footer')
    {{-- akhir footer --}}
    <!--Aakhir Berita Terbaru -->
@endsection
