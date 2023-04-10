@auth
<div class="container layanan">


    {{-- <h2 class="mt-2 text-center rounded fw-semibold text-light bg-primary">Layanan Umum</h2> --}}
    <div class="row gap-2 justify-content-center">
        <a href="#" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
            <img src="Asetpictures/icon/surat_pindah.png" alt="" width="50px" />
            <h6 class="text-center">
                Surat Pindah Wilayah
            </h6>
        </a>
        <a href="" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="200">
            <img src="Asetpictures/icon/surat_kematian.png" alt="" width="50px" />
            <h6 class="text-center">
                Surat Kematian
            </h6>
        </a>
        <a href="/formsktmrs" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="300">
            <img src="Asetpictures/icon/pengajuan_sktm.png" alt="" width="50px" />
            <h6 class="text-center">
                SKTM RUMAH SAKIT
            </h6>
        </a>
        <a href="#" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="400" data-bs-toggle="modal" data-bs-target="#sktmsekolah">
            <img src="Asetpictures/icon/pengajuan_sktm.png" alt="" width="50px" />
            <h6 class="text-center">
                SKTM SEKOLAH
            </h6>
        </a>
        <a href="#" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="500" data-bs-toggle="modal" data-bs-target="#suratdomisili">
            <img src="Asetpictures/icon/surat_domisili.png" alt="" width="50px" />
            <h6 class="text-center">
                Surat Domisili
            </h6>
        </a>
        <a href="" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="600">
            <img src="Asetpictures/icon/ubah_data_diri.png" alt="" width="50px" />
            <h6 class="text-center">
                Ubah Data Diri
            </h6>
        </a>
        <a href="#" class="col-md-4 d-flex flex-column align-items-center box layanan-box" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="700" data-bs-toggle="modal" data-bs-target="#suratpengantarnikah">
            <img src="Asetpictures/icon/party.png" alt="" width="50px" />
            <h6 class="text-center">
                Surat Pengantar Nikah
            </h6>
        </a>
    </div>
      
     @include('formulirSurat/formdomisili')
     @include('formulirSurat/formsktmsekolah')
     @include('formulirSurat/formsuratpengantarnikah')
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    @endauth


