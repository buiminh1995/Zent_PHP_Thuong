<?php 
	session_start();
	//session_destroy();
	$products = $_SESSION['cart'];
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cart || Sellshop</title>
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
							<h2>Cart</h2>
							<ul class="text-left">
								<li><a href="index.html">Home </a></li>
								<li><span> // </span>Cart</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- cart content section start -->
		<section class="pages cart-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive padding60">
							<table class="wishlist-table text-center">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>quantity</th>
										<th>Total Price</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$sum_amount = 0;
								foreach ($products as $product) { 
								$sum_amount += ($product['GiaTien']*$product['SoLuong']);
								?>
									<tr>
										<td class="td-img text-left">
											<a href="#"><img src="<?= $product['Anh'] ?>" alt="Add Product" /></a>
											<div class="items-dsc">
												<p><a href="#"><?= $product['TenSp'] ?></a></p>
												<!-- <p class="itemcolor">Color : <span>Blue</span></p>
												<p class="itemcolor">Size   : <span>SL</span></p> -->
											</div>
										</td>
										<td><?= number_format($product['GiaTien']) ?></td>
										<td>
											<!-- <form action="#" method="POST"> -->
												<div class="plus-minus">
													<a href="delete.php?MaSp=<?= $product['MaSp'] ?>" class="dec qtybutton">-</a>
													<input type="text" value="<?=$product['SoLuong'] ?>" name="qtybutton" class="plus-minus-box">
													<a href="add2cart.php?MaSp=<?= $product['MaSp'] ?>" class="inc qtybutton">+</a>
												</div>
											<!-- </form> -->
										</td>
										<td>
											<strong><?= number_format($product['GiaTien']*$product['SoLuong']) ?></strong>
										</td>
										<td><a href="delete.php?MaSp=<?= $product['MaSp'] ?>rmv"><i class="mdi mdi-close" title="Remove this product"></i></a></td>
									</tr>
								<?php } ?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>coupon discount</strong></h3>
							</div>
							<div class="cart-form-text custom-input">
								<p>Enter your coupon code if you have one!</p>
								<form action="mail.php" method="post">
									<input type="text" name="subject" placeholder="Enter your code here..." />
									<div class="submit-text coupon">
										<button type="submit">apply coupon </button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>payment details</strong></h3>
							</div>
							<div class="cart-form-text pay-details table-responsive">
								<table>
									<tbody>
										<tr>
											<th>Cart Subtotal</th>
											<td><?= number_format($sum_amount) ?></td>
										</tr>
										<tr>
											<th>Shipping and Handing</th>
											<? $shipping = 50000; 
											$vat = $sum_amount/100*10;
											?>
											<td><?= number_format($shipping) ?> </td>
										</tr>
										<tr>
											<th>Vat</th>
											<td><?= number_format($vat) ?> </td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="tfoot-padd">Order total</th>
											<td class="tfoot-padd"><?= number_format($sum_amount + $shipping + $vat) ?> </td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-xs-12">
						<div class="padding60">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="single-cart-form">
										<div class="log-title">
											<h3><strong>calculate shipping</strong></h3>
										</div>
										<div class="cart-form-text custom-input">
											<p>Enter your coupon code if you have one!</p>
											<form action="mail.php" method="post">
												<input type="text" name="country" placeholder="Country" />
												<div class="submit-text">
													<button type="submit" >get a quote</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="single-cart-form">
										<div class="cart-form-text post-state custom-input">
											<form action="mail.php" method="post">
												<input type="text" name="state" placeholder="Region / State" />
											</form>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="single-cart-form">
										<div class="cart-form-text post-state custom-input">
											<form action="mail.php" method="post">
												<input type="text" name="subject" placeholder="Post Code" />
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- cart content section end -->
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
        <!-- <script src="js/main.js"></script> -->
    </body>
</html>
