<?php
include('../koneksi.php');
//$afh_kode_pesanan=$_POST['kode_pesanan'];
$afh_tgl_pemesan=$_POST['tgl_pemesan'];
$afh_email_pemesan=$_POST['email_pemesan'];
$afh_kode_buku=$_POST['kode_buku'];
$afh_jumlah_pesanan=$_POST['jumlah_pesanan'];
$afh_keterangan=$_POST['keterangan'];
$afh_kode_bayar=$_POST['kode_bayar'];
$update=mysql_query("UPDATE afh_pemesanan SET tgl_pemesan='$afh_tgl_pemesan',email_pemesan='$afh_email_pemesan',kode_buku='$afh_kode_buku',jumlah_pesanan='$afh_jumlah_pesanan',keterangan='$afh_keterangan',kode_bayar='$afh_kode_bayar'where kode_buku='$afh_kode_buku'") or die(mysql_error());
//header('location:pemesanan.php');
?>