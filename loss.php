<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPPTIK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <a class="navbar-brand" href="#">Halaman User</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
  </div><!-- /.container-fluid -->
</nav>

 <div class="container">
    <div class="row">
      <center><h2>Tambah Barang</h2></center>
      <div class="login">

        

        <table class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                    <th >Nama Barang</th>
                    <th >Harga Barang</th>
                    <th >Tahun Barang</th>
                    <th>Qty</th>
                   
                </tr>
                </thead>

                    <?php
                     
                      include('koneksi.php');
                    
                      
                      $result=mysql_query('SELECT * FROM barang' );
                      $no=1;
                      while ($row=mysql_fetch_array($result)){

                        $hitung=$row['harga']+$row['tahun'];
                        echo "<tr>";
                         echo "<td>".$no."</td>";
                         echo "<td>".$row['nama_barang']."</td>";
                         echo "<td>".$row['harga']."</td>";
                         echo "<td>".$row['tahun']."</td>";
                         
                         echo '<td>'.'</td>';
                         $no++;
                        }
                      ?>
            </table>
            <input type="button" class="tombol" value="kembali">
      
      </div>
    </div>
  </div>


   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>