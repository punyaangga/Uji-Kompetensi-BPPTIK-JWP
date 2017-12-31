
<html>
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPPTIK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include('koneksi.php');
$kode_buku=$_GET['kode_buku'];
$show = mysql_query("SELECT * FROM afh_databuku where kode_buku='$kode_buku'");
$data=mysql_fetch_assoc($show);
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Form Pembelian Barang</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logout <span class="caret"></span></a>
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <div class="container">
    <div class="row">
      <center><h2>Barang Yang Anda Beli</h2></center>
      <div class="login">

        <form role="form" action="proses_pembelian.php" method="post">
          
          <div class="form-group">
            <input type="hidden" name="kode_buku" class="form-control"  value="<?php echo $data['kode_buku'];?>" />
            <label>Judul Buku :</label>
             <input type="text"readonly="" name="judul_buku" class="form-control" value="<?php echo $data['judul_buku'];?>"  />
            
          </div>
          <div class="form-group">
            <label>Pengarang :</label>
           <input type="text" readonly="" name="pengarang" class="form-control" value="<?php echo $data['pengarang'];?>"  />
          </div>
          <div class="form-group">
            <label>Penerbit :</label>
             <input type="text"readonly="" name="penerbit" class="form-control" value="<?php echo $data['penerbit'];?>"  />
          </div>
          <div class="form-group">
            <label>Tahun Terbit</label>
           <input type="number" readonly=""name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit'];?>"  />
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="number" readonly=""name="harga" class="form-control" value="<?php echo $data['harga'];?>"  />
          </div>
          <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" class="form-control"   />
          </div>
          <div class="form-group">
            <label>Qty :</label>
            <input type="number" name="jumlah_pesanan" class="form-control"   />
          </div>
           <div class="form-group">
            <label>Tanggal Pesan :</label>
            <input type="date" name="tgl_pemesan" class="form-control"   />
          </div>
          <div class="form-group">
            
          </div>
          <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Beli Buku" />
          </div>
        </form>
        <a href="index.php"><input type="submit" name="login" class="btn btn-primary btn-block" value="Kembali" /></a>

        
      </div>
    </div>
  </div>


   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

