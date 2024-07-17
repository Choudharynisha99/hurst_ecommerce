<!doctype html>
<html class="no-js" lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Contact Us || Hurst</title>
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
		<div class="wrapper bg-dark-white">

			<!-- HEADER-AREA START -->
			<?php 
               include "header.php";
			  ?>
			<!-- Mobile-menu end -->
			<!-- HEADING-BANNER START -->
			<div class="heading-banner-area overlay-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="heading-banner-title">
									<h2>Contact Us</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li>Contact Us</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- contact-us-AREA START -->
			<div class="contact-us-area  pt-80 pb-80">
				<div class="container">	
					<div class="contact-us customer-login bg-white">
						<div class="row">
							<div class="col-lg-4 col-md-5">
								<div class="contact-details">
									<h4 class="title-1 title-border text-uppercase mb-30">contact details</h4>
									<ul>
										<li>
											<i class="zmdi zmdi-pin"></i>
											<span>28 Green Tower, Street Name,</span>
											<span>New York City, USA</span>
										</li>
										<li>
											<i class="zmdi zmdi-phone"></i>
											<span>+880 1234 123456</span>
											<span>+880 1234 123456</span>
										</li>
										<li>
											<i class="zmdi zmdi-email"></i>
											<span>company-email@gmail.com</span>
											<span>your-email@gmail.com</span>
										</li>
									</ul>
								</div>
								<div class="send-message mt-60">
									<form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
										<h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
										<input type="text" name="con_name" placeholder="Your name here..." />
										<input type="text" name="con_email" placeholder="Your email here..." />
										<textarea class="custom-textarea" name="con_message" placeholder="Your comment here..."></textarea>
										<button class="button-one submit-button mt-20" data-text="submit message" type="submit">submit message</button>
										<p class="form-message"></p>
									</form>
								</div>
							</div>
							<div class="col-lg-8 col-md-7 mt-xs-30">
								<div class="map-area">
									<div id="googleMap" style="width:100%;height:600px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ABOUT-US-AREA END -->
			<!-- FOOTER START -->
<?php 
include "footer.php"; ?>
			<!-- FOOTER END -->
			
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
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
		
		<script>
			function initialize() {
				var mapOptions = {
					zoom: 10,
					scrollwheel: false,
					center: new google.maps.LatLng( 47.606205, -122.332046 ),
				};
				var map = new google.maps.Map(document.getElementById('googleMap'),
					mapOptions
				);
				var marker = new google.maps.Marker({
					position: map.getCenter(),
					icon: ' ',
					map: map
				});
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<div id="bodyContent">'+
					'<p>New York City Center, </br>Street Name, </br>New York City, USA</p>'+		
					'</div>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
					infowindow.open(map, marker);
	
				var styles = 
				[
					{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"color": "#636363"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.text.stroke",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"color": "#1f1f1f"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [
							{
								"visibility": "off"
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#1F1F1F"
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#1F1F1F"
							}
						]
					},
					{
						"featureType": "landscape",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#2A2A2A"
							},
						]
					},
					{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#2A2A2A"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#2A2A2A"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#2A2A2A"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1a1a1a"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1a1a1a"
							}
						]
					},
					{
						"featureType": "transit",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1a1a1a"
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1F1F1F"
							},
						]
					}
				];

				map.setOptions({styles: styles});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.min.js"></script>
	</body>

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2024 15:49:30 GMT -->
</html>