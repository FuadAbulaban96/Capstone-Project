<?php
// $result1 = mysqli_query($conn,$query1)
include('includes/public_footer.php');

echo'	<section class="home-about-area" id="car_deatil">
			<div class="container-fluid">				
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6 no-padding home-about-left">';
					
echo                  "<img class='img-fluid' src='admin/upload/{$row['model_image']}' alt=''>";
						
echo '				</div>

					<div class="col-lg-6 no-padding home-about-right">';
						
							
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
echo'					
					</div>
				</div>
			</div>	
		</section>

<!-- End home-about Area -->
<!-- Start feature Area -->';
echo'
<section class="feature-area section-gap" id="service_detail">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">';
			echo "
				<h1>What Services we offer to our clients</h1>
				<p>
					Who are in extremely love with eco friendly system.
				</p>";
echo'				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">';
				echo "
					<h4><span class='lnr lnr-user'></span>Expert Technicians</h4>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>";
echo '					
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">';
				echo "
					<h4><span class='lnr lnr-license'></span>Professional Service</h4>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>";								
echo'				
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">';
				echo "
					<h4><span class='lnr lnr-phone'></span>Great Support</h4>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>								
				</div>
			</div>";
echo "
		</div>
	</div>	
</section>";
include('includes/public_footer.php');
?>	
