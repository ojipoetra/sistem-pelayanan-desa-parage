@extends('kopsurat.mainsurat')

@section('body')

<p style="text-indent: 40px;">Yang bertanda tangan di bawah ini Kepala Desa Parage Kecamatan Cikulur Kabupaten Lebak,
    menerangkan bawa:
</p>
<table style="margin-left: 40px;">
    <tr>
        <td>Nama </td>
        <td >: </td>
        <td>{{ $domisili->nama }}</td>
    </tr>
    <tr>
        <td>NIK </td>
        <td >: </td>
        <td>{{ $domisili->nik }}</td>
    </tr>
    <tr>
        <td>Tempat, Tgl Lahir </td>
        <td >: </td>
        <td>{{ $domisili->tempatlahir }}, {{ $domisili->tanggallahir }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td >: </td>
        <td>{{ $domisili->jnskelamin }}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td >: </td>
        <td>{{ $domisili->kewarganegaraan }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>: </td>
        <td>{{ $domisili->agama }}</td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>: </td>
        <td>{{ $domisili->status }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: </td>
        <td>{{ $domisili->pekerjaan }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: </td>
        <td>{{ $domisili->alamat }}</td>
    </tr>
</table>
<p class="ket" style="text-indent: 40px;">Nama Tersebut di atas berdasarkan keterangan dari pemohon, bahwa saat
    ini sedang
    berdomisili/Tinggal di
    {{ $domisili->alamat }} Rt 008 Rw 002 Desa Parage Kecamatan Cikulur Kabupaten Lebak-Banten Kode Pos 42356, dan
    telah tinggal pada alamat tersebut lebih dari satu tahun.</p>
<p class="ket" style="text-indent: 40px;">Demikian Surat Keterangan Domisili ini dibuat dengan sebenarnya, dan
    untuk di pergunakan
    sebagaimana
    mestinya.</p>
<div class="row">
    <div class="col-12" style="text-align: center; line-height: 10px; padding-top: 5px; float: right;">
        <p style="padding-bottom: 10px;">Parage, {{ Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>
        <p class="">Mengetahui</p>
        <p class="">a.n Kepala Desa Parage</p>
        <p class="" style="padding-bottom: 50px;">Sekretaris Desa</p>
        <p class="pt-5 fw-bold"><u>MUHAMAD JUHANDI,S.IKom</u></p>
        <p class="">NRPDes.19940527201708.2054</p>
    </div>
</div>
</div>
</div>
@endsection


















