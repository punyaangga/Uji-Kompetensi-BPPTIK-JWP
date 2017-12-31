<?php
include('../koneksi.php');
$afh_kode_buku=$_POST['kode_buku'];
$afh_judul_buku=$_POST['judul_buku'];
$afh_pengarang=$_POST['pengarang'];
$afh_penerbit=$_POST['penerbit'];
$afh_tahun_terbit=$_POST['tahun_terbit'];
$afh_harga=$_POST['harga'];
$afh_simpan=mysql_query("INSERT INTO afh_databuku VALUES ('$afh_kode_buku','$afh_judul_buku','$afh_pengarang','$afh_penerbit','$afh_tahun_terbit','$afh_harga')") or die(mysql_error());
header("location:barang.php");
?>