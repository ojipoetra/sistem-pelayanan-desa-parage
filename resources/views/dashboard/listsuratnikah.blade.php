@extends('dashboard.navbar')

@section('dashboard')
@include('formulirSurat/updatesuratpengantarnikah')

<div class="row mt-4">
    <div class="col-md-6">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th class="col text-center">Nama</th>
                    <th class="col text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengantarnikah as $item)
                <tr>
                    <td>{{ $item->nama_pemohon }}</td>
                    <td class="text-center">
                        <button class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#updatepengantarnikah{{ $item->id }}"><i class="bi bi-pencil-fill"></i></button>
                        @can('isAdmin')
                        <form action="/pengantarnikah/{{ $item->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Yakin Ingin Menghapus?')"><i class="bi bi-trash3"></i></button>
                        </form>
                        @endcan
                        <a href="/pengantarnikah/{{ $item->id }}" class="btn btn-primary fw-semibold" target="_blang"><i class="bi bi-printer"></i></a>
                    </td>
                @empty
                    <td colspan="2" class="p-5 text-center fs-3">Data Kosong 4😥4!</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection