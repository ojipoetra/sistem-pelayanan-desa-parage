 <!-- Modal -->
 @foreach ($sku as $data)  
    <div class="modal fade" id="updatesku{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatesku" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
            <h1 class="modal-title fs-3 text-light" id="updatesku">Form Edit Surat SKU</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            {{-- body --}}
            <div class="container d-flex justify-content-center align-items-center pendaftaran">
                <form action="/suratsku/{{ $data->id }}" method="post" class="row" id="form">
                    @method('patch')
                    @csrf
                    <div class="col-md-6 pt-2">
                        <label for="nama_pemohon" class="form-label"><i class="bi bi-person"></i> Nama Lengkap</label>
                        <input type="text" name="nama_pemohon" value="{{ $data->nama_pemohon }}" class="form-control dataInput" id="nama"  placeholder="masukan nama sesuai ktp" autocomplete="off" autofocus>
                        <p class="invalid-feedback">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="nik_pemohon" class="form-label"><i class="bi bi-person"></i> NIK</label>
                    
                        <input type="text" name="nik_pemohon" value="{{ $data->nik_pemohon }}" class="form-control" id="nik_pemohon" placeholder="masukan nik sesuai ktp" autocomplete="off">
                        <p class="invalid-feedback" id="pesan">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="tempatlahir_pemohon" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                        <input type="text" name="tempatlahir_pemohon" value="{{ $data->tempatlahir_pemohon }}" class="form-control dataInput" id="tempatlahir_pemohon" placeholder="Alamat Lahir" autocomplete="off">
                        <p class="invalid-feedback">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="tanggallahir_pemohon" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_pemohon" value="{{ $data->tanggallahir_pemohon }}" class="form-control" id="tanggallahir_pemohon" placeholder="dd/mm/yyyy">
                        <p class="invalid-feedback">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="kelamin_pemohon" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
                        <select name="kelamin_pemohon" id="kelamin_pemohon" class="form-select" aria-label="Default select example">
                            <option value="{{ $data->kelamin_pemohon }}">{{ $data->kelamin_pemohon }}</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="agama_pemohon" class="form-label"><i class="bi bi-person"></i> Agama</label>
                        <input type="text" name="agama_pemohon" value="{{ $data->agama_pemohon }}" class="form-control dataInput" id="agama_pemohon" placeholder="" autocomplete="off">
                        <p class="invalid-feedback">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="pekerjaan_pemohon" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                        <input type="text" name="pekerjaan_pemohon" value="{{ $data->pekerjaan_pemohon }}" class="form-control dataInput" id="pekerjaan_pemohon" placeholder="" autocomplete="off">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="kewarganegaraan_pemohon" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan_pemohon" value="{{ $data->kewarganegaraan_pemohon }}" class="form-control dataInput" id="kewarganegaraan_pemohon" placeholder="pekerjaan anda" autocomplete="off">
                        <p class="invalid-feedback">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                    <label for="alamat_pemohon" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                    <textarea name="alamat_pemohon" class="form-control dataInput" id="alamat_pemohon" rows="3" autocomplete="off">{{ $data->alamat_pemohon }}</textarea>
                    <p class="invalid-feedback">Pastikan data yang di input benar</p>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="jenis_usaha" class="form-label"><i class="bi bi-person"></i> Jenis Usaha</label>
                        <input type="text" name="jenis_usaha" value="{{ $data->jenis_usaha }}" class="form-control dataInput" id="jenis_usaha" placeholder="pekerjaan anda" autocomplete="off">
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
@endforeach
  {{-- coba --}}

  {{-- coba --}}
  <script src="js/validation.js"></script>