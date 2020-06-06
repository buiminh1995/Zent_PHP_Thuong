<?php 
	require_once('products.php');
	session_start();
	//session_destroy();
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop || Sellshop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="css/materialdesignicons.min.css">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="css/jquery.simpleLens.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo.slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<?php include_once('header.php'); ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Shop</h2>
							<ul class="text-left">
								<li><a href="index.html">Home </a></li>
								<li><span> // </span>Shop</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- shop content section start -->
		<div class="pages products-page section-padding text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="right-products">
							<div class="row">
								<div class="col-xs-12">
									<div class="section-title clearfix">
										<ul>
											<li>
												<ul class="nav-view">
													<li><a href="product-grid.html"> <i class="mdi mdi-view-module"></i> </a></li>
													<li><a href="product-list.html"> <i class="mdi mdi-view-list"></i> </a></li>
												</ul>
											</li>
											<li class="sort-by floatright">
												Showing 1-12 of 89 Results
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="grid-content">
								<?php foreach ($products as $product) { ?>
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<div class="pro-type">
													<span>new</span>
												</div>
												<a href="#"><img src="<?= $product['Anh'] ?>" alt="Product Title" /></a>
												<div class="actions-btn">
													<a href="add2cart.php?MaSp=<?= $product['MaSp'] ?>" ><i class="mdi mdi-cart"></i></a>
													<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
													<!-- <a href="#"><i class="mdi mdi-heart"></i></a> -->
												</div>
											</div>
											<div class="product-dsc">
												<p><a href="#"><?= $product['TenSp'] ?></a></p>
												<div class="ratting">
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star-half"></i>
													<i class="mdi mdi-star-outline"></i>
												</div>
												<span><?= number_format($product['GiaTien']) ?></span>
											</div>
										</div>
									</div>
								<?php } ?>
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
									
									<!-- single product end -->
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="pagnation-ul">
										<ul class="clearfix">
											<li><a href="#"><i class="mdi mdi-menu-left"></i></a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">...</a></li>
											<li><a href="#">10</a></li>
											<li><a href="#"><i class="mdi mdi-menu-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- shop content section end -->
        <!-- quick view start -->
		
		<!-- quick view end -->
        <!-- footer section start -->
		<?php include_once('footer.php'); ?>
        <!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.3.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- countdown JS -->
        <!-- <script src="js/countdown.js"></script> -->
		<!-- nivo.slider JS -->
        <script src="js/jquery.nivo.slider.pack.js"></script>
		<!-- simpleLens JS -->
        <script src="js/jquery.simpleLens.min.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- load-more js -->
        <script src="js/load-more.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
