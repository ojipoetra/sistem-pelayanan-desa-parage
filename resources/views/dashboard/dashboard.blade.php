@extends('dashboard.navbar')
{{-- @include('dashboard.detail') --}}

@section('dashboard')
    <div class="row mt-4">
        <div class="col-lg-4 pb-2">
            <a href="/domisili"
                class="d-flex align-items-center rounded shadow-sm text-decoration-none bg-primary text-light">
                <p class="p-2">Silahkan Lihat Pengajuan Surat Domisili Anda Disini</p>
                <h1 class="fs-1 text-danger ps-2 me-3 border-start border-light border-2">{{ $totalDomisili }}</h1>
            </a>
        </div>
        <div class="col-lg-4 pb-2">
            <a href="/list-surat-sktm-sekolah"
                class="d-flex align-items-center bg-success rounded shadow-sm text-decoration-none text-light ">
                <p class="p-2">Silahkan Lihat Pengajuan SKTM Untuk Sekolah Anda Disini</p>
                <h1 class="fs-1 text-danger ps-2 me-3 border-start border-light border-2">{{ $totalSktmSekolah }}</h1>
            </a>
        </div>
        <div class="col-lg-4 pb-2">
            <a href="/suratsku"
                class="d-flex align-items-center bg-warning rounded shadow-sm text-decoration-none text-light ">
                <p class="p-2">Silahkan Lihat Pengajuan Keterangan Usaha</p>
                <h1 class="fs-1 text-danger ps-2 me-3 border-start border-light border-2">{{ $totalSku }}</h1>
            </a>
        </div>
        <div class="col-lg-4 pb-2">
            <a href="/list-pengantar-nikah"
                class="d-flex align-items-center bg-info rounded shadow-sm text-decoration-none text-light ">
                <p class="p-2">Silahkan Lihat Pengajuan Surat Pengantar Nikah Anda Disini</p>
                <h1 class="fs-1 text-danger ps-2 me-3 border-start border-light border-2">{{ $totalPengantarNikah }}</h1>
            </a>
        </div>
    </div>
@endsection
