<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengantar Nikah</title>
</head>
<body>

<style>
   

    @page{
        size: 216.9mm 330.6mm;
        font-size: 16px;
        font-family: 'Times New Roman', Times, serif;
    }

    .page{
        page-break-after: always;
    }
    /* page 1 */
    .page .lampiran{
        font-size: 12px;
        margin-left: 300px;
    }

    /* .page .model{
        margin-left: 400px
    } */
    .page .kop_surat{
        text-align: center;
    }
    .page .header{
        position: relative;
        text-align: center;
        font-weight: bold
    }

    .page .model{
        position: absolute;
        content: '';
        right: 30px;
        font-style: italic;
        font-weight: bold;
    }

    .page table{
        font-size: 14px;
    }

    .page .paragraf{
        text-indent: 40px; 
        text-align: justify;  
    }

    .page .tanda-tangan{
        text-align: center;
        float: right;
        padding-right: 40px;
    }

    .page .tanda-tangan .tanggal_penetapan{
        padding-bottom: 40px;
    }

    .tanda-tangan-calon{
        margin-top: 50px;
    }
    .tanda-tangan-calon .tanda-tangan-suami{
        float: left; 
        padding-left: 30px
    }

    /* page 2 */
    .tanggal{
        padding-top: 10px;
    }

   
   
</style>

<body>
    <!-- lampiran N1 -->
    <div class="page">
        <p class="lampiran">LAMPIRAN IV <br> KEPUTUSAN DIREKTUR JENDERAL
            BIMBINGAN MASYARAKAT
            ISLAM <br> NOMOR 473 TAHUN 2020 <br> TENTANG
            <br> PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
            <div class="header"><span>FORMULIR SURAT PENGANTAR NIKAH <span class="model">Model N1</span></span></div>
        
        
        <table>
            <tr>
                <td>KANTOR DESA/KELURAHAN</td>
                <td> :</td>
                <td>PARAGE</td>
            </tr>
            <tr>
                <td>KECAMATAN</td>
                <td> :</td>
                <td>CIKULUR</td>
            </tr>
            <tr>
                <td>KABUPATEN/KOTA</td>
                <td> :</td>
                <td>LEBAK</td>
            </tr>
        </table>
        <div class="kop_surat" ><u>{{ $title }}</u><br><div>No:141.2/..... / Ket /Ds-2011/{{ bulanHelper::bulan() }}/{{ Carbon\Carbon::now()->year}}</div></div>
        <p style="line-height: 1px">Yang bertanda tangan di bawah ini menjelaskan dengan sesungguhnya bahwa :</p>
        <table>
            <tr>
                <td>1. </td>
                <td>Nama</td>
                <td> :</td>
                <td>{{ $pengantarnikah->nama_pemohon }}</td>
            </tr>
            <tr>
                <td>2. </td>
                <td>Nomor Induk Kependudukan</td>
                <td> :</td>
                <td>{{ $pengantarnikah->nik_pemohon }}</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Jenis Kelamin</td>
                <td> :</td>
                <td>{{ $pengantarnikah->kelamin_pemohon }}</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> :</td>
                <td>{{ $pengantarnikah->tempatlahir_pemohon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_pemohon)->isoFormat('D MMMM Y') }}</td>
            </tr>
            <tr>
                <td>5. </td>
                <td>Kewarganegaraan</td>
                <td> :</td>
                <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
            </tr>
            <tr>
                <td>6. </td>
                <td>Agama</td>
                <td> :</td>
                <td>{{ $pengantarnikah->agama_pemohon }}</td>
            </tr>
            <tr>
                <td>7. </td>
                <td>Pekerjaan</td>
                <td> :</td>
                <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
            </tr>
            <tr>
                <td>8. </td>
                <td>Alamat</td>
                <td> :</td>
                <td>{{ $pengantarnikah->alamat_pemohon }}</td>
            </tr>
            <tr>
                <td>9. </td>
                <td>Status Pernikahan</td>
                <td> :</td>
                <td>{{ $pengantarnikah->statuspernikahan_pemohon }}</td>
            </tr>
            <tr>
                <td>a. </td>
                <td>Laki-Laki : Jejaka, Duda</td>
                <td> :</td>
                @if ($pengantarnikah->statuspernikahan_pemohon === 'Belum Kawin' && $pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td style="font-weight: bold;" id="jejaka">Jejaka</td>
                @elseif($pengantarnikah->statuspernikahan_pemohon === 'Kawin' && $pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td style="font-weight: bold;" id="duda">Duda</td>
                @else
                    <td></td>
                @endif
            </tr>
            <tr>
                <td></td>
                <td>Atau beristri ke.......</td>
                <td> :</td>
                <td style="font-weight: bold;"></td>
            </tr>
            <tr>
                <td>b. </td>
                <td>Perempuan : Perawan, Janda</td>
                <td> :</td>
                @if ($pengantarnikah->statuspernikahan_pemohon === 'Belum Kawin' && $pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td style="font-weight: bold;" id="perawan">Perawan</td>
                @elseif($pengantarnikah->statuspernikahan_pemohon === 'Kawin' && $pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td style="font-weight: bold;" id="janda">Janda</td>
                @else
                    <td></td>
                @endif
            </tr>
        </table>
        <p>Adalah benar anak dari pernikahan seseorang pria :</p>
        <table>
            <tr>
                <td>Nama Lengkap dan Alias</td>
                <td > :</td>
                <td>{{ $pengantarnikah->nama_ayah }}</td>
            </tr>
            <tr>
                <td>Bin/Binti</td>
                <td > :</td>
                <td>{{ $pengantarnikah->bin }}</td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td > :</td>
                <td>{{ $pengantarnikah->nik_ayah }}</td>
            </tr>
            <tr>
                <td>Tempat dan tanggal lahir</td>
                <td > :</td>
                <td>{{ $pengantarnikah->tempatlahir_ayah }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_ayah)->isoFormat('D MMMM Y') }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td > :</td>
                <td>{{ $pengantarnikah->kewarganegaraan_ayah }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td > :</td>
                <td>{{  $pengantarnikah->agama_ayah }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td > :</td>
                <td>{{ $pengantarnikah->pekerjaan_ayah }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td > :</td>
                <td>{{ $pengantarnikah->alamat_ayah }}</td>
            </tr>
            <tr>
                <td>Dengan seorang wanita</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Lengkap dan Alias</td>
                <td > :</td>
                <td>{{ $pengantarnikah->nama_ibu }}</td>
            </tr>
            <tr>
                <td>Bin/Binti</td>
                <td > :</td>
                <td>{{ $pengantarnikah->binti }}</td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td > :</td>
                <td>{{ $pengantarnikah->nik_ibu }}</td>
            </tr>
            <tr>
                <td>Tempat dan tanggal lahir</td>
                <td > :</td>
                <td>{{ $pengantarnikah->tempatlahir_ibu }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_ibu)->isoFormat('D MMMM Y') }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td > :</td>
                <td>{{ $pengantarnikah->kewarganegaraan_ibu }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td > :</td>
                <td>{{ $pengantarnikah->agama_ibu }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td > :</td>
                <td>{{ $pengantarnikah->pekerjaan_ibu }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td > :</td>
                <td>{{ $pengantarnikah->alamat_ibu }}</td>
            </tr>
        </table>
        <p>Demikian, Surat pengantar ini dibuat dengan mengingat sumpah jabatan dan untuk di pergunakan sebagaimana
            mestinya
        </p>
        <div class="tanda-tangan">
            <p class="tanggal_penetapan">Parage, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }} <br>Mengetahui <br>a.n Kepala Desa Parage <br>Sekretaris Desa</p>
            <div><u style="font-weight: bold; ">MUHAMAD JUHANDI,S.IKom</u> <br> <span></span> NRPDes.19940527201708.2054</div>
        </div>
    </div>
    <!-- akhir lampiran N1 -->

    <!-- lampiran N2 -->
    <div class="page">
        <p class="lampiran">LAMPIRAN VI <br> KEPUTUSAN DIREKTUR JENDERAL
            BIMBINGAN MASYARAKAT
            ISLAM <br> NOMOR 473 TAHUN 2020 <br> TENTANG
            <br> PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
        <div class="header"><span><u> FORMULIR PERMOHONAN KEHENDAK NIKAH </u><span class="model">Model N2</span></span></div>
        
        <div class="tanggal"><span>Prihal : Permohonan Kehendak Nikah </span> <span style="padding-left: 310px">Parage, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span></div>
        
        
        <p>Kepada yth, <br>Kepala KUA Kecamatan /PPN LN <br>di Tempat</p>
        <p>Dengan hormat, kami mengajukan permohonan kehendak nikah untuk atas nama</p>
        <table>
            <tr>
                <td>Calon suami </td>
                <td> : </td>
                 @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_pemohon }}</td>
                 @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_calon }}</td>
                 @endif
            </tr>
            <tr>
                <td>Calon istri</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>Hari/Tanggal/Jam</td>
                <td> : </td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tempat akad nikah </td>
                <td> : </td>
                <td>{{ $pengantarnikah->tempat_akad }}</td>
            </tr>
            <tr>
                <td>Maskawin Berupa</td>
                <td> : </td>
                <td>-</td>
            </tr>
        </table>
        <p>Bersama ini kami sampaikan surat-surat yang diperlukan untuk diperiksa sebagai berikut:</p>
        <table>
            <tr>
                <td>1. </td>
                <td>Surat pengantar nikah dari Desa/Kelurahan</td>
            </tr>
            <tr>
                <td>2. </td>
                <td>Persetujuan calon mempelai</td>
            </tr>
            <tr>
                <td>3. </td>
                <td>Fotokopi KTP</td>
            </tr>
            <tr>
                <td>4. </td>
                <td>Fotokopi akte kelahiran</td>
            </tr>
            <tr>
                <td>5. </td>
                <td>Fotokopi kartu keluarga</td>
            </tr>
            <tr>
                <td>6. </td>
                <td>Paspoto 2x3 = 3 lembar berlatar belakang biru</td>
            </tr>
            <tr>
                <td>7. </td>
                <td>...........................................</td>
            </tr>
            <tr>
                <td>8. </td>
                <td>...........................................</td>
            </tr>
        </table>
        <p style="text-indent: 40px;">Demikian permohonan ini kami sampaikan, kiranya dapat diperiksa, dihadiri, dan
            dicatat sesuai dengan ketentuan peraturan perundang-undangan,</p>
        <div style="float: left;">
            <p style="padding-bottom: 80px;">Diterima Tanggal ..................... <br>Yang menerima,<br>Kepala KUA/PPN
                Luar Negeri</p>
            <p>...............................................</p>
        </div>
        <div class="tanda-tangan">
            <p style="padding-bottom: 80px;">Wasalam,<br>Pemohon</p> 
            @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                <p style="font-weight: bold; text-transform: uppercase;"><u>{{ $pengantarnikah->nama_pemohon }}</u></p>
            @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                <p style="font-weight: bold; text-transform: uppercase;"><u>{{ $pengantarnikah->nama_pemohon }}</u></p>
            @endif
        </div>
    </div>
    <!-- akhir lampiran N2 -->

    <!-- lampiran N4 -->
    <div class="page">
        <p class="lampiran">LAMPIRAN VIII <br> KEPUTUSAN DIREKTUR JENDERAL
            BIMBINGAN MASYARAKAT
            ISLAM <br> NOMOR 473 TAHUN 2020 <br> TENTANG
            <br> PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
        <div class="header"><span><u> FORMULIR PERSETUJUAN CALON PENGANTIN </u><span class="model">Model N4</span></span></div>
        <p>Yang bertanda tangan di bawah ini:</p>
        <p style="line-height: 1px;">A. Calon Suami</p>
        <table style="margin-left: 20px;">
            <tr>
                <td>1. </td>
                <td>Nama lengkap dan alias</td>
                <td> :</td>
                 @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_pemohon }}</td>
                 @else
                    <td>{{ $pengantarnikah->nama_calon }}</td>
                 @endif
            </tr>
            <tr>
                <td>2. </td>
                <td>Bin/Binti</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_ayah }}</td>
                 @else
                    <td>{{ $pengantarnikah->bintun }}</td>
                 @endif
            </tr>
            <tr>
                <td>3. </td>
                <td>Nomor Induk Kependudukan </td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nik_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->nik_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->tempatlahir_pemohon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_pemohon)->isoFormat('D MMMM Y') }}</td>
                @else
                    <td>{{ $pengantarnikah->tempatlahir_calon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_calon)->isoFormat('D MMMM Y') }}</td>
                @endif
            </tr>
            <tr>
                <td>5. </td>
                <td>Kewarganegaraan</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->kewarganegaraan_calon }}</td>
                @endif
                
            </tr>
            <tr>
                <td>6. </td>
                <td>Agama</td>
                <td> :</td>
                <td>Islam</td>
            </tr>
            <tr>
                <td>7. </td>
                <td>Pekerjaan</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->pekerjaan_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>8. </td>
                <td>Alamat</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->alamat_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->alamat_calon }}</td>
                @endif
            </tr>
        </table>
        <p style="line-height: 1px;">B. Calon Istri</p>
        <table style="margin-left: 20px;">
            <tr>
                <td>1. </td>
                <td>Nama lengkap dan alias</td>
                <td> :</td>
                 @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_pemohon }}</td>
                 @else
                    <td>{{ $pengantarnikah->nama_calon }}</td>
                 @endif
            </tr>
            <tr>
                <td>2. </td>
                <td>Bin/Binti</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_ayah }}</td>
                @else
                    <td>{{ $pengantarnikah->bintun }}</td>
                @endif
            </tr>
            <tr>
                <td>3. </td>
                <td>Nomor Induk Kependudukan </td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nik_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->nik_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->tempatlahir_pemohon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_pemohon)->isoFormat('D MMMM Y') }}</td>
                @else
                    <td>{{ $pengantarnikah->tempatlahir_calon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_calon)->isoFormat('D MMMM Y') }}</td>
                @endif
            </tr>
            <tr>
                <td>5. </td>
                <td>Kewarganegaraan</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->kewarganegaraan_calon }}</td>
                @endif
                
            </tr>
            <tr>
                <td>6. </td>
                <td>Agama</td>
                <td> :</td>
                <td>Islam</td>
            </tr>
            <tr>
                <td>7. </td>
                <td>Pekerjaan</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->pekerjaan_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>8. </td>
                <td>Alamat</td>
                <td> :</td>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->alamat_pemohon }}</td>
                @else
                    <td>{{ $pengantarnikah->alamat_calon }}</td>
                @endif
            </tr>
        </table>
        <p>Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran
            sendiri, tanpa ada paksaan dari siapapun juga, setuju untuk melangsungkan
            pernikahan. <br>Demikian Surat persetujuan ini di buat untuk digunakan seperlunya.
        </p>
        <div class="tanda-tangan-calon">
            <div class="tanda-tangan-suami">
                <p>.</p>
                <p style="padding-bottom: 80px; text-align: center;">Calon Suami</p>
                
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <p style="font-weight: bold; text-transform: uppercase;"><u>{{ $pengantarnikah->nama_pemohon }}</u></p>
                @else
                    <p style="font-weight: bold; text-transform: uppercase;"><u>{{ $pengantarnikah->nama_calon }}</u></p>
                @endif
            </div>
            <div class="tanda-tangan">
                <p>Parage, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
                <p style="padding-bottom: 80px;">Calon Istri</p>
                @if ($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <p style="font-weight: bold; text-transform: uppercase;"><u>{{ $pengantarnikah->nama_pemohon }}</u></p>
                @else
                    <p style="font-weight: bold; text-transform: uppercase;"><u>{{ $pengantarnikah->nama_calon }}</u></p>
                @endif
            </div>
        </div>
    </div>
    <!-- akhir lampiran N4 -->

    <!-- lampiran lampiran N5 -->
    <div class="page">
        <p class="lampiran">LAMPIRAN IX <br> KEPUTUSAN DIREKTUR JENDERAL
            BIMBINGAN MASYARAKAT
            ISLAM <br> NOMOR 473 TAHUN 2020 <br> TENTANG
            <br> PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
        <div class="header"><span><u> FORMULIR SURAT IZIN ORANG TUA </u><span class="model">Model N5</span></span></div>
        <p>Yang bertanda tangan di bawah ini:</p>
        <table>
            <tr>
                <td>A</td>
                <td>1. </td>
                <td>Nama lengkap dan alias</td>
                <td> : </td>
                <td>{{ $pengantarnikah->nama_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>2. </td>
                <td>Bin /Binti</td>
                <td> : </td>
                <td>{{ $pengantarnikah->bin }}</td>
            </tr>
            <tr>
                <td></td>
                <td>3. </td>
                <td>Nomor Induk Kependudukan</td>
                <td> : </td>
                <td>{{ $pengantarnikah->nik_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> : </td>
                <td>{{ $pengantarnikah->tempatlahir_ayah }},
                    @if ($pengantarnikah->tempatlahir_ayah === "")
                        .
                    @else
                        {{ Carbon\Carbon::parse($pengantarnikah->tanggallahir_ayah)->isoFormat('D MMMM Y') }}</td>
                    @endif
                    
            </tr>
            <tr>
                <td></td>
                <td>5. </td>
                <td>Kewarganegaraan </td>
                <td> : </td>
                <td>{{ $pengantarnikah->kewarganegaraan_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>6. </td>
                <td>Agama </td>
                <td> : </td>
                <td>{{ $pengantarnikah->agama_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>7. </td>
                <td>Pekerjaan </td>
                <td> : </td>
                <td>{{ $pengantarnikah->pekerjaan_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>8. </td>
                <td>Alamat </td>
                <td> : </td>
                <td>{{ $pengantarnikah->alamat_ayah }}</td>
            </tr>
            <tr>
                <td>B</td>
                <td>1. </td>
                <td>Nama lengkap dan alias</td>
                <td> : </td>
                <td>{{ $pengantarnikah->nama_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>2. </td>
                <td>Bin /Binti</td>
                <td> : </td>
                <td>{{ $pengantarnikah->binti }}</td>
            </tr>
            <tr>
                <td></td>
                <td>3. </td>
                <td>Nomor Induk Kependudukan</td>
                <td> : </td>
                <td>{{ $pengantarnikah->nik_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> : </td>
                <td>{{ $pengantarnikah->tempatlahir_ibu }}, 
                    @if ($pengantarnikah->tempatlahir_ibu === "")
                        .
                    @else
                        {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_ibu)->isoFormat('D MMMM Y') }}</td>
                    @endif     
            </tr>
            <tr>
                <td></td>
                <td>5. </td>
                <td>Kewarganegaraan </td>
                <td> : </td>
                <td>{{ $pengantarnikah->kewarganegaraan_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>6. </td>
                <td>Agama </td>
                <td> : </td>
                <td>{{ $pengantarnikah->agama_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>7. </td>
                <td>Pekerjaan </td>
                <td> : </td>
                <td>{{ $pengantarnikah->pekerjaan_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>8. </td>
                <td>Alamat </td>
                <td> : </td>
                <td>{{ $pengantarnikah->alamat_ibu }}</td>
            </tr>
        </table>
        <p style="line-height: 1px;">adalah ayah dan ibu kandung/wali/pengampu dari :</p>
        <table style="margin-left: 15px;">
            <tr>
                <td>1. </td>
                <td>Nama lengkap dan alias</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_pemohon }}</td>
                @endif
            </tr>
            <tr>
                <td>2. </td>
                <td>Bin /Binti</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_ayah }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_ayah }}</td>
                @endif
            </tr>
            <tr>
                <td>3. </td>
                <td>Nomor Induk Kependudukan</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nik_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nik_pemohon }}</td>
                @endif
            </tr>
            <tr>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->tempatlahir_pemohon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_pemohon)->isoFormat('D MMMM Y') }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->tempatlahir_pemohon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_pemohon)->isoFormat('D MMMM Y') }}</td>
                @endif
            </tr>
            <tr>
                <td>5. </td>
                <td>Kewarganegaraan </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
                @endif
            </tr>
            <tr>
                <td>6. </td>
                <td>Agama </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->agama_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->agama_pemohon }}</td>
                @endif
            </tr>
            <tr>
                <td>7. </td>
                <td>Pekerjaan </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
                @endif
            </tr>
            <tr>
                <td>8. </td>
                <td>Alamat </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->alamat_pemohon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->alamat_pemohon }}</td>
                @endif
            </tr>
        </table>
        <p style="line-height: 1px; padding-top: 8px;">Memberikan izin kepada anak kami untuk melakukan pernikahan
            dengan:</p>
        <table style="margin-left: 15px;">
            <tr>
                <td>1. </td>
                <td>Nama lengkap dan alias</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nama_calon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nama_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>2. </td>
                <td>Bin /Binti</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->bintun }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->bintun }}</td>
                @endif
            </tr>
            <tr>
                <td>3. </td>
                <td>Nomor Induk Kependudukan</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->nik_calon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->nik_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>4. </td>
                <td>Tempat dan tanggal lahir</td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->tempatlahir_calon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_calon)->isoFormat('D MMMM Y') }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->tempatlahir_calon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_calon)->isoFormat('D MMMM Y') }}</td>
                @endif
            </tr>
            <tr>
                <td>5. </td>
                <td>Kewarganegaraan </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->kewarganegaraan_calon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->kewarganegaraan_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>6. </td>
                <td>Agama </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->agama_calon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->agama_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>7. </td>
                <td>Pekerjaan </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->pekerjaan_calon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->pekerjaan_calon }}</td>
                @endif
            </tr>
            <tr>
                <td>8. </td>
                <td>Alamat </td>
                <td> : </td>
                @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                    <td>{{ $pengantarnikah->alamat_calon }}</td>
                @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                    <td>{{ $pengantarnikah->alamat_calon }}</td>
                @endif
            </tr>
        </table>
        <p>Demikian Surat izin ini di buat dengan kesadaran tanpa ada paksaan dari siapapun
            dan untuk digunakan seperlunya.
        </p>
        <div>
            <div style="float: left; padding-left: 30px; text-align: center">
                <p>.</p>
                <p style="text-align: center; padding-bottom: 40px">Ayah/wali/pengampu</p>
                @if ($pengantarnikah->nik_ayah == "")
                    <p>--------------------------</p>
                @else
                    <p style="font-weight: bold; text-transform:uppercase;"><u>{{ $pengantarnikah->nama_ayah }}</u></p>
                @endif
            </div>
            <div class="tanda-tangan">
                <p style="padding-bottom: 40px">Parage, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }} <br>Ibu/wali/pengampu</p>
                @if ($pengantarnikah->nik_ibu == "")
                    <p>--------------------------</p>
                @else
                    <p style="font-weight: bold; text-transform:uppercase;"><u>{{ $pengantarnikah->nama_ibu }}</u></p>
                @endif
            </div>
        </div>
    </div>
    <!-- akhir lampiran lampiran N5 -->

    <!-- surat pernyataan -->
    {{-- @if ()
        
    @else
        
    @endif --}}
    <div class="page">
        <p class="lampiran">LAMPIRAN X <br> KEPUTUSAN DIREKTUR JENDERAL
            BIMBINGAN MASYARAKAT
            ISLAM <br> NOMOR 473 TAHUN 2020 <br> TENTANG
            <br> PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</p>
        <h3 class="header"><u>SURAT PERNYATAAN TIDAK PUNYA SUAMI / ISTRI</u></h3>
        <p>Yang bertanda tangan di bawah ini:</p>
        <table>
            <table style="margin-left: 20px;">
                <tr>
                    <td>1. </td>
                    <td>Nama lengkap dan alias</td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->nama_pemohon }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->nama_pemohon }}</td>
                    @endif
                </tr>
                <tr>
                    <td>2. </td>
                    <td>Bin/Binti</td>
                    <td> :</td>
                    {{ $pengantarnikah->nama_ayah }}
                </tr>
                <tr>
                    <td>3. </td>
                    <td>Nomor Induk Kependudukan </td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->nik_pemohon }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->nik_pemohon }}</td>
                    @endif
                </tr>
                <tr>
                    <td>4. </td>
                    <td>Tempat dan tanggal lahir</td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->tempatlahir_calon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_calon)->isoFormat('D MMMM Y') }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->tempatlahir_calon }}, {{Carbon\Carbon::parse($pengantarnikah->tanggallahir_calon)->isoFormat('D MMMM Y') }}</td>
                    @endif
                </tr>
                <tr>
                    <td>5. </td>
                    <td>Kewarganegaraan</td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->kewarganegaraan_pemohon }}</td>
                    @endif
                </tr>
                <tr>
                    <td>6. </td>
                    <td>Agama</td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->agama_pemohon }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->agama_pemohon }}</td>
                    @endif
                </tr>
                <tr>
                    <td>7. </td>
                    <td>Pekerjaan</td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->pekerjaan_pemohon }}</td>
                    @endif
                </tr>
                <tr>
                    <td>8. </td>
                    <td>Alamat</td>
                    <td> :</td>
                    @if ($pengantarnikah->kelamin_pemohon === 'laki-laki')
                        <td>{{ $pengantarnikah->alamat_pemohon }}</td>
                    @elseif($pengantarnikah->kelamin_pemohon === 'perempuan')
                        <td>{{ $pengantarnikah->alamat_pemohon }}</td>
                    @endif
                </tr>
            </table>
            <p class="paragraf">Menyatakan dengan sebenarnya bahwa saya sampai saat ini tidak punya suami /
                istri baik resmi maupun / dibawah tangan.</p>
            <p class="paragraf">Demikian peryatan ini saya buat dengan sebenarnya atas kehendak sendiri tanpa paksaan dari orang lain dan
                jika kemudian hari pernyataan ini tidak benar, saya siap mempertanggungjawabkan sendiri tanpa melibatkan
                orang lain maupun instansi terkait ( KUA ) Dan Saya Siap Dituntut / diproses sesuai hukum yang berlaku.
            </p>
            <p class="paragraf">Surat pernyataan ini dibuat untuk persyaratan nikah saya, dengan seorang calon
                suami / istri bernama
                <span style="font-weight: bold;"> @if ($pengantarnikah->kelamin_pemohon === 'laki-laki') {{ $pengantarnikah->nama_calon }} @elseif($pengantarnikah->kelamin_pemohon === 'perempuan') {{ $pengantarnikah->nama_calon }} @endif</span>
            </p>
            <p class="paragraf">Demikian surat pernyataan sudah pernah menikah ini saya buat dengan sebenarnya
                dan dalam keadaan sehat
                jasmani maupun rohani dan tanpa paksaan dari pihak manapun, apabila dikemudian hari surat pernyataan ini
                tidak benar maka saya bersedia dituntut di muka pengadilan yang berwenang dengan tidak melibatkan Kantor
                Urusan Agama manapun dan saksi-saksi yang turut menandatangani surat pernyataan ini.</p>
            <div style="margin-top: 100px;">
                <div style="float: left; padding-left: 30px">

                    <p style="padding-bottom: 80px; text-align: center;">Mengetahui,<br>a.n.Kepala Desa Parage
                        <br>Sekertaris Desa </p>
                        <div><u style="font-weight: bold; ">MUHAMAD JUHANDI,S.IKom</u> <br> <span></span> NRPDes.19940527201708.2054</div>
                </div>
                <div style="float: right; padding-right: 30px">
                    <p>Parage, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
                    <p style="padding-bottom: 80px; text-align: center">Yang Menyatakan</p>
                    <p style="font-weight: bold; text-align: center; text-transform:uppercase;"><u>@if ($pengantarnikah->kelamin_pemohon === 'laki-laki') {{ $pengantarnikah->nama_pemohon }} @elseif($pengantarnikah->kelamin_pemohon === 'perempuan') {{ $pengantarnikah->nama_pemohon }} @endif</u></p>
                </div>
            </div>
    </div>
    <!-- akhir surat pernyataan -->

   
</body>
</html>