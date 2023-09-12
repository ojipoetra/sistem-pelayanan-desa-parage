@extends('dashboard.navbar')

@section('dashboard')
    <div class="mt-3">
        <button class="btn btn-info"><i class="bi bi-printer"></i> Cetak</button>
    </div>

    <table class="table table-primary table-striped mt-3">
        <thead class="">
            <tr class="text-center align-middle">
                <th scope="col">No.</th>
                <th scope="col">Tanggal</th>
                <th scope="col">No. Register</th>
                <th scope="col">Nama Calon</th>
                <th scope="col" class="text-start">Alamat</th>
                <th scope="col" class="text-start">Alamat Nikah</th>
                <th scope="col">Status</th>
                <th scope="col">Penanggung Jawab</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengantarnikah as $data)
                <tr class="align-middle">
                    <td class="text-center">{{ $loop->iteration }}.</td>
                    <td class="col-2 text-center">{{Carbon\Carbon::parse($data->created_at)->isoFormat('D MMMM Y') }}</td>
                    <td class="text-center">141.2/{{ $loop->iteration }}/Ket/{{ bulanHelper::convertToRoman(date('m', strtotime($data->created_at))) }}/{{Carbon\Carbon::parse($data->created_at)->isoFormat('Y') }}</td>
                    <td class="text-center">{{ $data->nama_pemohon }}</td>
                    <td class="col-2">{{ $data->alamat_pemohon }}</td>
                    <td class="col-2">{{ $data->tempat_akad }}</td>
                    <td class="text-center">{{ $data->statuspernikahan_pemohon }}</td>
                    <td class="text-center">Sekdes</td>
                    <td>
                        <button class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#"><i
                                class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#"><i
                                class="bi bi-trash3"></i></button>
                    </td>
                </tr>
                <tr>
                @empty
                    <td colspan="9" class="p-5 text-center fs-3">Data Kosong 4😥4 !</td>
                </tr>
            @endforelse


        </tbody>
    </table>
@endsection
