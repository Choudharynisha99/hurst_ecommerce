<?php
session_start();
?>
<header id="sticky-menu" class="header">
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<span class="text-uppercase text-md-center">Hey! <?php echo $_SESSION['name']; ?></span>
								<div class="mini-cart text-end">
									<ul>
										<li>
											<a class="cart-icon" href="#">
												<i class="zmdi zmdi-shopping-cart"></i>
												<span>3</span>
											</a>
											<div class="mini-cart-brief text-left">
												<div class="cart-items">
													<p class="mb-0">You have <span>03 items</span> in your shopping bag</p>
												</div>

													<?php
												$cont = mysqli_connect("localhost", "root", "", "hurst") or die();
												$sqll = "SELECT * FROM `add_product`";
										        $show = mysqli_query($cont, $sqll);
												if($show){
													foreach ($show as $key => $val) {
														# code...
													
												
												?>
												<div class="all-cart-product clearfix">
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="<?php echo $val['image'];?>" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#"><?php echo $val['product_name'];?></a></h5>
															<p class="mb-0">Price : $ <?php echo $val['price'];?></p>
															<p class="mb-0">Qty : 02 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
													
												</div>
                                                 <?php
												 }
												}
												 ?>

												<div class="cart-totals">
													<h5 class="mb-0">Total <span class="floatright">$500.00</span></h5>
												</div>
												<div class="cart-bottom  clearfix">
													<a href="cart.php" class="button-one floatleft text-uppercase" data-text="View cart">View cart</a>
													<a href="checkout.php" class="button-one floatright text-uppercase" data-text="Check out">Check out</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MAIN-MENU START -->
				<div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="main-menu  d-none d-md-block">
					<nav>
						
						<ul>
							<li><a href="index.php">home</a>
								<!-- <div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="index.php">Home Version 1</a></li>
										<li><a href="index-2.php">Home Version 2</a></li>
									</ul>
								</div> -->
							</li>
							<li><a href="shop.php">add here</a>
								<div class="mega-menu menu-scroll">
									<div class="table">
										<div class="table-cell">
											<div class="half-width">
												<ul>
													<li class="menu-title">add products here</li>
													<li><a href="product_form.php">add products</a></li>
									
												</ul>
											</div>
											<div class="half-width">
												<ul>
													<li class="menu-title">add banner here</li>
													<li><a href="carousel_form.php">add banner</a></li>
													
												</ul>
											</div>
											<div class="full-width">
												<div class="mega-menu-img">
													<a href="single-product.php"><img src="img/megamenu/1.jpg" alt="" /></a>
												</div>
											</div>
											<div class="pb-80"></div>
										</div>
									</div>
								</div>
							</li>
                           
							<!-- <li><a href="shop-sidebar.php">accesories</a></li> -->
							<!-- <li><a href="shop-list.php">lookbook</a></li> -->
							<!-- <li><a href="blog.php">blog</a></li> -->
							<li><a href="cart.php">Shopping Cart</a></li>
										<li><a href="wishlist.php">Wishlist</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="order.php">Order</a></li>
										<li><a href="login.php">login / Registration</a></li>
										<li><a href="my-account.php">My Account</a></li>
							<li><a href="about.php">about us</a></li>
							<li><a href="contact.php">contact</a></li>
							<li><a href="sign-out.php">sign out</a></li>

						</ul>
					</nav>
				</div>
				<!-- MAIN-MENU END -->
			</header>



			<!-- HEADER-AREA END -->



			<!-- Mobile-menu start -->
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.php">home</a>
											
										</li>
										<li><a href="shop.php">products</a></li>
										<li><a href="cart.php">Shopping Cart</a></li>
												<li><a href="wishlist.php">Wishlist</a></li>
												<li><a href="checkout.php">Checkout</a></li>
												<li><a href="order.php">Order</a></li>
												<li><a href="login.php">login / Registration</a></li>
												<li><a href="my-account.php">My Account</a></li>
										<!-- <li><a href="shop-sidebar.php">accesories</a></li> -->
										<!-- <li><a href="shop-list.php">lookbook</a></li> -->
										<!-- <li><a href="blog.php">blog</a></li> -->
										<li><a href="about.php">about us</a></li>
										<li><a href="contact.php">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php 
			 ?>