@extends('dashboard.dashboard')

@section('dashboard')
<div class="row mt-4">
    <div class="col-lg-4 pb-2">
        <a href="/detail-surat" class="d-flex align-items-center bg-light rounded shadow-sm text-decoration-none text-dark fw-bolder">
            <p class="p-2">Silahkan Lihat Pengajuan Surat Domisili Anda Disini</p>            
            <h1 class="fs-1 text-danger pe-3">1</h1>
        </a>
    </div>
    <div class="col-lg-4 pb-2">
        <a href="/list-surat-sktm-sekolah" class="d-flex align-items-center bg-light rounded shadow-sm text-decoration-none text-dark fw-bolder">
            <p class="p-2">Silahkan Lihat Pengajuan SKTM Untuk Sekolah Anda Disini</p>            
            <h1 class="fs-1 text-danger pe-3">0</h1>
        </a>
    </div>
    <div class="col-lg-4 pb-2">
        <a href="" class="d-flex align-items-center bg-light rounded shadow-sm text-decoration-none text-dark fw-bolder">
            <p class="p-2">Silahkan Lihat Pengajuan SKTM Untuk Rumah Sakit Anda Disini</p>            
            <h1 class="fs-1 text-danger pe-3">0</h1>
        </a>
    </div>
    <div class="col-lg-4 pb-2">
        <a href="/list-pengantar-nikah" class="d-flex align-items-center bg-light rounded shadow-sm text-decoration-none text-dark fw-bolder">
            <p class="p-2">Silahkan Lihat Pengajuan Surat Pengantar Nikah Anda Disini</p>            
            <h1 class="fs-1 text-danger pe-3">0</h1>
        </a>
    </div>
</div>
    
@endsection