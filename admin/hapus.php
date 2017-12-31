<?php
include('../koneksi.php');
$afh_kode_buku=$_GET['kode_buku'];
$hapus=mysql_query("DELETE FROM afh_databuku WHERE kode_buku='$afh_kode_buku'");
header('location:barang.php');
?>