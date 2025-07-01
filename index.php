<?php 
ob_start();

// Mengimpor tampilan header
include_once('views/template/header.php'); 

// Mengimpor seluruh halaman
include_once('views/page/beranda.php'); 
include_once('views/page/tentang.php'); 
include_once('views/page/menu.php'); 
include_once('views/page/acara.php'); 
include_once('views/page/galeri.php'); 
include_once('views/page/reservasi.php'); 
include_once('views/page/kontak.php'); 

// Mengimpor tampilan footer
include_once('views/template/footer.php'); 

ob_end_flush(); 
?>