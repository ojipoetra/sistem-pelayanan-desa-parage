{{-- @extends('menu.navbar')
@section('components') --}}
{{-- <div class="container d-flex justify-content-center align-items-center pendaftaran">
    <form action="" method="post" class="row form-daftar mt-5">
        <h3 class="text-center bg-info p-2 text-light rounded ">Form Pengajuan SKTM Sekolah</h3>
        <div class="col-md-6 pt-2">
            <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukan nama sesuai ktp"
                name="nama_user">
        </div>
        <div class="col-md-6 pt-2">
            <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" placeholder="Lebak, dd-mm-yyyy"
                name="ttl">
        </div>
        <div class="col-md-6 pt-2">
            <label for="jns_kelamin" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
            <select name="jns_kelamin" id="jns_kelamin" class="form-select" aria-label="Default select example">
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="col-md-6 pt-2">
            <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
            <input type="text" class="form-control" id="agama" placeholder=""
                name="agama">
        </div>
        <div class="col-md-6 pt-2">
            <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" placeholder=""
                name="kewarganegaraan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" placeholder=""
                name="pekerjaan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"></textarea>
        </div>
        <p>Data Orang Tua : <br>Ayah</p>
        <div class="col-md-6 pt-2">
            <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukan nama sesuai ktp"
                name="nama_user">
        </div>
        <div class="col-md-6 pt-2">
            <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" placeholder="Lebak, dd-mm-yyyy"
                name="ttl">
        </div>
        <div class="col-md-6 pt-2">
            <label for="jns_kelamin" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
            <select name="jns_kelamin" id="jns_kelamin" class="form-select" aria-label="Default select example">
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="col-md-6 pt-2">
            <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
            <input type="text" class="form-control" id="agama" placeholder=""
                name="agama">
        </div>
        <div class="col-md-6 pt-2">
            <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" placeholder=""
                name="kewarganegaraan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" placeholder=""
                name="pekerjaan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"></textarea>
        </div>
        <p>Data Orang Tua : <br>Ibu</p>
        <div class="col-md-6 pt-2">
            <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukan nama sesuai ktp"
                name="nama_user">
        </div>
        <div class="col-md-6 pt-2">
            <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" placeholder="Lebak, dd-mm-yyyy"
                name="ttl">
        </div>
        <div class="col-md-6 pt-2">
            <label for="jns_kelamin" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
            <select name="jns_kelamin" id="jns_kelamin" class="form-select" aria-label="Default select example">
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="col-md-6 pt-2">
            <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
            <input type="text" class="form-control" id="agama" placeholder=""
                name="agama">
        </div>
        <div class="col-md-6 pt-2">
            <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" placeholder=""
                name="kewarganegaraan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" placeholder=""
                name="pekerjaan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"></textarea>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary" name="daftar">AJUKAN!</button>
        </div>
    </form>
</div> --}}



 <!-- Modal -->
 <div class="modal fade" id="sktmsekolah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sktmsekolah" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-3 text-light" id="exampleModalLabel">Form SKTM Sekolah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/list-pengajuan-sktmsekolah" method="post" class="row">
                @csrf
                <div class="col-md-6 pt-2">
                    <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                    <input type="text" name="nama_siswa" class="form-control" id="nama" placeholder="masukan nama sesuai ktp">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                    <input type="text" name="tempatlahir_siswa" class="form-control" id="ttl" placeholder="Lebak">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                    <input type="date" name="tanggallahir_siswa" class="form-control" id="ttl" placeholder="Lebak, dd-mm-yyyy">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="jns_kelamin" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
                    <select id="jns_kelamin" name="jenis_kelamin_siswa" class="form-select" aria-label="Default select example">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 pt-2">
                    <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                    <input type="text" name="agama" class="form-control" id="agama" placeholder="">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan_siswa" class="form-control" id="kewarganegaraan" placeholder="">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                    <input type="text" name="pekerjaan_siswa" class="form-control" id="pekerjaan" placeholder="">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                    <textarea class="form-control" name="alamat_siswa" id="alamat" rows="3"></textarea>
                </div>
                <p class="hr">Data Orang Tua : Ayah</p>
                <div class="col-md-6 pt-2">
                    <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                    <input type="text" name="nama_ayah" class="form-control" id="nama" placeholder="masukan nama sesuai ktp">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                    <input type="text" name="tempatlahir_ayah" class="form-control" id="ttl" placeholder="Lebak">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                    <input type="date" name="tanggallahir_ayah" class="form-control" id="ttl" placeholder="dd-mm-yyyy">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                    <input type="text" name="agama_ayah" class="form-control" id="agama" placeholder="">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaan" placeholder="">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                    <textarea class="form-control" name="alamat_ayah" id="alamat" rows="3"></textarea>
                </div>
                <p>Data Orang Tua : Ibu</p>
                <div class="col-md-6 pt-2">
                    <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                    <input type="text" name="nama_ibu" class="form-control" id="nama" placeholder="masukan nama sesuai ktp">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                    <input type="text" name="tempatlahir_ibu" class="form-control" id="ttl" placeholder="Lebak">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                    <input type="date" name="tanggallahir_ibu" class="form-control" id="ttl" placeholder="dd-mm-yyyy">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                    <input type="text" name="agama_ibu" class="form-control" id="agama" placeholder="">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaan" placeholder="pekerjaan ibu">
                </div>
                <div class="col-md-6 pt-2">
                    <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                    <textarea name="alamat_ibu" class="form-control" id="alamat" rows="3"></textarea>
                </div>
                <div class="mt-2">
                    <div class="modal-footer">
                        <form action="" method="post">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" id="submitData" name="daftar">Simpan</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>




{{-- @endsection --}}