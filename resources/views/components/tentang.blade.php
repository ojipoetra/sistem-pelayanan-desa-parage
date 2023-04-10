@extends('menu.navbar')

@section('components')

@include('menu.header')
  <!-- akhir header -->
@include('menu.layanan')

  <!-- Visi & Misi -->
  <section class="container pt-4 visi">
    <h2 class="text-center fw-semibold visi-content heading-text">Visi & Misi</h2>
    <div class="row">
      <div class="col-md-6 visi-content left">
        <h4 class="visi-text visi-text">Visi</h4>
        <p>
          Bersama Mewujudkan Pembangunan Desa Parage Yang Agamis Sebagai
          Daerah Agraris
        </p>
        <p>Nilai-nilai yang melandasi Visi Tersebut adalah :</p>
        <p>1. Dilihat dari sejarah parage merupakan daerah sentral penyebar agama islam kita harus bangga dengan cara
          meningkatkan ukhuwah islamiah melalui kegiatan keagamaan dan kegiatan yang sesuai dengan kultur dan budaya
          islam.</p>
        <p>2. Struktu tanah parage yang dianugrahi oleh ALLAH SWT sebagai agraris yang subur, marilah kita mengubah
          dalam uaya peningkatan ekonomi masyarakat dengan cara belajar dengan dinas terkait dan memperaktekanya
          dilapangan dan memberikan edukasi ke masyarakat .</p>
      </div>
      <div class="col-md-6 visi-content right">
        <h4 class="visi-text">Misi</h4>
        <p>
          1.Mengembangkan sarana-sarana yang menunjnag untuk kegiatan
          keagamaan.
          <p>2. Berkordinasi dengan para alim ulama untuk meningkatkan
            kehidupan beragama.
          </p>
          <p>3. Pemerataan pembangunan infrastruktur parage </p>
          <p>4. Pengadaaan
            transportasi umum untuk masyarakat desa parage </p>
          <p>5. Peningkatan
            program/kegiatan untuk lansia, ibu hamil, remaja, baik lewat
            kegiatan posyandu maupun kegiatan lainya, untuk memberikan edukasi
            kesehatan masyarakat. </p>
          <p> 6. Pendekatan para tokoh masyarakat untuk
            diajak diskusi dan mencari solusi yang terbaik untuk kemajuan desa
            parage 7. Peningkatan kualitas pelayanan masyarakat dengan
            peningkatan disiplin kerja, santun dan tangguh.</p>

        </p>
      </div>
    </div>
  </section>
  <!-- akhir visi & misi -->

  <!-- Aparatur desa -->
  <section class="container pt-4 pictures-aparat">
    <div class="row justify-content-center gap-2 aparat-desa">
      <h2 class="text-center fw-semibold">Aparatur Desa</h2>
      <a href="" class="col-md-4 d-flex flex-column align-items-center box boxs">
        <img src="Asetpictures/jaro1.png" alt="" width="90px" class="profil" />
        <h4 class="">Kepala Desa</h4>
        <h6>Linda Hendriana</h6>
      </a>
      <a href="" class="col-md-4 d-flex flex-column align-items-center box boxs">
        <img src="Asetpictures/kandi.png" alt="" width="90px" class="profil" />
        <h4 class="">Sekretaris Desa</h4>
        <h6>Muhamad Juhandi.S.I.Kom</h6>
      </a>
      <a href="" class="col-md-4 d-flex flex-column align-items-center box boxs">
        <img src="Asetpictures/rendra.png" alt="" width="90px" class="profil" />
        <h4 class="">Kasi Ekbang & Kersa</h4>
        <h6>Hendra</h6>
      </a>
      <a href="" class="col-md-4 d-flex flex-column align-items-center box boxs">
        <img src="Asetpictures/tari.png" alt="" width="90px" class="profil" />
        <h4 class="">Staff Keuangan</h4>
        <h6>Febbi Cahaya Lestari</h6>
      </a>
      <a href="" class="col-md-4 d-flex flex-column align-items-center box boxs">
        <img src="Asetpictures/kaman.png" alt="" width="90px" class="profil" />
        <h4 class="">Staff Pengelola Data</h4>
        <h6>Aman Hidayat</h6>
      </a>
      <a href="" class="col-md-4 d-flex flex-column align-items-center box boxs">
        <img src="Asetpictures/madsura.jpg" alt="" width="90px" class="profil" />
        <h4 class="">
          Staff Sekretariat BPD
        </h4>
        <h6>Madsura</h6>
      </a>
    </div>
  </section>
  <!-- akhir aparatur desa -->

  <!-- struktur organisasi -->

  <section class="container pt-4">
    <h2 class="text-center fw-semibold">Struktur Organisasi Pemerintah Desa Parage</h2>
    <div class="row organisasi">
      <div class="col-md-6 my-3">
        <h4 class="text-center fw-semibold pb-2">Pemerintah Desa Parage</h4>
        <img src="Asetpictures/pemerintahDesa.png" alt="" width="100%">
      </div>
      <div class="col-md-6 my-3">
        <h4 class="text-center fw-semibold pb-2">Karang Taruna</h4>
        <img src="Asetpictures/KarangTaruna.png" alt="" width="100%">
      </div>
      <div class="col-md-6 my-3">
        <h4 class="text-center fw-semibold pb-2">PKK Dan Dasawisma</h4>
        <img src="Asetpictures/pkk&dasaWisma.png" alt="" width="100%">
      </div>
      <div class="col-md-6 my-3">
        <h4 class="text-center fw-semibold pb-2">Kader Posyandu</h4>
        <img src="Asetpictures/KaderPosyandu.png" alt="" width="100%">
      </div>
    </div>
  </section>
  <!-- akhir struktur organisasi -->
    {{-- maps dan komentar --}}
    @include('menu.maps')
    {{-- akhir maps dan komentar --}}

    
    {{-- footer --}}
    @include('menu.footer')
    {{-- akhir footer --}}
  <script src="js/kelurahan.js"></script>
@endsection