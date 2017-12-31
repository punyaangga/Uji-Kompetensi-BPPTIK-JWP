<?php
session_start();
if(empty($_SESSION)){
  header("Location: ../halama_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPPTIK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>


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
      <a class="navbar-brand" href="#">Halaman Admin</a>
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
      <center><h2>Tambah Barang</h2></center>
      <div class="login">

        <form role="form" action="tambah.php" method="post">
          <div class="form-group">
            <input type="text" name="kode_buku" class="form-control" placeholder="Masukan Kode Buku" required autofocus />
          </div>
          <div class="form-group">
            <input type="text" name="judul_buku" class="form-control" placeholder="Masukan Judul Buku" required autofocus />
          </div>
          <div class="form-group">
            <input type="text" name="pengarang" class="form-control" placeholder="Masukan Nama Pengarang" required autofocus />
          </div>
          <div class="form-group">
            <input type="text" name="penerbit" class="form-control" placeholder="Masukan Nama Penerbit" required autofocus />
          </div>
          <div class="form-group">
            <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukan Tahun Terbit" required autofocus />
          </div>
          <div class="form-group">
            <input type="number" name="harga" class="form-control" placeholder="Masukan Harga" required autofocus />
          </div>
          <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Tambah Data" />
          </div>
        </form>

        <table class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                   <th >Kode Barang</th>
                    <th >Nama Barang</th>
                    <th >Harga Barang</th>
                    <th >Tahun Barang</th>
                    <th >Harga Barang</th>
                    <th>Action</th>
                </tr>
                </thead>

                    <?php
                     
                      include('koneksi.php');
                    
                      
                      $result=mysql_query('SELECT * FROM afh_databuku' );
                      $no=1;
                      while ($row=mysql_fetch_array($result)){

                        
                        echo "<tr>";
                         echo "<td>".$no."</td>";
                         echo "<td>".$row['kode_buku']."</td>";
                         echo "<td>".$row['judul_buku']."</td>";
                         echo "<td>".$row['pengarang']."</td>";
                         echo "<td>".$row['tahun_terbit']."</td>";
                         echo "<td>".$row['harga']."</td>";
                         echo '<td><a href="edit.php?kode_buku='.$row['kode_buku'].'">Edit</a> / <a href="hapus.php?kode_buku='.$row['kode_buku'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
                         $no++;
                        }
                      ?>
            </table>
      
      </div>
    </div>
  </div>


   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>