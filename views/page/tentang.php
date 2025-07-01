<?php
// Menghubungkan ke file kontroller yang diperlukan
include_once('controllers/pengunjung.php'); 
include_once('controllers/reservasi.php'); 

$pengunjung = get_data_pengunjung();
$reservasi = get_data_reservasi();

?>

<main id="main">

<!-- Halaman Tentang -->
  <section id="tentang" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tentang Kami</h2>
        <p>Pelajari Lebih Lanjut <span>Tentang GRIV</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
        </div>

        <!-- Deskripsi Singkat -->
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic" style="text-align: justify;">
              GRIV Food merupakan restoran makanan yang dimana semua orang dapat memesan makanan secara online maupun offline, dan Anda dapat melakukan reservasi tempat pada restoran kami.
            </p>
            <p style="text-align: justify;">
              Kami siap menemani waktu santai kamu dengan berbagai pilihan menu yang enak dan bikin nagih. Mau makan di tempat bareng teman atau keluarga, atau pesan dari rumah aja, semua bisa! Reservasi juga gampang, jadi kamu nggak perlu khawatir kehabisan tempat.
            </p>
            <div class="position-relative mt-4">
              <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Statistik Pengunjung, Reservasi, dan Pekerja -->
    <section id="stats-counter" class="stats-counter" style="margin-top: 70px;">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-8">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $pengunjung; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengunjung</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-8">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $reservasi; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Telah Reservasi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-8">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pekerja</p>
            </div>
          </div>

        </div>

      </div>
    </section>
  </section>