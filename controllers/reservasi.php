<?php
date_default_timezone_set('Asia/Jakarta');

function get_data_reservasi() {
    $koneksi = mysqli_connect  ("localhost", "root", "", "grivfood");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    $query = "SELECT COUNT(id) AS id FROM reservasi";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($koneksi);
        return $row['id'];
    } else {
        mysqli_close($koneksi);
        return 0;
    }
}

function set_flashdata_reservasi($key, $reservasi) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['flashdata'][$key] = $reservasi;
}

function get_flashdata_reservasi($key) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['flashdata'][$key])) {
        $reservasi = $_SESSION['flashdata'][$key];
        unset($_SESSION['flashdata'][$key]);
        return $reservasi;
    }
    return null;
}

function insert_reservasi($data) {
    if ($_POST['tipe_form'] !== 'reservasi') {
        return;
    }
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $pesan = $_POST['pesan'];
    $tanggal_diterima = date('Y-m-d H:i:s');

    $koneksi = mysqli_connect("localhost", "root", "", "grivfood");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO reservasi (id, nama, email, telepon, tanggal, jam, jumlah_orang, pesan, tanggal_diterima) VALUES ('','$nama', '$email', '$telepon', '$tanggal', '$jam', '$jumlah_orang', '$pesan', '$tanggal_diterima')";

    if (mysqli_query($koneksi, $query)) {
        mysqli_close($koneksi);
        set_flashdata_reservasi('reservasi', '<div class="alert alert-success" role="alert">Reservasi Berhasil!</div>');
        echo "<script>window.location.href = '/grivfood/';</script>";
    } else {
        mysqli_close($koneksi);
        set_flashdata_reservasi('reservasi', '<div class="alert alert-danger" role="alert">Reservasi Gagal!</div>');
        echo "<script>window.location.href = '/grivfood/';</script>";
    }
}
?>