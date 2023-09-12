@extends('dashboard.navbar')

@section('dashboard')

@include('formulirSurat/updatesku')

<div class="row mt-4">
    <div class="col-md-6">
        
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('delete') }}
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
            @forelse ($sku as $data)
            <tr>
                <td >{{ $data->nama_pemohon }}</td>
                <td class="text-center">
                    <button class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#updatesku{{ $data->id }}"><i class="bi bi-pencil-fill"></i></button>
                    <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{ $data->id }}"><i class="bi bi-trash3"></i></button>
                    <a href="/suratsku/{{ $data->id }}" class="btn btn-primary " target="_blang"><i class="bi bi-printer"></i></a>
                </td>
            </tr>
            @empty
            <tr>  
                <td colspan="2" class="p-5 text-center fs-3">Data Kosong 4😥4 !</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
</div>
    </div>
    @foreach ($sku as $data)    
        <div class="modal fade" id="delete{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="bi bi-chat-right-dots"></i> Yakin ingin menghapus data ini!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                {{ $data->nama_pemohon }}
                </div>
                <div class="modal-footer">
                <form action="/suratsku/{{ $data->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Batal</button>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"> </i>Hapus</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection