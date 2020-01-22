<?php include('includes/public_header.php');?>


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12 col-md-12 ">
							<h6 class="text-white ">the Royal Essence of Journey</h6>
							<h1 class="text-white text-uppercase">
								Relaxed Journey Ever				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<!-- Start model Area -->
			<section class="model-area section-gap mt-0" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Choose your Desired Car Category</h1>
							<p class="text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>				
					<div class="active-model-carusel">
						<?php
							$GLOBALS["category_number"]=0;
							$GLOBALS["modelnumber"]=0;
		                	$query  = " SELECT * FROM category ";
		                	$result = mysqli_query($conn,$query);
		                	while ($row = mysqli_fetch_assoc($result)) {
		                		
		                		$images = $row["cat_image"];

								echo "<div class='row align-items-center single-model item'>
										<div class='col-lg-6 model-left'>
											<div class='title justify-content-between d-flex'>";
								echo			"<h4 class='mt-20'>{$row['cat_name']}</h4>
												 <h2>{$row['model_number']}<span> Cars</span></h2>
											</div>";
								echo 		"<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											</p>";
								echo 		"<p class='text-dark'>
												<span class='text-success font-weight-bold'>✓</span> Pay at Pick-Up	<br>
												<span class='text-success font-weight-bold'>✓</span> Free cancellation <br>
												<span class='text-success font-weight-bold'>✓</span> Unlimited mileage <br>
												<span class='text-success font-weight-bold'>✓</span> Order your car Before one hour

											</p>";
								echo 		"<a class='text-uppercase primary-btn' href='cars.php?cat_id={$row['cat_id']}'>View Car Models</a>";
								echo	"</div>";
								echo	"<div class='col-lg-6 model-right'>";
								echo 		"<img class='img-fluid' src='admin/upload/{$images}' alt=''>";
								echo	"</div>
									</div>";
								$GLOBALS["category_number"]++;
								$GLOBALS["modelnumber"]+= $row['model_number'];	
								
							}
						?>												
					</div>
				</div>	
			</section>
			<!-- End model Area -->
			<section class="feature-area section-gap mb-0" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>What Services we offer to our clients</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>

			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">
					<div class="row text-center">
					<?php
				  		echo "<div class='col-md-4 single-fact'>
								<h1 class='counter'>{$GLOBALS["category_number"]}</h1>
								<h4>Categories</h4>
						      </div>";

						echo "<div class='col-md-4 single-fact'>
								<h1 class='counter'>{$GLOBALS["modelnumber"]}</h1>
								<h4>Models</h4>
						      </div>";   

						echo "<div class='col-md-4 single-fact'>
								<h1 class='counter'>17</h1>
								<h4>Brands</h4>
						      </div>";          
						
					?>
																		
					</div>
				</div>	
			</section>
			<!-- end fact Area -->							
			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->
			<!-- Start reviews Area -->
			<section class="reviews-area section-gap" id="review">
				<div class="">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text text-center">
							<h1>Car Brands we offer to our clients</h1>
							<p class="mb-10 text-center">
								We love to meet your needs with the latest models.
							</p>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-2 col-md-2 text-center mt-2"></div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/mercedes-logo.png" class="img-fluid">
							<h5 class="pt-2">Mercedes Benz</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/bmw-logo.png" class="img-fluid">
							<h5 class="pt-2">BMW</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/jeep-logo.png" class="img-fluid">
							<h5 class="pt-2">Jeep</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/ford-logo.png" class="img-fluid">
							<h5 class="pt-2">Ford</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/gmc-logo.png" class="img-fluid">
							<h5 class="pt-2">GMC</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/chevrolet-logo.png" class="img-fluid">
							<h5 class="pt-2">Chevrolet</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/infiniti-logo.png" class="img-fluid">
							<h5 class="pt-2">Infiniti</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/mazda-logo.png" class="img-fluid">
							<h5 class="pt-2">Mazda</h5>
						</div>
						<div class="col-lg-2 col-md-2 text-center mt-2"></div>
						<div class="col-lg-2 col-md-2 text-center mt-2"></div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/toyota-logo.png" class="img-fluid">
							<h5 class="pt-2">Toyota</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/nissan-logo.png" class="img-fluid">
							<h5 class="pt-2">Nissan</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/mitsubishi-logo.png" class="img-fluid">
							<h5 class="pt-2">Mitsubishi</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/peugeot-logo.png" class="img-fluid">
							<h5 class="pt-2">Peugeot</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/renault-logo.png" class="img-fluid">
							<h5 class="pt-2">Renault</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/citroen-logo.png" class="img-fluid">
							<h5 class="pt-2">Citroen</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/hyundai-logo.png" class="img-fluid">
							<h5 class="pt-2">Hyundai</h5>
						</div>
						<div class="col-lg-1 col-md-1 text-center mt-2">
							<img src="img/logo/kia-logo.png" class="img-fluid">
							<h5 class="pt-2">Kia</h5>
						</div>
						<div class="col-lg-2 col-md-2 text-center mt-2"></div>
						<div class="col-lg-4 col-md-4 text-center mt-2"></div>
						<div class="col-lg-4 col-md-4 text-center mt-2 row">
							<div class="col-lg-4 col-md-4 text-center mt-2"></div>

							<div class="col-lg-4 col-md-4 text-center mt-2">
								<img src="img/logo/opel-logo.png" class="img-fluid">
								<h5 class="pt-2">Opel</h5>
							</div>

							<div class="col-lg-4 col-md-4 text-center mt-2"></div>
						</div>
						<div class="col-lg-4 col-md-4 text-center mt-2"></div>	
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
			

			

<?php include('includes/public_footer.php');?>