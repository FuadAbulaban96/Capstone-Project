<?php
	include('includes/public_header.php');
				
?>
<!-- else{$error ="You need to login before start Rent this Car";}
else{echo "<script>window.top.location='book_car.php?model_id=$model_id'</script>";}
else{echo "<script>window.top.location='cars.php'</script>";} -->
<!-- order_id	order_date	return_date	pick_location	pick_address	pick_city	drop_location	drop_address	drop_city	customer_id	model_id -->	
<!-- 
model_id
model_name
model_subname
model_year
passenger_capacity
rent_price
model_desc
cat_id
model_image -->	
<!--

customer_id
name
birth_date
national_id
license_id
email
password
mobile
location
address
city
country	 -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-7 col-md-6 ">
				<h6 class="text-white ">the Royal Essence of Journey</h6>
				<h1 class="text-white text-uppercase">
					Relaxed Journey Ever				
				</h1>
				<p class="pt-20 pb-20 text-white">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			<div class="col-lg-5  col-md-6 header-right">
				<h4 class="text-white pb-30">Book Your Car Today!</h4>
				<form class="form" role="form" autocomplete="off" method="post" id="booking-confirm"  action="confirm.php?model_id=<?php echo $_GET['model_id']?>">
				    <div class="form-group">
				    	<input type="hidden" name="model_id"  value="<?php echo $_GET['model_id']?>">
				       	<div class="default-select" id="default-select">
							<select id="pick-cityid" name="pick_city" required>
								<option value="" disabled selected hidden>Select Pick-up City</option>
								<option value="Tafielah" >Tafielah</option>
								    <option value="Mafraq" >Mafraq</option>
								    <option value="Amman" >Amman</option>
								    <option value="Zarqa" >Zarqa</option>
								    <option value="Irbid" >Irbid</option>
								    <option value="Maan" >Ma'an</option>
								    <option value="Balqa">Balqa</option>
								    <option value="Ajlun" >Ajlun</option>
								    <option value="Aqaba" >Aqaba</option>
								    <option value="Jerash" >Jerash</option>
								    <option value="Madaba" >Madaba</option>
								    <option value="Karak">Karak</option>
							</select>
						</div>
				    </div>
				    <div class="form-group">
				       	<div class="default-select" id="default-select">
							<select class="add-pick-location" name="pick_location" required>
								<option value="" disabled selected hidden>Select Pick-up Location</option>
							</select>
						</div>
				    </div>
				    <div class="from-group">
				    	<input class="form-control txt-field" type="text" name="pick_address" placeholder="Type Pick-up address" required>
				    </div>
				    <div class="switch-wrap d-flex justify-content-left">
						<div class="confirm-checkbox">
							<input type="checkbox" id="confirm-checkbox">
							<label for="confirm-checkbox"></label>
						</div>&nbsp;&nbsp;
						<p class="text-white">Drop-off another Location</p>
					</div>
					<div class="form-group c" hidden>
				       	<div class="default-select" id="default-select">
							<select id="drop-cityid" name="drop_city" >
								<option value="" disabled selected hidden>Select Drop-off City</option>
								<option value="Tafielah" >Tafielah</option>
								    <option value="Mafraq" >Mafraq</option>
								    <option value="Amman" >Amman</option>
								    <option value="Zarqa" >Zarqa</option>
								    <option value="Irbid" >Irbid</option>
								    <option value="Maan" >Ma'an</option>
								    <option value="Balqa">Balqa</option>
								    <option value="Ajlun" >Ajlun</option>
								    <option value="Aqaba" >Aqaba</option>
								    <option value="Jerash" >Jerash</option>
								    <option value="Madaba" >Madaba</option>
								    <option value="Karak">Karak</option>
							</select>
						</div>
				    </div>
				    <div class="form-group l" hidden>
				       	<div class="default-select" id="default-select">
							<select class="add-drop-location" name="drop_location">
								<option value="Select Drop-off Location" disabled selected hidden>Select Drop-off Location</option>
							</select>
						</div>
				    </div>
				    <div class="from-group ad" hidden>
				    	<input class="form-control txt-field" type="text" name="drop_address" placeholder="Type Drop-off address">
				    </div>
				    <div class="form-group">
							<div class="input-group dates-wrap">                                          
								<input id="datepicker" name="order_date" class="dates form-control" id="exampleAmount" placeholder="Pick-up Date" type="text" required>                        
								<div class="input-group-prepend">
									<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
								</div>											
							</div>
				    </div>
				    <div class="form-group ">
							<div class="input-group dates-wrap">                                              
								<input id="datepicker2" name="return_date" class="dates form-control" id="exampleAmount" placeholder="Drop-off Date" type="text" required>                        
								<div class="input-group-prepend">
									<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
								</div>											
							</div>
				    </div>
				    <div class="switch-wrap d-flex justify-content-left">
						<div class="confirm-checkbox t">
							<input type="checkbox" id="confirm-terms" required>
							<label for="confirm-terms"></label>
						</div>
						&nbsp;&nbsp;<ul><a href="Terms_of_Service.php" class="text-warning" data-toggle="modal" data-target=".bd-terms-modal-lg">I Agree Terms of Service</a></ul>
					</div>
												    
				    <div class="form-group row">
				        <div class="col-md-12">
				            <input type="submit" name="rent_car" value="Confirm Car Booking" class="btn btn-default btn-lg btn-block text-center text-uppercase">
				        </div>
				    </div>
				    <?php
						if (isset($errorlog)) {
								echo "<div class='col-md-12'>
										<p class='bg-danger p-2 text-white'>$errorlog</p>
									 </div>";
						}


						if (isset($errorfail)) {
								echo "<div class='col-md-12'>
										<p class='bg-danger p-2 text-white'>$errorfail</p>
									 </div>";
						}

					?>
				</form>
			</div>											
		</div>
	</div>					
</section>
<!-- End banner Area -->
<!-- Start home-about Area -->

<?php include('includes/public_footer.php');?>