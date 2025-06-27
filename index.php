<?php 
ob_start(); 
include_once('views/template/header.php'); 

include_once('views/page/beranda.php'); 
include_once('views/page/tentang.php'); 
include_once('views/page/menu.php'); 
include_once('views/page/acara.php'); 
include_once('views/page/galeri.php'); 
include_once('views/page/reservasi.php'); 
include_once('views/page/kontak.php'); 

include_once('views/template/footer.php'); 
ob_end_flush(); 
?>