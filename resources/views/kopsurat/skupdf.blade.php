@extends('kopsurat.mainsurat')

@section('body')

<p style="text-indent: 40px;">Yang bertanda tangan di bawah ini Kepala Desa Parage Kecamatan Cikulur Kabupaten Lebak,
    dengan ini menerangkan bawa:
</p>
<table style="margin-left: 40px;">
    <tr>
        <td>Nama </td>
        <td >: </td>
        <td>{{ $sku->nama_pemohon }}</td>
    </tr>
    <tr>
        <td>NIK </td>
        <td >: </td>
        <td>{{ $sku->nik_pemohon }}</td>
    </tr>
    <tr>
        <td>Tempat, Tgl Lahir </td>
        <td >: </td>
        <td>{{ $sku->tempatlahir_pemohon }}, {{ $sku->tanggallahir_pemohon }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td >: </td>
        <td>{{ $sku->kelamin_pemohon }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td >: </td>
        <td>{{ $sku->agama_pemohon }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>: </td>
        <td>{{ $sku->pekerjaan_pemohon }}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td>: </td>
        <td>{{ $sku->kewarganegaraan_pemohon }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: </td>
        <td>{{ $sku->alamat_pemohon }}</td>
    </tr>
    <tr>
        <td>Jenis Usaha</td>
        <td>: </td>
        <td>{{ $sku->jenis_usaha }}</td>
    </tr>
</table>
<p class="ket" style="text-indent: 40px;">Adalah benar nama tersebut di atas sebagai warga Desa Parage 
    {{ $sku->alamat_pemohon }}  Kode Pos 42356, yang memiliki jenis usaha yaitu {{ $sku->jenis_usaha }} dan masih aktif sampai sekarang</p>
<p class="ket" style="text-indent: 40px;">Demikian Surat Keterangan Usaha ini dibuat dengan sebenar-benarnya, dan untuk di pergunakan sebagaimana mestinya.</p>
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


















