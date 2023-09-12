 
 @foreach ($pengantarnikah as $data)
   
 <!-- Modal -->
    <div class="modal fade" id="updatepengantarnikah{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatepengantarnikah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-3 text-light" id="updatepengantarnikah">Form Edit Pengantar Nikah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                    {{-- body --}}
                    <div class="container d-flex justify-content-center align-items-center pendaftaran">
                        <form action="/pengantarnikah/{{ $data->id }}" method="post" class="row" id="form-validate">
                            @method('patch')
                            @csrf
                            <div class="col-md-6 pt-2">
                                <label for="nama_pemohon" class="form-label"><i class="bi bi-person"></i> Nama Pemohon</label>
                                <input type="text" name="nama_pemohon" class="form-control input-text" id="nama_pemohon" value="{{ $data->nama_pemohon }}" placeholder="masukan nama sesuai ktp" autocomplete="off">
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>
                            <div class="col-md-6 pt-2">
                                <label for="nik_pemohon" class="form-label"><i class="bi bi-person"></i> NIK</label>
                                <input type="number" name="nik_pemohon" class="form-control nik-validation" id="nik_pemohon" value="{{ $data->nik_pemohon }}" placeholder="masukan nik sesuai ktp" autocomplete="off">
                                <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                            </div>
                            <div class="col-md-6 pt-2">
                                <label for="kelamin_pemohon" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
                                <select name="kelamin_pemohon" id="kelamin_pemohon" onchange="selectOption()" class="form-select input-text" aria-label="Default select example">
                                    <option value="{{ $data->kelamin_pemohon }}">{{ $data->kelamin_pemohon }}</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 pt-2">
                                <label for="tempatlahir_pemohon" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                                <input type="text" name="tempatlahir_pemohon" class="form-control input-text" id="tempatlahir_pemohon" value="{{ $data->tempatlahir_pemohon }}" placeholder="Tempat Lahir" autocomplete="off">
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>
                            <div class="col-md-6 pt-2">
                                <label for="tanggallahir_pemohon" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                                <input type="date" name="tanggallahir_pemohon" class="form-control" id="tanggallahir_pemohon" value="{{ $data->tanggallahir_pemohon }}" placeholder="dd/mm/yyyy" autocomplete="off">
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>
                            
                            <div class="col-md-6 pt-2">
                                <label for="kewarganegaraan_pemohon" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan_pemohon" class="form-control input-text" id="kewarganegaraan_pemohon" value="{{ $data->kewarganegaraan_pemohon }}" placeholder="" autocomplete="off">
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>
                            <div class="col-md-6 pt-2">
                                <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                                <input type="text" name="agama_pemohon" class="form-control input-text" id="agama" value="{{ $data->agama_pemohon }}" autocomplete="off">
                            </div>
                            <div class="col-md-6 pt-2">
                                <label for="pekerjaan_pemohon" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                                <input type="text" name="pekerjaan_pemohon" class="form-control input-text" id="pekerjaan_pemohon" value="{{ $data->pekerjaan_pemohon }}" placeholder="pekerjaan anda" autocomplete="off">
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>
                        <div class="col-md-6 pt-2">
                            <label for="statuspernikahan_pemohon" class="form-label"><i class="bi bi-person"></i> Status Pernikahan</label>
                                <select name="statuspernikahan_pemohon" id="statuspernikahan_pemohon" onchange="selectOption()" class="form-select" aria-label="Default select example">
                                    <option value="{{ $data->statuspernikahan_pemohon }}">{{ $data->statuspernikahan_pemohon }}</option>
                                    <option value="belum kawin">Belum Kawin</option>
                                    <option value="kawin">Kawin</option>
                                </select>
                            </div>

                            <div class="col-md-6 pt-2">
                                <label for="hasil_status" class="form-label"><i class="bi bi-person"></i> Status</label>
                                <input type="text" name="hasil_status" class="form-control input-text" id="hasil_status" value="{{ $data->hasil_status }}" autocomplete="off">
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>

                            <div class="col-md-6 pt-2">
                                <label for="alamat_pemohon" class="form-label"><i class="bi bi-person"></i> Alamat Lengkap</label>
                                <textarea name="alamat_pemohon" class="form-control input-text" id="alamat_pemohon" rows="3" autocomplete="off">{{ $data->alamat_pemohon }}</textarea>
                                <p class="invalid-feedback">Pastikan data yang di input benar</p>
                            </div>
                            



                            <p class="mt-4 bg-info rounded col-md-8 text-light fw-bold">Akan menikah dengan seorang pria/wanita :</p>
                            
                        <div class="col-md-6 pt-2">
                            <label for="nama_mempelay_laki" class="form-label"><i class="bi bi-person"></i> Nama</label>
                            <input type="text" name="nama_calon" class="form-control input-text" id="nama_mempelay_laki" value="{{ $data->nama_calon }}" placeholder="masukan nama sesuai ktp" autocomplete="off" >
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="bintun" class="form-label"><i class="bi bi-person"></i> Nasab</label>
                            <input type="text" name="bintun" class="form-control input-text" id="bintun" value="{{ $data->bintun }}" placeholder="nama ayah" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="nik_calon" class="form-label"><i class="bi bi-person"></i> NIK</label>
                            <input type="number" name="nik_calon" class="form-control nik-validation" id="nik_calon" value="{{ $data->nik_calon }}" placeholder="masukan nik sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="kelamin_calon" class="form-label"><i class="bi bi-person"></i> Jenis Kelamin</label>
                            <select name="kelamin_calon" id="kelamin_calon" class="form-select input-text" aria-label="Default select example">
                                <option value="{{ $data->kelamin_calon }}">{{ $data->kelamin_calon }}</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="tempatlahir_calon" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                            <input type="text" name="tempatlahir_calon" class="form-control input-text" id="tempatlahir_calon" value="{{ $data->tempatlahir_calon }}" placeholder="Tempat Lahir" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="tanggallahir_calon" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                            <input type="date" name="tanggallahir_calon" class="form-control" id="tanggallahir_calon" value="{{ $data->tanggallahir_calon }}" placeholder="dd/mm/yyyy">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        
                        <div class="col-md-6 pt-2">
                            <label for="kewarganegaraan_calon" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_calon" class="form-control input-text" id="kewarganegaraan_calon" value="{{ $data->kewarganegaraan_calon }}" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="agama_calon" class="form-label"><i class="bi bi-person"></i> Agama</label>
                            <input type="text" name="agama_calon" class="form-control input-text" id="agama_calon" value="{{ $data->agama_calon }}" autocomplete="off">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="pekerjaan_calon" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                            <input type="text" name="pekerjaan_calon" class="form-control input-text" id="pekerjaan_calon" value="{{ $data->pekerjaan_calon }}" placeholder="isi pekerjaan sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="alamat_calon" class="form-label"><i class="bi bi-person"></i> Alamat Lengkap</label>
                            <textarea name="alamat_calon" class="form-control input-text" id="alamat_calon" rows="3" autocomplete="off">{{ $data->alamat_calon }}</textarea>
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="tempat_akad" class="form-label"><i class="bi bi-person"></i> Alamat Akad Nikah</label>
                            <textarea name="tempat_akad" class="form-control dataInput" id="tempat_akad" rows="3" autocomplete="off">{{ $data->tempat_akad }}</textarea>
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>

                        <p class="mt-4 bg-info rounded col-md-8 text-light fw-bold">Data orang tua pemohon Ayah :</p>

                        <div class="col-md-6 pt-2">
                            <label for="nama_ayah" class="form-label"><i class="bi bi-person"></i> Nama Ayah Pemohon</label>
                            <input type="text" name="nama_ayah" class="form-control input-text" id="nama_ayah" value="{{ $data->nama_ayah }}" placeholder="nama ayah sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="bin" class="form-label"><i class="bi bi-person"></i> Nasab</label>
                            <input type="text" name="bin" class="form-control input-text" id="bin" value="{{ $data->bin }}" placeholder="nama ayah" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="nik_ayah" class="form-label"><i class="bi bi-person"></i> NIK</label>
                            <input type="number" name="nik_ayah" class="form-control nik-validation" id="nik_ayah" value="{{ $data->nik_ayah }}" placeholder="masukan nik sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="tempatlahir_ayah" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                            <input type="text" name="tempatlahir_ayah" class="form-control input-text" id="tempatlahir_ayah" value="{{ $data->tempatlahir_ayah }}" placeholder="tempat lahir ayah">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        
                        <div class="col-md-6 pt-2">
                            <label for="tanggallahir_ayah" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                            <input type="date" name="tanggallahir_ayah" class="form-control" id="tanggallahir_ayah" value="{{ $data->tanggallahir_ayah }}" placeholder="dd/mm/yyyy" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="kewarganegaraan_ayah" class="form-label"><i class="bi bi-person"></i> kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_ayah" class="form-control input-text" id="kewarganegaraan_ayah" value="{{ $data->kewarganegaraan_ayah }}" autocomplete="off">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="agama_ayah" class="form-label"><i class="bi bi-person"></i> Agama</label>
                            <input type="text" name="agama_ayah" class="form-control input-text" id="agama_ayah" value="{{ $data->agama_ayah }}" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        
                        <div class="col-md-6 pt-2">
                            <label for="pekerjaan_ayah" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                            <input type="text" name="pekerjaan_ayah" class="form-control input-text" id="pekerjaan_ayah" value="{{ $data->pekerjaan_ayah }}" placeholder="isi pekerjaan sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>

                        <div class="col-md-6 pt-2">
                            <label for="alamat_ayah" class="form-label"><i class="bi bi-person"></i> Alamat Lengkap</label>
                            <textarea name="alamat_ayah" class="form-control input-text" id="alamat_ayah" rows="3" autocomplete="off">{{ $data->alamat_ayah }}</textarea>
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>

                        
                        <p class="mt-4 bg-info rounded col-md-8 text-light fw-bold">Data orang tua pemohon Ibu :</p>

                        <div class="col-md-6 pt-2">
                            <label for="nama_ibu" class="form-label"><i class="bi bi-person"></i> Nama Ibu Pemohon </label>
                            <input type="text" name="nama_ibu" class="form-control input-text" id="nama_ibu" value="{{ $data->nama_ibu }}" placeholder="masukan nama sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="binti" class="form-label"><i class="bi bi-person"></i> Nasab</label>
                            <input type="text" name="binti" class="form-control input-text" id="binti" value="{{ $data->binti }}" placeholder="nama ayah " autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="nik_ibu" class="form-label"><i class="bi bi-person"></i> NIK</label>
                            <input type="number" name="nik_ibu" class="form-control nik-validation" id="nik_ibu" value="{{ $data->nik_ibu }}" placeholder="masukan nik sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="tempatlahir_ibu" class="form-label"><i class="bi bi-person"></i> Tempat Lahir</label>
                            <input type="text" name="tempatlahir_ibu" class="form-control input-text" id="tempatlahir_ibu" value="{{ $data->tempatlahir_ibu }}" placeholder="tempat lahir ibu" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="tanggallahir_ibu" class="form-label"><i class="bi bi-person"></i> Tanggal Lahir</label>
                            <input type="date" name="tanggallahir_ibu" class="form-control" id="tanggallahir_ibu" value="{{ $data->tanggallahir_ibu }}" placeholder="dd/mm/yyyy">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        
                        <div class="col-md-6 pt-2">
                            <label for="kewarganegaraan_ibu" class="form-label"><i class="bi bi-person"></i> Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan_ibu" class="form-control input-text" id="kewarganegaraan_ibu" value="{{ $data->kewarganegaraan_ibu }}" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="agama_ibu" class="form-label"><i class="bi bi-person"></i> Agama</label>
                            <input type="text" name="agama_ibu" class="form-control input-text" id="agama_ibu" value="{{ $data->agama_ibu }}" autocomplete="off">
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="pekerjaan_ibu" class="form-label"><i class="bi bi-person"></i> Pekerjaan</label>
                            <input type="text" name="pekerjaan_ibu" class="form-control input-text" id="pekerjaan_ibu" value="{{ $data->pekerjaan_ibu }}" placeholder="isi pekerjaan sesuai ktp" autocomplete="off">
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                        <div class="col-md-6 pt-2">
                            <label for="alamat_ibu" class="form-label"><i class="bi bi-person"></i> Alamat Lengkap</label>
                            <textarea name="alamat_ibu" class="form-control input-text" id="alamat_ibu" rows="3" autocomplete="off">{{ $data->alamat_ibu }}</textarea>
                            <p class="invalid-feedback">Pastikan data yang di input benar</p>
                        </div>
                            <div class="mt-2">
                                <div class="modal-footer">
                                    <form action="" method="post">
                                        @csrf
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" id="submitData" name="daftar">Update</button>
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


<script>
  const statusGender = document.getElementById('kelamin_pemohon');
  const selectStatus = document.getElementById('statuspernikahan_pemohon');
  const hasil = document.getElementById('hasil_status');

        // Tambahkan event listener ke elemen select dan input
        function selectOption() {
            if (statusGender.value === "laki-laki" && selectStatus.value === "kawin") {
                hasil.value = "Duda"
            } else if (statusGender.value === "perempuan" && selectStatus.value === "kawin") {
                hasil.value = "Janda"
            } else if (statusGender.value === "laki-laki" && selectStatus.value === "belum kawin") {
                hasil.value = "Jejaka"
            } else if (statusGender.value === "perempuan" && selectStatus.value === "belum kawin") {
                hasil.value = "Perawan"
            } else {
                hasil.value = ""
            }
            return hasil
        }

    const formValidate = document.getElementById('form-validate')
    const inputText = document.querySelectorAll('.input-text')
    const nikValidate = document.querySelectorAll('.nik-validation')
    const message = document.querySelectorAll('.pesan')

    formValidate.addEventListener('submit', e => {
        const inputValid = /^[a-zA-Z0-9\s.\-\/]+$/
        const inputvalid = /^[1-9][0-9]*$/
        inputText.forEach(el => {
            if (!el.value.match(inputValid) || el.value == "") {
                el.classList.add('is-invalid')
                e.preventDefault();
            } else
                el.classList.remove('is-invalid')
                el.classList.add('is-valid')
        })

        nikValidate.forEach(elm => {
            if(!elm.value.match(inputvalid) || elm.value == ""){
                e.preventDefault();
                elm.classList.add('is-invalid')
            } else if(elm.value.length < 16 || elm.value.length > 17){
                e.preventDefault()
                elm.classList.add('is-invalid')
                message.forEach(psn => {
                    psn.innerHTML = "Data setidaknya 16 digit"
                })
            } else {
                elm.classList.remove('is-invalid')
                elm.classList.add('is-valid')
            }
        })
    })
</script>