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
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<img src="images/home/product2.png" class="girl img-responsive" alt="" />
									<img src="images/home/product3.png"  class="pricing" alt="" />
								</div>
								<div class="col-sm-6">
									<h1><span>New</span>Produk</h1>
									<h2>Berbagai Promo Buku Terbaru</h2>
									<p>Terdapat baju buku yang ditulis oleh penulis-penulis terkenal</p>
									<button type="button" class="btn btn-default get" style="background:">Blanja</button>
								</div>
								
							</div>		
						</div>
						
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
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori Produk</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Buku Islami
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Buku Cerita
										</a>
									</h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Buku IT
										</a>
									</h4>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brand Produk</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(10)</span>Jurnal LN</a></li>
									<li><a href="#"> <span class="pull-right">(26)</span>Samudra Buku</a></li>
									<li><a href="#"> <span class="pull-right">(17)</span>Sinar Dunia</a></li>
									<li><a href="#"> <span class="pull-right">(22)</span>Sinar Terang Benderang</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->			
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Produk Terbaru</h2>
						 
						 <?php
                     
		                      include('koneksi.php');
		                    
		                      
		                      $result=mysql_query('SELECT * FROM afh_databuku' );
		                      $no=1;
		                      while ($row=mysql_fetch_array($result)){ ?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product2.png" alt="" />
											<h2>Rp. <?php echo $row['harga'];?></h2>
											<p><?php echo $row['judul_buku'];?></p>
											<p>Kode Buku : <?php echo $row['kode_buku'];?></p>
											<?php echo '<a href="pembelian.php?kode_buku='.$row['kode_buku'].'" >Beli Buku';?>
										</div>	
								</div>
								 
								
								</div>
							
							</div>
							<?php } ?>

							

						</div>
				
				</div>
			</div>
		</div>
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
</body>
</html>