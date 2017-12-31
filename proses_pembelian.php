<?php
include ('koneksi.php');

$afh_kode_pesanan='';
$afh_tgl_pemesan=$_POST['tgl_pemesanan'];
$afh_tgl_pemesan= date ('Y-m-d', strtotime($afh_tgl_pemesan)); 
$afh_email_pemesan=$_POST['email'];
$afh_kode_buku=$_POST['kode_buku'];
$afh_jumlah_pesanan=$_POST['jumlah_pesanan'];
$afh_keterangan='belum bayar';
$afh_kode_bayar='1';

$afh_simpan=mysql_query("INSERT INTO afh_pemesanan VALUES('$afh_kode_pesanan','$afh_tgl_pemesan','$afh_email_pemesan','$afh_kode_buku','$afh_jumlah_pesanan','$afh_keterangan','$afh_kode_bayar')") or die(mysql_error());
header ("location:index.php");
?>