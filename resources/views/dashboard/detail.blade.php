@extends('dashboard.dashboard')

@section('dashboard')

<div class="row mt-4">
    <div class="col-md-6">
    
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th class="col text-center">Nama</th>
                <th class="col text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($domisili as $item)
            <tr>
                <td class="fw-semibold">{{ $item->nama }}</td>
                <td class="text-center">
                    <a href="" class="btn btn-warning fw-semibold"><i class="bi bi-pencil-fill"></i> Edit</a>
                    {{-- <a href="/domisili/{{ $item->id }}" class="btn btn-info fw-semibold"><i class="bi bi-arrow-up-right-circle-fill"></i> detail</a> --}}
                    <a href="/cetak/{{ $item->id }}" class="btn btn-primary fw-semibold" target="_blang"><i class="bi bi-printer"></i> Cetak</a>
                    {{-- <a href="/domisili/{{ $item->id }}">DOWNLOAD</a> --}}
                </td>
            </tr>
            @empty
                <p class="text-center">Data Tidak Ada</p>
            @endforelse
            
        </tbody>
    </table>
</div>
    </div>
@endsection