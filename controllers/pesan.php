<?php
date_default_timezone_set('Asia/Jakarta');

function set_flashdata_pesan($key, $pesan) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['flashdata'][$key] = $pesan;
}

function get_flashdata_pesan($key) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['flashdata'][$key])) {
        $pesan = $_SESSION['flashdata'][$key];
        unset($_SESSION['flashdata'][$key]);
        return $pesan;
    }
    return null;
}

function insert_pesan($data) {
    if ($_POST['tipe_form'] !== 'kontak') {
        return;
    }
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];
    $tanggal_diterima = date('Y-m-d H:i:s');

    $koneksi = mysqli_connect("localhost", "root", "", "grivfood");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO kontak (id, nama, email, subjek, pesan, tanggal_diterima) VALUES ('', '$nama', '$email', '$subjek', '$pesan', '$tanggal_diterima')";

    if (mysqli_query($koneksi, $query)) {
        mysqli_close($koneksi);
        set_flashdata_pesan('pesan', '<div class="alert alert-success" role="alert">Pesan Berhasil Terkirim!</div>');
        echo "<script>window.location.href = '/grivfood/';</script>";
    } else {
        mysqli_close($koneksi);
        set_flashdata_pesan('pesan', '<div class="alert alert-danger" role="alert">Pesan Gagal Terkirim!</div>');
        echo "<script>window.location.href = '/grivfood/';</script>";
    }
}
?>