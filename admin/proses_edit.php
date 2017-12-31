<?php
include('../koneksi.php');
$afh_kode_buku=$_POST['kode_buku'];
$afh_judul_buku=$_POST['judul_buku'];
$afh_pengarang=$_POST['pengarang'];
$afh_penerbit=$_POST['penerbit'];
$afh_tahun_terbit=$_POST['tahun_terbit'];
$afh_harga=$_POST['harga'];
$update=mysql_query("UPDATE afh_databuku SET kode_buku='$afh_kode_buku',judul_buku='$afh_judul_buku',pengarang='$afh_pengarang',penerbit='$afh_penerbit',tahun_terbit='$afh_tahun_terbit',harga='$afh_harga'where kode_buku='$afh_kode_buku'") or die(mysql_error());
header('location:barang.php');
?>