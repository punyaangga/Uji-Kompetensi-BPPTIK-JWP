<?php
session_start();
if(empty($_SESSION)){
	header("Location: ../halama_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Admin Toko Online</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Halaman </span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logoout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li ><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="#"><svg class="glyph stroked basket "><use xlink:href="#stroked-basket"/></svg> Tambah Barang</a></li>
			<li><a href="pemesanan.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Pemesanan</a></li>
			
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		
		
		<div class="row">
			
		<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Barang</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="tambah.php" method="POST">
							
								<div class="form-group">
									<label>Kode Buku :</label>
									<input type="text" name="kode_buku" class="form-control" placeholder="Masukan Kode Buku">
								</div>
																
								<div class="form-group">
									<label>Judul Buku :</label>
									<input type="text" name="judul_buku" class="form-control" placeholder="Masukan Judul Buku">
								</div>

								<div class="form-group">
									<label>Pengarang :</label>
									<input type="text" name="pengarang" class="form-control" placeholder="Masukan Nama Pengarang">
								</div>

								<div class="form-group">
									<label>Penerbit :</label>
									<input type="text" name="penerbit" class="form-control" placeholder="Masukan Nama Penerbit">
								</div>

								<div class="form-group">
									<label>Tahun Terbit :</label>
									<input type="number" name="tahun_terbit" class="form-control" placeholder="Masukan Tahun Terbit">
								</div>

								<div class="form-group">
									<label>Harga :</label>
									<input type="number" name="harga" class="form-control" placeholder="Masukan Harga Buku">
								</div>

								<div class="form-group">
									<input type="submit" class="btn btn-success btn-sm">
								</div>
							</div>
						</form>


					</div>
				</div>
			</div><!-- /.col-->



		</div><!--/.row-->

		<table class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                   <th >Kode Buku</th>
                    <th >Judul Buku</th>
                    <th >Pengarang</th>
                    <th >Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th >Harga Buku</th>
                    <th>Action</th>
                </tr>
                </thead>

                    <?php
                     
                      include('../koneksi.php');
                    
                      
                      $result=mysql_query('SELECT * FROM afh_databuku' );
                      $no=1;
                      while ($row=mysql_fetch_array($result)){

                        
                        echo "<tr>";
                         echo "<td>".$no."</td>";
                         echo "<td>".$row['kode_buku']."</td>";
                         echo "<td>".$row['judul_buku']."</td>";
                         echo "<td>".$row['pengarang']."</td>";
                         echo "<td>".$row['penerbit']."</td>";
                         echo "<td>".$row['tahun_terbit']."</td>";
                         echo "<td>".$row['harga']."</td>";
                         echo '<td><a href="edit.php?kode_buku='.$row['kode_buku'].'">Edit</a> / <a href="hapus.php?kode_buku='.$row['kode_buku'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
                         $no++;
                        }
                      ?>
            </table>
		
		
		
		
								
		
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
