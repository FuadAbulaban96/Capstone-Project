<?php
include('includes/public_header.php');

if (isset($_GET['model_id'])) {
		
		$model_id=$_GET['model_id'];
		
			if ((isset($_POST['rent_car']) && isset($_SESSION['customer_id'])) || ((!isset($_POST['rent_car']) && isset($_SESSION['customer_id']))) ) {

				if (isset($_POST['rent_car'])){

			    	if (isset($_POST['drop_location']) || isset($_POST['drop_city']) ) {
			    		
			    		$pick_city      = $_POST['pick_city'];
			    		$pick_location  = $_POST['pick_location'];
			    		$pick_address   = $_POST['pick_address'];
			    		$drop_city      = $_POST['drop_city'];
			    		$drop_location  = $_POST['drop_location'];
			    		$drop_address   = $_POST['drop_address'];											
			    		$order_date     = $_POST['order_date'];
			    		$return_date    = $_POST['return_date'];

			    		$query2 = "INSERT INTO orders (order_date,return_date,pick_location,pick_address,pick_city,drop_location,drop_address,drop_city,	customer_id,model_id) VALUES ('$order_date','$return_date','$pick_location','$pick_address','$pick_city','$drop_location','$drop_address','$drop_city','{$_SESSION['customer_id']}','$model_id')";
			    		if($result2 = mysqli_query($conn,$query2)){

							echo "<script>window.top.location='test.php#booking-confirm'</script>";
						}

			    	}else{
			    		$pick_city      = $_POST['pick_city'];
			    		$pick_location  = $_POST['pick_location'];
			    		$pick_address   = $_POST['pick_address'];
			    		$drop_city      = "At";
			    		$drop_location  = "The Same";
			    		$drop_address   = "Place";
			    		$order_date     = $_POST['order_date'];
			    		$return_date    = $_POST['return_date'];

			    		$query3 = "INSERT INTO orders (order_date,return_date,pick_location,pick_address,pick_city,drop_location,drop_address,drop_city,	customer_id,model_id) VALUES ('$order_date','$return_date','$pick_location','$pick_address','$pick_city','$drop_location','$drop_address','$drop_city','{$_SESSION['customer_id']}','$model_id')";
			    		
			    		if($result3 = mysqli_query($conn,$query3)){

							echo "<script>window.top.location='test.php#booking-confirm'</script>";
						}
						else{$errorfail="wroooooooooong";}
			    	}	
				}

			}else{$errorlog ="You need to login before start Rent this Car";}

	}else{echo "<script>window.top.location='cars.php'</script>";} 
		    

// $result1 = mysqli_query($conn,$query1)
$query  = " SELECT  * FROM customer_id WHERE customer_id = '{$_SESSION['customer_id']}'";
$result     = mysqli_query($conn,$query);
$row        = mysqli_fetch_assoc($result);

$query2  = " SELECT  * FROM model WHERE model_id = {$_GET['model_id']}";
$result2     = mysqli_query($conn,$query2);
$row2      = mysqli_fetch_assoc($result2);
echo'
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">';
								
						echo $row2['model_name']  ." ". $row2['model_subname'] . " " . $row2['model_year'];				
						echo '</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
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
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="text-uppercase primary-btn" href="#">get details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->';	

echo'	<section class="home-about-area" id="car_deatil">
			<div class="container-fluid">				
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6 no-padding home-about-left">';
					
echo                  "<img class='img-fluid' src='admin/upload/{$row['model_image']}' alt=''>";
						
echo '				</div>

					<div class="col-lg-6 no-padding home-about-right">';
						
							
							echo "	<h1> {$row2['model_name']} {$row2['model_subname']}<br>
									by {$row2['cat_name']}</h1>";
							echo "	<p>
										<span>
									    	{$row2['model_desc']}
										</span>
									</p>";	
			 				echo '	<b class="text-dark">';
							echo "		Rent Price 		 : {$row2['rent_price']} JD/day <br>
										Capacity         : {$row2['passenger_capacity']} <br>
										Doors            : 04 <br>
										Model Year       : {$row2['model_year']} <br>
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

<script>
// Set the date we're counting down to
var countDownDate = new Date("2020-01-24").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days    = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours   = Math.floor(((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))+1);
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
