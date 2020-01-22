<?php 
	include('includes/public_header.php');
	if (!isset($_GET['model_id'])) {
		echo "<script> window.location.top='cars.php'</script>";
     	
	}else{
		$query  = "SELECT * FROM model INNER JOIN category on model.cat_id=category.cat_id WHERE model_id = {$_GET['model_id']}"; 
		$result = mysqli_query($conn,$query);
		$row    = mysqli_fetch_assoc($result);
	}
	
?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					<?php
						echo $row['model_name'] . " " . $row['model_subname'] . " " . $row['model_year'];
					?>
				</h1>	
				<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.php">Model</a></p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start home-about Area -->
<section class="home-about-area" id="about">
	<div class="container-fluid">				
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 no-padding home-about-left">
			<?php
				echo "<img class='img-fluid' src='admin/upload/{$row['model_image']}' alt=''>";
			?>	
			</div>

			<div class="col-lg-6 no-padding home-about-right">
				<?php
					
					echo "	<h1> {$row['model_name']} {$row['model_subname']}<br>
							by {$row['cat_name']}</h1>";
					echo "	<p>
								<span>
							    	{$row['model_desc']}
								</span>
							</p>";	
	 				echo '	<b class="text-dark">';
					echo "		Rent Price 		 : {$row['rent_price']} JD/day <br>
								Capacity         : {$row['passenger_capacity']} <br>
								Doors            : 04 <br>
								Model Year       : {$row['model_year']} <br>
								Air Condition    : Dual Zone <br>
								Transmission     : Automatic";
					echo '	</b>';
					echo "	<br><br><a class='text-uppercase primary-btn' href='book_car.php?model_id={$row['model_id']}'>Book This Car Now</a>";
				?>
			</div>
		</div>
	</div>	
</section>
<!-- End home-about Area -->	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="service">
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
<!-- End feature Area -->				

<!-- Start fact Area -->
<section class="facts-area section-gap" id="facts-area">
	<div class="container">
		<div class="row">
			<div class="col single-fact">
				<h1 class="counter">2536</h1>
				<p>Projects Completed</p>
			</div>
			<div class="col single-fact">
				<h1 class="counter">6784</h1>
				<p>Really Happy Clients</p>
			</div>
			<div class="col single-fact">
				<h1 class="counter">1059</h1>
				<p>Total Tasks Completed</p>
			</div>
			<div class="col single-fact">
				<h1 class="counter">2239</h1>
				<p>Cups of Coffee Taken</p>
			</div>	
			<div class="col single-fact">
				<h1 class="counter">435</h1>
				<p>In House Professionals</p>
			</div>												
		</div>
	</div>	
</section>
<!-- end fact Area -->							

<!-- Start reviews Area -->
<section class="reviews-area section-gap" id="review">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text text-center">
				<h1>Some Features that Made us Unique</h1>
				<p class="mb-10 text-center">
					Who are in extremely love with eco friendly system.
				</p>
			</div>
		</div>					
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Cody Hines</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Chad Herrera</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Andre Gonzalez</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>							
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Jon Banks</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Landon Houston</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Nelle Wade</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>												
		</div>
	</div>	
</section>
<!-- End reviews Area -->

<?php
	include('includes/public_footer.php');
?>