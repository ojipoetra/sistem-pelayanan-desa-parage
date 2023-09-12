 <!-- Modal -->
 <div class="modal fade" id="suratpengantarnikah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="suratpengantarnikah" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header bg-primary">
                 <h1 class="modal-title fs-3 text-light" id="suratdomisili">Form Surat Pengantar Nikah</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 {{-- body --}}
                 <div class="container d-flex justify-content-center align-items-center pendaftaran">
                     <form action="/list-pengantar-nikah" method="post" class="row" id="form-validate">
                         @csrf
                         <div class="col-md-6 pt-2">
                             <label for="nama_pemohon" class="form-label"><i class="bi bi-person"></i> Nama
                                 Pemohon</label>
                             <input type="text" name="nama_pemohon" class="form-control input-text" id="nama_pemohon"
                                 placeholder="masukan nama sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="nik_pemohon" class="form-label"><i class="bi bi-person"></i> NIK</label>
                             <input type="number" name="nik_pemohon" class="form-control nik-validation"
                                 id="nik_pemohon" placeholder="masukan nik sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="kelamin_pemohon" class="form-label"><i class="bi bi-person"></i> Jenis
                                 Kelamin</label>
                             <select name="kelamin_pemohon" id="kelamin_pemohon" onchange="selectOption()"
                                 class="form-select input-text" aria-label="Default select example">
                                 <option value="">= Pilih =</option>
                                 <option value="laki-laki">Laki-Laki</option>
                                 <option value="perempuan">Perempuan</option>
                             </select>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tempatlahir_pemohon" class="form-label"><i class="bi bi-person"></i> Tempat
                                 Lahir</label>
                             <input type="text" name="tempatlahir_pemohon" class="form-control input-text"
                                 id="tempatlahir_pemohon" placeholder="Tempat Lahir" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tanggallahir_pemohon" class="form-label"><i class="bi bi-person"></i> Tanggal
                                 Lahir</label>
                             <input type="date" name="tanggallahir_pemohon" class="form-control"
                                 id="tanggallahir_pemohon" placeholder="dd/mm/yyyy" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="kewarganegaraan_pemohon" class="form-label"><i class="bi bi-person"></i>
                                 Kewarganegaraan</label>
                             <input type="text" name="kewarganegaraan_pemohon" class="form-control input-text"
                                 id="kewarganegaraan_pemohon" placeholder="" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="agama" class="form-label"><i class="bi bi-person"></i> Agama</label>
                             <input type="text" name="agama_pemohon" class="form-control input-text" id="agama"
                                 autocomplete="off">
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="pekerjaan_pemohon" class="form-label"><i class="bi bi-person"></i>
                                 Pekerjaan</label>
                             <input type="text" name="pekerjaan_pemohon" class="form-control input-text"
                                 id="pekerjaan_pemohon" placeholder="pekerjaan anda" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="statuspernikahan_pemohon" class="form-label"><i class="bi bi-person"></i>
                                 Status Pernikahan</label>
                             <select name="statuspernikahan_pemohon" id="statuspernikahan_pemohon"
                                 onchange="selectOption()" class="form-select" aria-label="Default select example">
                                 <option value="">= Pilih =</option>
                                 <option value="belum kawin">Belum Kawin</option>
                                 <option value="kawin">Kawin</option>
                             </select>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="hasil_status" class="form-label"><i class="bi bi-person"></i> Status</label>
                             <input type="text" name="hasil_status" class="form-control input-text"
                                 id="hasil_status" value="" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="alamat_pemohon" class="form-label"><i class="bi bi-person"></i> Alamat
                                 Lengkap</label>
                             <textarea name="alamat_pemohon" class="form-control input-text" id="alamat_pemohon" rows="3"
                                 autocomplete="off"></textarea>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>




                         <p class="mt-4 bg-info rounded col-md-8 text-light fw-bold">Akan menikah dengan seorang
                             pria/wanita :</p>

                         <div class="col-md-6 pt-2">
                             <label for="nama_mempelay_laki" class="form-label"><i class="bi bi-person"></i>
                                 Nama</label>
                             <input type="text" name="nama_calon" class="form-control input-text"
                                 id="nama_mempelay_laki" placeholder="masukan nama sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="bintun" class="form-label"><i class="bi bi-person"></i> Nasab</label>
                             <input type="text" name="bintun" class="form-control input-text" id="bintun"
                                 placeholder="nama ayah" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="nik_calon" class="form-label"><i class="bi bi-person"></i> NIK</label>
                             <input type="number" name="nik_calon" class="form-control nik-validation"
                                 id="nik_calon" placeholder="masukan nik sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="kelamin_calon" class="form-label"><i class="bi bi-person"></i> Jenis
                                 Kelamin</label>
                             <select name="kelamin_calon" id="kelamin_calon" class="form-select input-text"
                                 aria-label="Default select example">
                                 <option value="">= Pilih =</option>
                                 <option value="laki-laki">Laki-Laki</option>
                                 <option value="perempuan">Perempuan</option>
                             </select>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tempatlahir_calon" class="form-label"><i class="bi bi-person"></i> Tempat
                                 Lahir</label>
                             <input type="text" name="tempatlahir_calon" class="form-control input-text"
                                 id="tempatlahir_calon" placeholder="Tempat Lahir" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tanggallahir_calon" class="form-label"><i class="bi bi-person"></i> Tanggal
                                 Lahir</label>
                             <input type="date" name="tanggallahir_calon" class="form-control"
                                 id="tanggallahir_calon" placeholder="dd/mm/yyyy">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="kewarganegaraan_calon" class="form-label"><i class="bi bi-person"></i>
                                 Kewarganegaraan</label>
                             <input type="text" name="kewarganegaraan_calon" class="form-control input-text"
                                 id="kewarganegaraan_calon" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="agama_calon" class="form-label"><i class="bi bi-person"></i> Agama</label>
                             <input type="text" name="agama_calon" class="form-control input-text"
                                 id="agama_calon" autocomplete="off">
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="pekerjaan_calon" class="form-label"><i class="bi bi-person"></i>
                                 Pekerjaan</label>
                             <input type="text" name="pekerjaan_calon" class="form-control input-text"
                                 id="pekerjaan_calon" placeholder="isi pekerjaan sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="alamat_calon" class="form-label"><i class="bi bi-person"></i> Alamat
                                 Lengkap</label>
                             <textarea name="alamat_calon" class="form-control input-text" id="alamat_calon" rows="3" autocomplete="off"></textarea>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tempat_akad" class="form-label"><i class="bi bi-person"></i> Alamat Akad
                                 Nikah</label>
                             <textarea name="tempat_akad" class="form-control dataInput" id="tempat_akad" rows="3" autocomplete="off"></textarea>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <p class="mt-4 bg-info rounded col-md-8 text-light fw-bold">Data orang tua pemohon Ayah :</p>

                         {{-- data orang tua --}}

                         <label for="nama_ayah" class="form-label col-md-12"><i class="bi bi-person"></i> Apakah
                             Orang Tua Anda Masih Ada?</label>
                         <div class="input-group py-2">
                             <div class="input-group-text">
                                 <input class="form-check-input" type="radio" name="check" id="check1">
                             </div>
                             <input type="text" class="form-control" value="Masih Ada"
                                 aria-label="Text input with radio button" disabled>
                         </div>
                         <div class="input-group">
                             <div class="input-group-text">
                                 <input class="form-check-input" type="radio" name="check" id="check2">
                             </div>
                             <input type="text" class="form-control" value="Sudah Meninggal"
                                 aria-label="Text input with radio button" disabled>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="nama_ayah" class="form-label"><i class="bi bi-person"></i> Nama Ayah
                                 Pemohon</label>
                             <input type="text" name="nama_ayah" class="form-control data-ayah" id="nama_ayah"
                                 placeholder="nama ayah sesuai ktp" autocomplete="off" disabled>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="bin" class="form-label"><i class="bi bi-person"></i> Nasab</label>
                             <input type="text" name="bin" class="form-control data-ayah" id="bin"
                                 placeholder="nama ayah" autocomplete="off" disabled>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="nik_ayah" class="form-label"><i class="bi bi-person"></i> NIK</label>
                             <input type="number" name="nik_ayah" class="form-control data-ayah" id="nik_ayah"
                                 placeholder="masukan nik sesuai ktp" autocomplete="off" disabled>
                             <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tempatlahir_ayah" class="form-label"><i class="bi bi-person"></i> Tempat
                                 Lahir</label>
                             <input type="text" name="tempatlahir_ayah" class="form-control data-ayah"
                                 id="tempatlahir_ayah" placeholder="tempat lahir ayah" disabled>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="tanggallahir_ayah" class="form-label"><i class="bi bi-person"></i> Tanggal
                                 Lahir</label>
                             <input type="date" name="tanggallahir_ayah" class="form-control data-ayah"
                                 id="tanggallahir_ayah" placeholder="dd/mm/yyyy" autocomplete="off" disabled>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="kewarganegaraan_ayah" class="form-label"><i class="bi bi-person"></i>
                                 kewarganegaraan</label>
                             <input type="text" name="kewarganegaraan_ayah" class="form-control data-ayah"
                                 id="kewarganegaraan_ayah" autocomplete="off" disabled>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="agama_ayah" class="form-label"><i class="bi bi-person"></i> Agama</label>
                             <input type="text" name="agama_ayah" class="form-control data-ayah" id="agama_ayah"
                                 autocomplete="off" di disabled>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="pekerjaan_ayah" class="form-label"><i class="bi bi-person"></i>
                                 Pekerjaan</label>
                             <input type="text" name="pekerjaan_ayah" class="form-control data-ayah"
                                 id="pekerjaan_ayah" placeholder="isi pekerjaan sesuai ktp" autocomplete="off"
                                 disabled>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="alamat_ayah" class="form-label"><i class="bi bi-person"></i> Alamat
                                 Lengkap</label>
                             <textarea name="alamat_ayah" class="form-control data-ayah" id="alamat_ayah" rows="3" autocomplete="off"
                                 disabled></textarea>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         {{-- data orang tua --}}

                         <p class="mt-4 bg-info rounded col-md-8 text-light fw-bold">Data orang tua pemohon Ibu :</p>

                         <div class="col-md-6 pt-2">
                             <label for="nama_ibu" class="form-label"><i class="bi bi-person"></i> Nama Ibu Pemohon
                             </label>
                             <input type="text" name="nama_ibu" class="form-control " id="nama_ibu"
                                 placeholder="masukan nama sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="binti" class="form-label"><i class="bi bi-person"></i> Nasab</label>
                             <input type="text" name="binti" class="form-control " id="binti"
                                 placeholder="nama ayah " autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="nik_ibu" class="form-label"><i class="bi bi-person"></i> NIK</label>
                             <input type="number" name="nik_ibu" class="form-control" id="nik_ibu"
                                 placeholder="masukan nik sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback pesan">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tempatlahir_ibu" class="form-label"><i class="bi bi-person"></i> Tempat
                                 Lahir</label>
                             <input type="text" name="tempatlahir_ibu" class="form-control " id="tempatlahir_ibu"
                                 placeholder="tempat lahir ibu" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="tanggallahir_ibu" class="form-label"><i class="bi bi-person"></i> Tanggal
                                 Lahir</label>
                             <input type="date" name="tanggallahir_ibu" class="form-control"
                                 id="tanggallahir_ibu" placeholder="dd/mm/yyyy">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>

                         <div class="col-md-6 pt-2">
                             <label for="kewarganegaraan_ibu" class="form-label"><i class="bi bi-person"></i>
                                 Kewarganegaraan</label>
                             <input type="text" name="kewarganegaraan_ibu" class="form-control "
                                 id="kewarganegaraan_ibu" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="agama_ibu" class="form-label"><i class="bi bi-person"></i> Agama</label>
                             <input type="text" name="agama_ibu" class="form-control " id="agama_ibu"
                                 autocomplete="off">
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="pekerjaan_ibu" class="form-label"><i class="bi bi-person"></i>
                                 Pekerjaan</label>
                             <input type="text" name="pekerjaan_ibu" class="form-control " id="pekerjaan_ibu"
                                 placeholder="isi pekerjaan sesuai ktp" autocomplete="off">
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         <div class="col-md-6 pt-2">
                             <label for="alamat_ibu" class="form-label"><i class="bi bi-person"></i> Alamat
                                 Lengkap</label>
                             <textarea name="alamat_ibu" class="form-control " id="alamat_ibu" rows="3" autocomplete="off"></textarea>
                             <p class="invalid-feedback">Pastikan data yang di input benar</p>
                         </div>
                         {{-- data orang tua --}}

                         <div class="mt-2">
                             <div class="modal-footer">
                                 <form action="" method="post">
                                     @csrf
                                     <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Tutup</button>
                                     <button type="submit" class="btn btn-primary" id="submitData"
                                         name="daftar">Simpan</button>
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


 <script src="js/validationpengantarnikah.js"></script>
