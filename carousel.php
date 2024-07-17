<?php

	// session_start();

?>

<div class="slider-right floatleft">
					<!-- Slider-area start -->
					<div class="slider-area">
						<div class="bend niceties preview-2">
							<div id="ensign-nivoslider" class="slides">
								<?php
	$conn = mysqli_connect('localhost','root','','hurst') or die();

	$sql = "SELECT * FROM `add_banner`";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		# code...
	foreach ($result as $key => $value) {
		# code...
	
   if($value['id'] == '1'){

   

  
?>
								<img src="<?php echo $value['image']; ?>" alt="" title="#slider-direction-1"/>

								<?php
								}else{
									echo '<img src="'.$value['image'].'" alt="" title="#slider-direction-1" />';
								}
	}
}
								?>

							</div>
							<!-- direction 1 -->
							<div id="slider-direction-1" class="t-cn slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
											</div>
											<?php
											$con = mysqli_connect('localhost','root','','hurst') or die();
											$sq = "SELECT * FROM `add_banner`";
											$query = mysqli_query($con, $sq);

											if($query){
												foreach ($query as $key => $data){
                                                if($data['id'] == '1'){

											
											?>
											<div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
												<h2 class="slider-title1 text-uppercase mb-0"><?php echo $data['brand_name']; ?></h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
												<h4 class="slider-title2 text-uppercase" ><?php echo $data['description']; ?></h4>
											</div>
											<?php
											}else{
												echo '<div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
												<h2 class="slider-title1 text-uppercase mb-0"><?php echo $data["brand_name"]; ?></h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
												<h4 class="slider-title2 text-uppercase" ><?php echo $data["description"]; ?></h4>
											</div>';
												}
												}
											}
											?>
											<div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

			