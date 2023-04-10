@extends('kopsurat.mainsurat')

@section('body')
    <p style="text-indent: 40px;">Yang bertanda tangan di bawah ini Kepala Desa Parage Kecamatan Cikulur Kabupaten Lebak,
        menerangkan dengan sebenarnya:
    </p>
    <style>
        table{
            position: relative;
        }
        
    </style>
    <table style="padding-left: 40px;">
        <tr>
            <td>Nama </td>
            <td>: </td>
            <td><u>{{ $sktmsekolah->nama_siswa }}</u></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir </td>
            <td>: </td>
            <td>{{ $sktmsekolah->tempatlahir_siswa }}, {{ $sktmsekolah->tanggallahir_siswa }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: </td>
            <td>{{ $sktmsekolah->jenis_kelamin_siswa }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: </td>
            <td>{{ $sktmsekolah->agama }}</td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>: </td>
            <td>{{ $sktmsekolah->kewarganegaraan_siswa }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: </td>
            <td>{{ $sktmsekolah->pekerjaan_siswa }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: </td>
            <td>{{ $sktmsekolah->alamat_siswa }}</td>
        </tr>
        <p style="position: absolute; left: 0;">Adalah anak dari orang tua :</p>
        <p style=" font-weight:bold;">Ayah</p>
        {{-- <tr>
            <td >Ayah</td>
        </tr> --}}
        <tr style="padding-top: 10px">
            <td>Nama</td>
            <td> :</td>
            <td><u>{{ $sktmsekolah->nama_ayah }}</u></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir </td>
            <td>: </td>
            <td>{{ $sktmsekolah->tempatlahir_ayah }}, {{ $sktmsekolah->tanggallahir_ayah }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: </td>
            <td>{{ $sktmsekolah->agama_ayah }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: </td>
            <td>{{ $sktmsekolah->pekerjaan_ayah }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: </td>
            <td>{{ $sktmsekolah->alamat_ayah }}</td>
        </tr>
        <tr>
            <td>Ibu</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> :</td>
            <td><u>{{ $sktmsekolah->nama_ibu }}</u></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir </td>
            <td>: </td>
            <td>{{ $sktmsekolah->tempatlahir_ibu }}, {{ $sktmsekolah->tanggallahir_ibu }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: </td>
            <td>{{ $sktmsekolah->agama_ibu }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: </td>
            <td>{{ $sktmsekolah->pekerjaan_ibu }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: </td>
            <td>{{ $sktmsekolah->alamat_ibu }}</td>
        </tr>
    </table>
    <p style="text-indent: 40px;">Berdasarkan data dan catatan yang ada serta sepanjang sepengetahuan kami, nama tersebut di atas adalah
        benar termasuk <u>Keluarga Tudak Mampu.</u><br>Surat keterangan ini di berikan untuk
        keperluan <u >SEKOLAH</u><br>Demikian surat keterangan ini kami buat untuk di pergunakan
        dengan semestinya.</p>
        <div style="text-align: center; line-height: 10px; padding-top: 5px; float: right;">
            <p style="padding-bottom: 10px;">Parage, {{ Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}</p>
            <p>Mengetahui</p>
            <p>a.n Kepala Desa Parage</p>
            <p style="padding-bottom: 50px;">Sekretaris Desa</p>
            <p><u>MUHAMAD JUHANDI,S.IKom</u></p>
            <p>NRPDes.19940527201708.2054</p>
        </div>
@endsection