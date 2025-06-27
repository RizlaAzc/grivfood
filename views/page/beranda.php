  <?php
  require_once 'controllers/pengunjung.php';
  require_once 'controllers/pesan.php';
  require_once 'controllers/reservasi.php';
  
  $ip = $_SERVER['REMOTE_ADDR'];
  insert_pengunjung($ip);
  ?>

  <section id="beranda" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <?php
      $reservasi = get_flashdata_reservasi('reservasi');
      $pesan = get_flashdata_pesan('pesan');
      if ($reservasi != null) {
          echo $reservasi;
      } else if ($pesan != null) {
          echo $pesan;
      }
      ?>
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Nikmati Makanan<br>Sehat dan Lezat Anda</h2>
          <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="100">GRIV Food merupakan restoran makanan yang dimana semua orang dapat memesan makanan secara online maupun offline, dan Anda dapat melakukan reservasi tempat pada restoran kami.
            <br>
            <b style="font-size: 8px;">Catatan : Silakan membawa minuman Anda sendiri, dikarenakan kami tidak menyediakan minuman ;)</b>
          </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#reservasi" class="btn-book-a-table" style="">Booking Tempat</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/GRIVlogo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>