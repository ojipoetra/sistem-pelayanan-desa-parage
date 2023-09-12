
 <!-- Modal -->
 @foreach ($sktmsekolah as $data)
     

    <div class="modal fade" id="updatesktmsekolah{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatesktmsekolah" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
            <h1 class="modal-title fs-3 text-light" id="exampleModalLabel">Form Edit SKTM Sekolah</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/sktmsekolah/{{ $data->id }}" method="post" class="row">
                    @method('patch')
                    @csrf
                    <div class="col-md-6 pt-2">
                        <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                        <input type="text" name="nama_siswa" class="form-control" id="nama" value="{{ $data->nama_siswa }}" placeholder="masukan nama sesuai ktp">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                        <input type="text" name="tempatlahir_siswa" class="form-control" id="ttl" value="{{ $data->tempatlahir_siswa }}" placeholder="Lebak">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_siswa" class="form-control" id="ttl" value="{{ $data->tanggallahir_siswa }}" placeholder="Lebak, dd-mm-yyyy">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="jns_kelamin" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
                        <select id="jns_kelamin" name="jenis_kelamin_siswa" class="form-select" aria-label="Default select example">
                            <option value="{{ $data->jenis_kelamin_siswa }}">{{ $data->jenis_kelamin_siswa }}</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                        <input type="text" name="agama" class="form-control" id="agama" value="{{ $data->agama }}" placeholder="">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="kewarganegaraan" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan_siswa" class="form-control" id="kewarganegaraan" value="{{ $data->kewarganegaraan_siswa }}" placeholder="">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                        <input type="text" name="pekerjaan_siswa" class="form-control" id="pekerjaan" value="{{ $data->pekerjaan_siswa }}" placeholder="">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                        <textarea class="form-control" name="alamat_siswa" id="alamat" rows="3">{{ $data->alamat_siswa }}</textarea>
                    </div>
                    <p class="hr">Data Orang Tua : Ayah</p>
                    <div class="col-md-6 pt-2">
                        <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                        <input type="text" name="nama_ayah" class="form-control" id="nama" value="{{ $data->nama_ayah }}" placeholder="masukan nama sesuai ktp">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                        <input type="text" name="tempatlahir_ayah" class="form-control" id="ttl" value="{{ $data->tempatlahir_ayah }}" placeholder="Lebak">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_ayah" class="form-control" id="ttl" value="{{ $data->tanggallahir_ayah }}" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                        <input type="text" name="agama_ayah" class="form-control" id="agama" value="{{ $data->agama_ayah }}" placeholder="">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaan" value="{{ $data->pekerjaan_ayah }}" placeholder="">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                        <textarea class="form-control" name="alamat_ayah" id="alamat" rows="3">{{ $data->alamat_ayah }}</textarea>
                    </div>
                    <p>Data Orang Tua : Ibu</p>
                    <div class="col-md-6 pt-2">
                        <label for="nama" class="form-label"><i class="bi bi-person"></i> Nama</label>
                        <input type="text" name="nama_ibu" class="form-control" id="nama" value="{{ $data->nama_ibu }}" placeholder="masukan nama sesuai ktp">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                        <input type="text" name="tempatlahir_ibu" class="form-control" id="ttl" value="{{ $data->tempatlahir_ibu }}" placeholder="Lebak">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="ttl" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_ibu" class="form-control" id="ttl" value="{{ $data->tanggallahir_ibu }}" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                        <input type="text" name="agama_ibu" class="form-control" id="agama" value="{{ $data->agama_ibu }}" placeholder="">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="pekerjaan" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaan" value="{{ $data->pekerjaan_ibu }}" placeholder="pekerjaan ibu">
                    </div>
                    <div class="col-md-6 pt-2">
                        <label for="alamat" class="form-label"><i class="bi bi-person"></i> Alamat</label>
                        <textarea name="alamat_ibu" class="form-control" id="alamat" rows="3">{{ $data->alamat_ibu }}</textarea>
                    </div>
                    <div class="mt-2">
                        <div class="modal-footer">
                            <form action="" method="post">
                                @csrf
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" id="submitData" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endforeach



{{-- @endsection --}}