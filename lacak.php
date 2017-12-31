<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku Online</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header id="header">
		<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<div class="col-sm-4">
								<div class="logo pull-left">
									<img src="images/home/logo.png">
								</div>
							</div>

							<ul class="nav navbar-nav" >
								<li><a href="halama_login.php"><i class="fa fa-user"></i> Login Admin</a></li>
								<li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="lacak.php"><i class="fa fa-shopping-cart"></i> Lacak Pesanan</a></li>

							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Belanja Yuk<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Buku Terbaru</a></li>
                                        <li><a href="shop.html">Buku Terlaris</a></li>
	 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tentang Kami<i class="fa fa-angle-down"></i></a>
                                    
                                </li> 
								<li><a href="contact-us.html">Kontak Kami</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	</header>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
						
						<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Advanced Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						 		
						        <th   data-sortable="true">Email</th>
						         <th  data-sortable="true">Kode Pesanan</th>
						        <th  data-sortable="true">Jumlah Pesanan</th>
						        
						    </tr>
						    </thead>
						     <?php
                     
		                      include('koneksi.php');
		                    
		                      
		                      $result=mysql_query('SELECT * FROM afh_pemesanan' );
		                      $no=1;
		                      while ($row=mysql_fetch_array($result)){

		                        
		                        echo "<tr>";
		                         
		                         echo "<td>".$row['email_pemesan']."</td>";
		                         echo "<td>".$row['kode_pesanan']."</td>";
		                         echo "<td>".$row['jumlah_pesanan']."</td>";
		                         
		                         $no++;
		                        }
		                      ?>
						</table>
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		
	</section>

	<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<center><p class="pull-left">Copyright &copy;  2017 afh_tobuk. All rights reserved.</p></center>
			
				</div>
			</div>
		</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
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