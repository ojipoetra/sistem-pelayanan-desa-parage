@extends('menu.navbar')
@section('components')
<div class="container d-flex justify-content-center align-items-center pendaftaran">
    <form action="" method="post" class="row form-daftar mt-5">
        <h3 class="text-center bg-warning p-2 text-light rounded ">Form Pengajuan SKTM Rumah Sakit</h3>
        <div class="col-md-6 pt-2">
            <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukan nama sesuai ktp"
                name="nama_user">
        </div>
        <div class="col-md-6 pt-2">
            <label for="nik" class="form-label"><i class="bi bi-person"></i> NIK</label>
            <input type="number" class="form-control" id="nik" placeholder="masukan nik sesuai ktp"
                name="nik">
        </div>
        <div class="col-md-6 pt-2">
            <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" placeholder="Lebak, dd-mm-yyyy"
                name="ttl">
        </div>
        <div class="col-md-6 pt-2">
            <label for="status" class="form-label"><i class="bi bi-person"></i> Status</label>
            <select name="status" id="status" class="form-select" aria-label="Default select example">
                <option value="kawin">Kawin</option>
                <option value="belum kawin">Belum Kawin</option>
            </select>
        </div>
        <div class="col-md-6 pt-2">
            <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" placeholder="pekerjaan anda"
                name="pekerjaan">
        </div>
        <div class="col-md-6 pt-2">
            <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" placeholder=""
                name="kewarganegaraan">
        </div>
        <div class="col-md-3 pt-2">
            <label for="rt" class="form-label"><i class="bi bi-person"></i> RT</label>
            <input type="number" class="form-control" id="rt" placeholder=""
                name="rt">
        </div>
        <div class="col-md-3 pt-2">
            <label for="rw" class="form-label"><i class="bi bi-person"></i> RW</label>
            <input type="number" class="form-control" id="rw" placeholder=""
                name="rw">
        </div>
        <div class="col-md-6 pt-2">
            <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder=""
                name="alamat">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary" name="daftar">AJUKAN!</button>
        </div>
    </form>
</div>
@endsection