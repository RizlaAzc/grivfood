<?php
date_default_timezone_set('Asia/Jakarta');

function insert_pengunjung($ip) {
    $date = date('Y-m-d');
    $date_created = date('Y-m-d H:i:s');

    $koneksi = mysqli_connect("localhost", "root", "", "grivfood");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO pengunjung (ip, date, date_created) VALUES ('$ip', '$date', '$date_created')";

    if (mysqli_query($koneksi, $query)) {
        mysqli_close($koneksi);
        return true;
    } else {
        mysqli_close($koneksi);
        return false;
    }
}

function get_data_pengunjung() {
    $koneksi = mysqli_connect("localhost", "root", "", "grivfood");
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    $query = "SELECT COUNT(id) AS id FROM pengunjung";
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
?>