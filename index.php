<?php 
	// session_start(); // Ensure session_start() is called
	// if(!isset($_SESSION['name'])){
		// echo "<script>alert('Login first');window.location.href='login.php'</script>";
		// exit(); // Ensure exit() is called after the redirect to stop further execution
	// }
?>



<!doctype html>
<html class="no-js" lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home one || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- Place favicon.ico in the root directory -->

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css">
		<link rel="stylesheet" href="lib/css/preview.css">
		<!-- slick css -->
		<link rel="stylesheet" href="css/slick.min.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="css/lightbox.min.css">
		<!-- material-design-iconic-font css -->
		<link rel="stylesheet" href="css/material-design-iconic-font.css">
		<!-- All common css of theme -->
		<link rel="stylesheet" href="css/default.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.min.css">
        <!-- shortcode css -->
        <link rel="stylesheet" href="css/shortcode.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
		<script src="js/vendor/modernizr-3.11.2.min.js"></script>
	</head>
	<body>
		<!-- WRAPPER START -->
		<div class="wrapper">

			<!-- Mobile-header-top Start -->
			<div class="mobile-header-top d-block d-md-none">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- header-search-mobile start -->
							<div class="header-search-mobile">
								<div class="table">
									<div class="table-cell">
										<ul>
											<li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
											<li><a href="login.php"><i class="zmdi zmdi-lock"></i></a></li>
											<li><a href="my-account.php"><i class="zmdi zmdi-account"></i></a></li>
											<li><a href="wishlist.php"><i class="zmdi zmdi-favorite"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-search-mobile start -->
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header-top End -->

			<!-- HEADER-AREA START -->
			<?php 
			include "header.php";
			 ?>
			<!-- Mobile-menu end -->
			<!-- SLIDER-BANNER-AREA START -->
			<section class="slider-banner-area clearfix">
				<!-- Sidebar-social-media start -->
				<div class="sidebar-social d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
								<li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
								<li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
								<li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar-social-media start -->
				<div class="banner-left floatleft">
					<!-- Slider-banner start -->
					<div class="slider-banner">
						<div class="single-banner banner-1">
							<a class="banner-thumb" href="#"><img src="img/banner/1.jpg" alt="" /></a>
							<span class="pro-label new-label">new</span>
							<span class="price">$50.00</span>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="#">Product name</a></h2>
								<p class="mb-0">Furniture</p>
							</div>
							<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
						</div>
						<div class="single-banner banner-2">
							<a class="banner-thumb" href="#"><img src="img/banner/2.jpg" alt="" /></a>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="#">New Product 2021</a></h2>
								<p class="hidden-md hidden-sm d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and types sate industry. Lorem Ipsum has been the industry.</p>
								<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
					<!-- Slider-banner end -->
				</div>
				<!--  -->
				<?php include "carousel.php"; ?>
					<!-- Slider-area end -->
				</div>
				<!-- Sidebar-social-media start -->
				<div class="sidebar-account d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>
								<li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
									<div class="customer-login text-left">
										<form action="#">
											<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
											<p class="text-gray">If you have an account with us, Please login!</p>
											<input type="text" name="email" placeholder="Email here..." />
											<input type="password" placeholder="Password" />
											<p><a class="text-gray" href="#">Forget your password?</a></p>
											<button class="button-one submit-button mt-15" data-text="login" type="submit">login</button>
										</form>
									</div>
								</li>
								<li><a href="my-account.php" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
								<li><a href="wishlist.php" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
			</section>
			<!-- End Slider-section -->
			<!-- sidebar-search Start -->
			<div class="sidebar-search animated slideOutUp">
				<div class="table">
					<div class="table-cell">
						<div class="container">
							<div class="row">
								<div class="col-md-8 offset-md-2 p-0">
									<div class="search-form-wrap">
										<button class="close-search"><i class="zmdi zmdi-close"></i></button>
										<form action="#">
											<input type="text" placeholder="Search here..." />
											<button class="search-button" type="submit">
												<i class="zmdi zmdi-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- sidebar-search End -->


			<!-- PRODUCT-AREA START -->
			<?php
			 include "product.php"; 
			 ?>
			<!-- PRODUCT-AREA END -->

			<!-- DISCOUNT-PRODUCT START -->
			<div class="discount-product-area">
				<div class="container">
					<div class="row">
						<div class="discount-product-slider dots-bottom-right">
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/1.jpg" alt="" />
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/2.jpg" alt="" />
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/3.jpg" alt="" />
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="img/discount/4.jpg" alt="" />
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
						</div>
					</div>
				</div>
			</div>
			<!-- DISCOUNT-PRODUCT END -->
			<!-- PURCHASE-ONLINE-AREA START -->
			<?php 
			include "purchase-online.php";
			 ?>
			<!-- PURCHASE-ONLINE-AREA END -->
			<!-- BLGO-AREA START -->
			<?php
			include "blog.php"; 
			 ?>
			<!-- BLGO-AREA END -->
			<!-- SUBSCRIVE-AREA START -->
			<div class="subscribe-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="Enter your email address"/>
									<button class="submit-button submit-btn-2 button-one" data-text="subscribe" type="submit" >subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SUBSCRIVE-AREA END -->
			<!-- FOOTER START -->
			<?php
			include "footer.php"; 
			 ?>
			<!-- FOOTER END -->
			<!-- QUICKVIEW PRODUCT -->
			<?php 
             include "quickview.php";
			 ?>
			<!-- END QUICKVIEW PRODUCT -->

		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
		<!-- jquery latest version -->
		<script src="js/vendor/jquery-3.6.0.min.js"></script>
		<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- jquery.meanmenu js -->
		<script src="js/jquery.meanmenu.js"></script>
		<!-- slick.min js -->
		<script src="js/slick.min.js"></script>
		<!-- jquery.treeview js -->
		<script src="js/jquery.treeview.js"></script>
		<!-- lightbox.min js -->
		<script src="js/lightbox.min.js"></script>
		<!-- jquery-ui js -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- jquery.nivo.slider js -->
		<script src="lib/js/jquery.nivo.slider.js"></script>
		<script src="lib/home.js"></script>
		<!-- jquery.nicescroll.min js -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- countdon.min js -->
		<script src="js/countdon.min.js"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.min.js"></script>
	</body>

</html>
