<header class="header-one header-two header-page">
			<div class="header-top-two">
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-12">
							<div class="middel-top">
								<div class="left floatleft">
									<p><i class="mdi mdi-clock"></i> Mon-Fri : 09:00-19:00</p>
								</div>
							</div>
							<div class="middel-top clearfix">
								<ul class="clearfix right floatright">
									<li>
										<a href="#"><i class="mdi mdi-account"></i></a>
										<ul>
											<li><a href="login.html">Login</a></li>
											<li><a href="login.html">Registar</a></li>
											<li><a href="my-account.html">My account</a></li>
										</ul>
									</li>
									<li>
										<a href="#"><i class="mdi mdi-settings"></i></a>
										<ul>
											<li><a href="my-account.html">My account</a></li>
											<li><a href="cart.html">My cart</a></li>
											<li><a href="wishlist.html">My wishlist</a></li>
											<li><a href="checkout.html">Check out</a></li>
										</ul>
									</li>
								</ul>
								<div class="right floatright">
									<form action="#" method="get">
										<button type="submit"><i class="mdi mdi-magnify"></i></button>
										<input type="text" placeholder="Search within these results..." />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html"><img src="img/logo2.png" alt="Sellshop" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="header-middel">
							<div class="mainmenu">
								<nav>
									<ul>
										<li><a href="index.html">Home</a>
											<ul class="dropdown">
												<li><a href="index.html">Home version one</a></li>
												<li><a href="index-2.html">Home version two</a></li>
											</ul>
										</li>
										<li><a href="shop.php">Shop</a>
											<ul class="magamenu">
                                                <?php 
                                                $product1 = array_rand($products); 
                                                ?>
                                                <li class="banner"><a href="shop.html"><img src="<?= $products[$product1]['Anh'] ?>" alt="" height="170" width = "170" /></a></li>
                                                <?php 
                                                // echo '<pre>'; print_r($product1); echo '</pre>';
                                                $product2 = 'SP01';
                                                while(strcmp($product2, $product1) == 0){
                                                    $product2 = array_rand($products); 
                                                }
                                                ?>
												<li><h5><?= $products[$product1]['TenSp'] ?></h5>
													<!-- <ul>
														<li><a href="#">Price: <?= number_format($products[$product1]['GiaTien']) ?></a></li>
														<li><a href="#">Amount: <?= number_format($products[$product1]['SoLuong']) ?></a></li> -->			
													<!-- </ul>  -->
                                                </li>
                                                <li><h5><?= $products[$product2]['TenSp'] ?></h5>
													<!-- <ul>
														<li><a href="#">Price: <?= number_format($products[$product2]['GiaTien']) ?></a></li>
														<li><a href="#">Amount: <?= number_format($products[$product2]['SoLuong']) ?></a></li> --
													<!-- </ul> -->
												</li>
												
												<li class="banner"><a href="shop.html"><img src="<?= $products[$product2]['Anh'] ?>" alt="" height="170" width = "170" /></a></li>
											</ul>
										</li>
										<li><a href="#">Pages</a>
											<ul class="dropdown">
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="product-grid.html">Product Grid View</a></li>
												<li><a href="product-list.html">Product List View</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="error-404.html">404 page</a></li>
											</ul>
										</li>
										<li><a href="blog.html">Blog</a>
											<ul class="dropdown">
												<li><a href="blog-style-1.html">Blog Style One</a></li>
												<li><a href="blog-style-2.html">Blog Style Two</a></li>
												<li><a href="single-blog.html">Single Blog</a></li>
											</ul>
										</li>
										<li><a href="about.html">About</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>
							</div>
							<!-- mobile menu start -->
							<div class="mobile-menu-area">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul>
											<li><a href="index.html">Home</a>
												<ul class="dropdown">
													<li><a href="index.html">Home version one</a></li>
													<li><a href="index-2.html">Home version two</a></li>
												</ul>
											</li>
											<li><a href="shop.html">Shop</a>
												<ul>
													<li><h5>men’s wear</h5>
														<ul>
															<li><a href="#">Shirts & Top</a></li>
															<li><a href="#">Shoes</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shemwear</a></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Sweaters</a></li>
															<li><a href="#">Jacket</a></li>
															<li><a href="#">Men Watch</a></li>
														</ul>
													</li>
													<li><h5>women’s wear</h5>
														<ul>
															<li><a href="#">Shirts & Tops</a></li>
															<li><a href="#">Shoes</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Shemwear</a></li>
															<li><a href="#">Jeans</a></li>
															<li><a href="#">Sweaters</a></li>
															<li><a href="#">Jacket</a></li>
															<li><a href="#">Women Watch</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Pages</a>
												<ul>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="cart.html">Cart</a></li>
													<li><a href="product-grid.html">Product Grid View</a></li>
													<li><a href="product-list.html">Product List View</a></li>
													<li><a href="single-product.html">Single Product</a></li>
													<li><a href="error-404.html">404 page</a></li>
												</ul>
											</li>
											<li><a href="blog.html">Blog</a>
												<ul>
													<li><a href="blog-style-1.html">Blog Style One</a></li>
													<li><a href="blog-style-2.html">Blog Style Two</a></li>
													<li><a href="single-blog.html">Single Blog</a></li>
												</ul>
											</li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cart-itmes">
							<a class="cart-itme-a" href="cart1.php">
								<i class="mdi mdi-cart"></i>
								<strong><?= count($_SESSION['cart']) ?> items </strong>
							</a>
							<div class="cartdrop">
								<?php 
									$sum_amount = 0;
									foreach($_SESSION['cart'] as $product) {
									$sum_amount += ($product['GiaTien']*$product['SoLuong']);
									?>
								<div class="sin-itme clearfix">
									<i class="mdi mdi-close"></i>
									<a class="cart-img" href="cart1.php"><img src="<?= $product['Anh'] ?>" alt="" /></a>
									<div class="menu-cart-text">
										<a href="#"><h5><?= $product['TenSp'] ?></h5></a>
										<strong><?= number_format($product['GiaTien']) ?></strong>
									</div>
								</div>
								<? } ?>
								<div class="total">
									<span>total <strong>= <?= number_format($sum_amount) ?></strong></span>
								</div>
								<a class="goto" href="cart1.php">go to cart</a>
								<a class="out-menu" href="checkout.html">Check out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>