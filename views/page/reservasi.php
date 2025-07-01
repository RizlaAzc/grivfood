<?php
// Menghubungkan ke file kontroller yang diperlukan
require_once 'controllers/reservasi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'tipe_form' => $_POST['tipe_form'],
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'telepon' => $_POST['telepon'],
        'tanggal' => $_POST['tanggal'],
        'jam' => $_POST['jam'],
        'jumlah_orang' => $_POST['jumlah_orang'],
        'pesan' => $_POST['pesan']
    ];

    insert_reservasi($data);
}
?>

<!-- Halaman Reservasi -->
<section id="reservasi" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Reservasi</h2>
      <p><span>Reservasi</span> Dengan <span>GRIV</span></p>
    </div>

    <div class="row g-0">

      <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

      <!-- Form Reservsasi -->
      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="" method="post" role="form" class="form" style="padding: 40px;" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="hidden" name="tipe_form" value="reservasi">
              <input style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" type="text" class="form-control" name="telepon" id="phone" placeholder="Nomor Telepon" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" type="date" name="tanggal" class="form-control" id="date" placeholder="Tanggal / Bulan / Tahun" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" type="time" class="form-control" name="jam" id="time" placeholder="Jam" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" type="number" class="form-control" name="jumlah_orang" id="people" placeholder="Jumlah Orang" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea style="padding: 12px 15px; border-radius: 0; box-shadow: none; font-size: 14px; border-radius: 0;" class="form-control" name="pesan" rows="5" placeholder="Pesan"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading" style="display: none; background: #fff; text-align: center; padding: 15px; margin-bottom: 24px;">Loading</div>
            <div class="error-message" style="display: none; color: #fff; background: #df1529; text-align: left; padding: 15px; margin-bottom: 24px; font-weight: 600;"></div>
            <div class="sent-message" style="display: none; color: #fff; background: #059652; text-align: center; padding: 15px; margin-bottom: 24px; font-weight: 600;">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button style="background: var(--color-primary); border: 0; padding: 14px 60px; color: #fff; transition: 0.4s; border-radius: 50px;" type="submit">Reservasi</button></div>
        </form>
      </div>

    </div>

  </div>

  <div class="container mt-4" data-aos="fade-up">

  <!-- Pesan Online -->
    <div class="section-header">
      <p>Atau <span>Ingin Pesan Secara Online ?</span></p>
      <p style="font-size: 36px;">Dapat Anda pesan melalui</p>
      <img style="width: 250px;" src="assets/img/gofood.png" alt="">
      <img style="width: 250px; margin-left: 50px; margin-right: 50px;" src="assets/img/grabfood.png" alt="">
      <img style="width: 250px;" src="assets/img/shopeefood.png" alt="">
    </div>

  </div>
</section>