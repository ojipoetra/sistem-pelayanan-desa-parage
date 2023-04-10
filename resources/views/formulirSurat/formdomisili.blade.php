 <!-- Modal -->
 <div class="modal fade" id="suratdomisili" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="suratdomisili" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-3 text-light" id="suratdomisili">Form Surat Domisili</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- body --}}
          <div class="container d-flex justify-content-center align-items-center pendaftaran">
            <form action="/list-pengajuan-domisili" method="post" class="row" id="form">
                @csrf
                <div class="col-md-6 pt-2">
                    <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control dataInput" id="nama" placeholder="masukan nama sesuai ktp" autocomplete="off" autofocus>
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
                </div>
                <div class="col-md-6 pt-2">
                    <label for="nik" class="form-label"><i class="bi bi-person"></i> NIK</label>
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="masukan nik sesuai ktp" autocomplete="off">
                    <p class="invalid-feedback" id="pesan">Pastikan data yang di input benar</p>
                  </div>
                <div class="col-md-6 pt-2">
                    <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="form-control dataInput" id="ttl" placeholder="Alamat Lahir" autocomplete="off">
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
                  </div>
                <div class="col-md-6 pt-2">
                    <label for="tmplahir" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" class="form-control" id="tmplahir" placeholder="dd/mm/yyyy">
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
                  </div>
                <div class="col-md-6 pt-2">
                    <label for="jnskelamin" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
                    <select name="jnskelamin" id="jnskelamin" class="form-select" aria-label="Default select example">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 pt-2">
                    <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" class="form-control dataInput" id="kewarganegaraan" placeholder="" autocomplete="off">
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
                  </div>
                <div class="col-md-6 pt-2">
                    <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                    <input type="text" name="agama" class="form-control dataInput" id="agama" placeholder="" autocomplete="off">
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
                    <input type="text" name="pekerjaan" class="form-control dataInput" id="pekerjaan" placeholder="pekerjaan anda" autocomplete="off">
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
                </div>
                <div class="col-md-6 pt-2">
                    <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                    <textarea name="alamat" class="form-control dataInput" id="alamat" rows="3" autocomplete="off"></textarea>
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
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
          {{-- akhir body --}}
        </div>
      </div>
    </div>
  </div>

  {{-- coba --}}

  {{-- coba --}}
  <script src="js/validation.js"></script>