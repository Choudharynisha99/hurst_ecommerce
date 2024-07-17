<div class="product-area pt-80 pb-35">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Featured Products</h2>
							</div>
							<div class="product-slider style-1 arrow-left-right" >

								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<?php
										$conn = mysqli_connect('localhost','root','','hurst') or die();

										$sql = "SELECT * FROM `add_product`";
										$result = mysqli_query($conn, $sql);
									
										if ($result) {
											# code...
										foreach ($result as $key => $value) {
										?>
										<span class="pro-label new-label"><?php echo $value['new_sale']; ?></span>
										<a href="single-product.php"><img src="<?php echo $value['image'];?>" alt="" /></a>
										<?php
										}
									}
										?>
										<div class="product-action clearfix">
											<a href="wishlist.php" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.php" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
										<?php
											$con = mysqli_connect('localhost','root','','hurst') or die();
											$sq = "SELECT * FROM `add_product`";
											$query = mysqli_query($con, $sq);

											if($query){
												foreach ($query as $key => $data){

											
											?>
											<h4 class="post-title floatleft"><a href="#"><?php echo $data['product_name']; ?></a></h4>
											<p class="floatright hidden-sm d-none d-md-block"><?php echo $data['furniture']; ?></p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ <?php echo $data['price']; ?></span>
											<?php
												}
											}
											?>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								
							
							</div>
						</div>
					</div>
				</div>
			</div>