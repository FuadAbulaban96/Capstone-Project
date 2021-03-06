<!-- Large modal -->		
<script type="text/javascript">
	  $(document).ready(function()
	    {
	      $("#cityid").change(function()
	        {
	          //get selected parent option 
	          var city = $("#cityid").val();
	          $.ajax(
	          {
	            type: "get",
	            url: "ajax/city.php?city=" + city,
	            success: function(data)
	            {
	              $(".add-location").html(data);
	            }
	        });
	      });

	      $("#pick-cityid").change(function()
	        {
	          //get selected parent option 
	          var pick_city = $("#pick-cityid").val();
	          $.ajax(
	          {
	            type: "get",
	            url: "ajax/pick_city.php?pick_city=" + pick_city,
	            success: function(data)
	            {
	              $(".add-pick-location").html(data);
	            }
	        });
	      });
	      $("#drop-cityid").change(function()
	        {
	          //get selected parent option 
	          var drop_city = $("#drop-cityid").val();
	          $.ajax(
	          {
	            type: "get",
	            url: "ajax/drop_city.php?drop_city=" + drop_city,
	            success: function(data)
	            {
	              $(".add-drop-location").html(data);
	            }
	        });
	      });
	      
		     $("#confirm-checkbox").change(function()
		       {
		       	var n = $( "input:checked#confirm-checkbox").length;
		       	if (n!=0) {
			        
			        $(".c").removeAttr("hidden");
			        $(".l").removeAttr("hidden");
			        $(".ad").removeAttr("hidden");
		       }else{
		  			$(".c").attr("hidden","hidden");
			        $(".l").attr("hidden","hidden");
			        $(".ad").attr("hidden","hidden");
		       }
		   });
    });
</script>		
<?php
if (!isset($_SESSION['customer_id'])) {
echo'		
<div class="modal bd-signup-modal-lg"  aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="section-top-border mb-0 pb-0 pt-3">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<form method="post">
								<!-- customer_id	name	birth_date	national_id	license_id	email	password	mobile	location	address	city	country -->

								<div class="mt-10">
									<input type="text" name="name" placeholder="Full Name"  required class="single-input-primary">
								</div>
								<div class="mt-10">
										<input id="datepicker3" name="birth_date" required class="dates form-control single-input-primary" id="exampleAmount" placeholder="Birth-day Date" type="text">                        
						    	</div>
								<div class="mt-10">
									<input type="text" name="national_id" placeholder="National ID"  required class="single-input-primary">
								</div>
								<div class="mt-10">
									<input type="text" name="license_id" placeholder="License ID"  required class="single-input-primary">
								</div>
								<div class="mt-10">
									<input type="email" name="email" placeholder="Email address"  required class="single-input-primary">
								</div>
								<div class="mt-10">
									<input type="telephone" name="mobile" placeholder="Mobile"  required class="single-input-primary">
								</div>								
								<div class="mt-10">
									<input type="password" name="password" placeholder="Password"  required class="single-input-primary">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select">
									
										<select name="country" class="cities">
										    <option value="Jordan" selected>Jordan</option>
										</select>
									</div>
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select">		
										<select name="city" class="states" id="cityid">
										    <option value="" selected="" disabled="">Select City</option>
											    <option value="Tafielah" >Tafielah</option>
											    <option value="Mafraq" >Mafraq</option>
											    <option value="Amman" >Amman</option>
											    <option value="Zarqa" >Zarqa</option>
											    <option value="Irbid" >Irbid</option>
											    <option value="Maan" >Maan</option>
											    <option value="Balqa">Balqa</option>
											    <option value="Ajlun" >Ajlun</option>
											    <option value="Aqaba" >Aqaba</option>
											    <option value="Jerash" >Jerash</option>
											    <option value="Madaba" >Madaba</option>
											    <option value="Karak">Karak</option>
										</select>
									</div>
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
									<div class="form-select">		
										<select name="location" class="states add-location">
											
										</select>
									</div>
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
									<input type="text" name="address" placeholder="Address"  required class="single-input">
								</div>		
								<div class="mt-10">
									<button type="submit" name="signup" class="btn btn-success btn-block" >Signup</button>
								</div>
							</form>
						</div>
						<div class="modal-footer m-0 col-12">
							<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bd-login-modal-lg">Login</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';}
?>

<?php
if (!isset($_SESSION['customer_id'])) {
echo'
<div class="modal fade bd-login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="section-top-border mb-0 pb-0 pt-3">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<form method="post">

								<div class="mt-10">
									<input type="email" name="email" placeholder="Email address"  required class="single-input">
								</div>					
								<div class="mt-10">
									<input type="password" name="password" placeholder="Password"  required class="single-input-primary">
								</div>';	
								
								if (isset($error)) {
								echo "<div class='mt-10'>
										<p class='bg-danger p-2 text-white'>$error</p>
									 </div>";}
								
								echo'
								<div class="mt-10">
									<button type="submit" name="login" class="btn btn-success btn-block" >Login</button>
								</div>
							</form>
						</div>
						<div class="modal-footer m-0 col-12">
							<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bd-signup-modal-lg">Signup</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';}
?>

<!-- Start Terms of Use-->
<div class="modal fade bd-terms-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Terms of Service</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="section-top-border mb-0 pb-0 pt-3">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<form method="post">

								<div class="section page">
                    			<!-- InstanceBeginEditable name="page" -->
						            <h1>Terms and Conditions of Rental Agreement</h1>
									<h2>Which limit your rights - please read carefully</h2>

									<hr>

									<h3>1. DEFINITIONS</h3>
									<p>In this AGREEMENT, unless the context indicates otherwise, the following expressions will bear the following meanings:
									    <br>1.1 "FCR", "OUR", "US" and "WE" means CMH CAR HIRE (PTY) LTD, trading as CAR RENTALS JOURNEY;
									    <br>1.2 "the RENTER", "YOU" or "YOUR" means the renter of the VEHICLE, as indicated in the AGREEMENT and who must be 23 years old or older and who must have held a valid unendorsed driver's license for a minimum period of 2 years prior to the AGREEMENT;
									    <br>1.3 "The DRIVER" means YOU and/or the driver and/or the ADDITIONAL DRIVER as indicated in the AGREEMENT and who must be 23 years old or older and who must have held a valid unendorsed driver's license for a minimum period of 2 years prior to the AGREEMENT;
									    <br>1.4 "DAY" means a period of 24 hours (or any part thereof) calculated from the time the vehicle is received by YOU;
									    <br>1.5 "the VEHICLE" means the VEHICLE/s identified in this AGREEMENT or any other replacement vehicle provided to YOU by US (including the VEHICLE documents, keys, tyres, tools and accessories supplied with the VEHICLE);
									    <br>1.6 "the RENTAL PERIOD" means the period between the date when the vehicle is taken out by YOU and the termination date and time as specified on the AGREEMENT or, if such period is extended, the time and date entered on OUR records as being the date and time when the VEHICLE is returned to US;
									    <br>1.7 "The OFFICIAL RATES" means OUR rates charged from time to time and/or in terms of the official rates published and amended from time to time, applicable to the VEHICLE rented in terms of this AGREEMENT, and which are available at any of OUR offices;
									    <br>1.8 "the LIABILITY WAIVERS" means the waivers referred to in clause 5, including but not limited to, the items identified as CDW, SCDW, TLW and STLW, but which specifically exclude any key replacement and the loss of personal belongings. The LIABILITY WAIVERS are not an insurance policy but provide a basis on which YOUR liability in terms of this AGREEMENT may be reduced.
									    <br>1.9 "AGREEMENT" means the rental agreement and these terms and conditions.
									    <br>1.10 References to the singular will include the plural, the male gender will include the female gender, and references to persons will include natural and juristic persons.</p>

									<h3>2. RISK, DELIVERY AND RETURN</h3>
									<p>2.1 The VEHICLE will be at YOUR sole risk from the date and time of delivery of the VEHICLE until the VEHICLE is returned to US. YOU undertake to return the VEHICLE in the same condition that YOU received it, fair wear and tear excepted;
									    <br>2.2 YOU will return the VEHICLE, on the expiry or termination of this AGREEMENT, at YOUR expense to our authorised representative at the collection address recorded in the AGREEMENT. YOU acknowledge that failure to return the VEHICLE in terms of this AGREEMENT will constitute a breach of the AGREEMENT and illegal possession by YOU, and WE may report the VEHICLE as stolen and/or repossess the VEHICLE wherever same may be found and from whomsoever is in possession thereof;
									    <br>2.3 When YOU or any person nominated by YOU return the VEHICLE to any branch of FCR, YOU will:
									    <br>2.3.1 Park the VEHICLE in FCR's reserved parking;
									    <br>2.3.2 Ensure that the VEHICLE is properly locked and secure;
									    <br>2.3.3 Hand the keys of the VEHICLE to an authorised representative of FCR when FCR's offices are open for business;
									    <br>2.3.4 Leave the keys in a drop safe provided at the offices of FCR when FCR's offices are not open for business.
									    <br>2.4 The sole risk of loss or damage to the VEHICLE will remain vested in YOU until such time as WE have recorded the return of the VEHICLE.</p>

									<h3>3. WARRANTIES BY YOU</h3>
									<p>YOU warrant that:
									    <br>3.1 All information given by YOU to US is true and correct;
									    <br>3.2 The DRIVER holds a valid unendorsed DRIVER's license for the VEHICLE;
									    <br>3.3 YOU will not drive the VEHICLE under the influence of alcohol or any other central nervous system stimulant;
									    <br>3.4 The DRIVER is not physically prevented from operating the VEHICLE safely;
									    <br>3.5 No person other than the DRIVER will drive the VEHICLE;
									    <br>3.6 The DRIVER will lock the VEHICLE and activate any burglar alarm or protection system installed in the VEHICLE when same is not in use and ensures that the keys of the VEHICLE are properly controlled;
									    <br>3.7 the VEHICLE will not be used or driven for the conveyance of persons or property for reward, in contravention of or in breach of any law, in any race, speed test or contest, on roads not properly constructed, or for towing unless supplied with a tow bar;
									    <br>3.8 The VEHICLE will not be used or driven in any way which would constitute a breach of any of the provisions of this AGREEMENT;
									    <br>3.9 YOU and the DRIVER will at all times display an absolute duty of care towards FCR in respect of the VEHICLE, and YOU will ensure that the VEHICLE will only be used on suitable roads and conditions in accordance with the type of VEHICLE hereby rented;
									    <br>3.10 YOU and the DRIVER will not take the VEHICLE into any area or on any road where there is a risk that the VEHICLE may be damaged, stolen or lost through civil disturbance, riot or any act of political unrest;
									    <br>3.11 The VEHICLE will not be taken outside the Republic of South Africa, except with OUR prior written permission. The cross border letter provided by US will provide YOU with authorisation to cross the relevant border and WE will not be held responsible for any fee/or other costs/payments howsoever incurred by YOU crossing the border.</p>

									<h3>4. PAYMENTS</h3>
									<p>4.1 YOU agree to pay US:
									    <br>4.1.1 The VEHICLE rental rates, cross border fees per border and other charges as set out in the AGREEMENT and/or in terms of our OFFICIAL RATES, whichever may be applicable;
									    <br>4.1.2 A refuelling fee and the cost of fuel supplied for the VEHICLE by US which cost will be calculated upon return of the VEHICLE. If the VEHICLE is delivered to, or collected from YOU, YOU will be charged for fuel used from the time it leaves the dispatching branch to the time it is returned to the returning branch;
									    <br>4.1.3 all fines, taxes, charges, levies, legal costs and tolls, including e-tolls, payable by US to any third party arising out of YOUR use of the VEHICLE;
									    <br>4.1.4 all and any costs, including but not limited to, one-way fees, towing charges and losses or damages incurred by US in procuring the return of the VEHICLE to the collection address described above, or such other location as determined by US;
									    <br>4.1.5 In the event that the VEHICLE is not returned on the return date, all amounts that would have been payable by YOU in terms of this AGREEMENT if the RENTAL PERIOD had been validly extended to the actual date of return of the VEHICLE to US;
									    <br>4.1.6 all costs for which YOU are liable, incurred by US in repairing any damage of any nature whatsoever to the VEHICLE and any loss or damages suffered by US as a result of theft, fire or any other cause whatsoever;
									    <br>4.1.7 Such valet charge as may be levied for the cleaning of the VEHICLE; and
									    <br>4.1.8 Such accident administration and/or traffic fine handling fee that may be levied by US.
									    <br>4.2 If WE have agreed to payment from YOU by credit or charge card, YOUR signature will constitute authority for the issuer of the card to debit YOU with the total amount owing, inclusive of all costs and charges of whatsoever nature, arising in terms of this AGREEMENT.
									    <br>4.3 YOU will pay all amounts payable by YOU under this AGREEMENT to US, on demand. If any payment is not made on its due date, then WE may, without prejudice to any of OUR rights, charge interest on the amount due at the maximum rate permissible by law.</p>

									<h3>5. LIABILITY WAIVERS</h3>
									<p>5.1 YOU may purchase in advance a collision damages waiver (CDW) and/or theft loss waiver (TLW) or a super waiver ("SCDW/STLW"), or such LIABILITY WAIVERS may be included in the OFFICIAL RATES recorded in clause 4.1.1.
									    <br>5.2 In such event, YOUR liability in terms of clause 2.1 will not exceed the amount stated in the AGREEMENT as the "Renter's Responsibility", unless one or more of the exclusions in clause 5.3 is applicable.
									    <br>5.3 The LIABILITY WAIVERS do not cover loss of, or damage to the VEHICLE in the following circumstances, and YOU will be liable for all such loss or damage:
									    <br>5.3.1 Where YOU or the DRIVER are in breach of this AGREEMENT;
									    <br>5.3.2 Where damage is caused to all glass, mirrors, lamps, tyres, rims, hubcaps, windscreens or the undercarriage, if no collision of the VEHICLE has occurred;
									    <br>5.3.3 Where damage is caused by water;
									    <br>5.3.4 Where damage or loss is caused by DRIVER negligence;
									    <br>5.3.5 Where damage or loss is sustained in an accident not caused by physical contact with another vehicle, person, animal or object;
									    <br>5.3.6 Where damage is caused by YOUR failure to ensure that the VEHICLE's required lubricant levels are maintained;
									    <br>5.3.7 Where damage or loss is caused by pot holes, sand or travelling on gravel roads; and
									    <br>5.3.8 In respect of personal belongings, key replacement, towing fees and claim administration fees.
									    <br>5.4 YOU may not decline the LIABILITY WAIVERS offered by US unless:
									    <br>5.4.1 There is a valid corporate account opened in YOUR name; and
									    <br>5.4.2 YOU have signed OUR "Self Insurance Agreement"; and
									    <br>5.4.3 YOU have provided US with written proof from YOUR insurers that all vehicles rented are comprehensively insured.
									    <br>5.5 Subject to our consent, you may, in addition to the LIABILITY WAIVERS, purchase in advance a windscreen and/or tyre waiver. These additional waivers only cover damages to viewing glass caused by stone chips, and tyres, rims and hubcaps caused by potholes and does not cover theft of the said items.</p>

									<h3>6. EXTENSION OF RENTAL PERIOD</h3>
									<p>6.1 YOU will be entitled at any time during the initial period to orally extend the RENTAL PERIOD.
									    <br>6.2 This extension will however only be valid if confirmed by US in writing.</p>

									<h3>7. TERMINATION</h3>
									<p>7.1 WE will be entitled to terminate this AGREEMENT if YOU and/or the DRIVER commit any breach of this AGREEMENT. WE will then be entitled to the immediate return of the VEHICLE, and furthermore any amount then and there owing by YOU to US will become immediately due and payable.
									    <br>7.2 Both YOUR and OUR rights and obligations under this AGREEMENT will continue to be in full force and effect until such time as the VEHICLE has been returned to US in terms of this AGREEMENT and YOU have complied with all YOUR obligations in terms hereof.</p>

									<h3>8. INDEMNITY</h3>
									<p>8.1 Save as is provided for in law and provided that there was no negligence on OUR part, WE will not be liable for any damage and/or injury and/or death arising out of any defect in and/or mechanical failure of the VEHICLE, nor for any loss or damages to any property transported in or left in the VEHICLE, nor for any damages, injury, death, consequential loss, loss of profits, or any other damages which the RENTER or the DRIVER or any person transported in the VEHICLE may suffer arising out of this AGREEMENT.</p>

									<h3>9. RESPONSIBILITY AFTER LOSS OR DAMAGE TO VEHICLE</h3>
									<p>9.1 If the VEHICLE is involved in any accident or collision, or is lost or stolen, or is involved in any incident, which could prejudice OUR rights, the RENTER and/or DRIVER will take all such steps to safeguard OUR interests, including, but not limited to the following where appropriate:
									    <br>9.1.1 Obtain the names and addresses of everyone involved and of possible witnesses, and details of other vehicles involved;
									    <br>9.1.2 Not, without our prior written consent, admit any responsibility or liability or release any party from any liability or potential liability, nor settle any claim or potential claim against or by any party, nor accept any disclaimer of liability;
									    <br>9.1.3 Notify the police and US as soon as possible and in any event within 24 hours of the incident;
									    <br>9.1.4 Within 48 hours of the incident complete and furnish to US OUR fully completed standard claim form;
									    <br>9.1.5 Within 48 hours of the incident submit to US a copy of the DRIVER's licence;
									    <br>9.1.6 Not abandon the VEHICLE and make adequate provision for its safety and security; and
									    <br>9.1.7 Cooperate with US in any investigation, the lodging or instituting of any claim or action and the defence of any prosecution, claim or action relating to the above;</p>

									<h3>10. GENERAL</h3>
									<p>10.1 YOU acknowledge that ownership in the VEHICLE will at all times remain vested in US, or the true owner of the VEHICLE.
									    <br>10.2 YOU will not be entitled to cede or assign any of YOUR rights and obligations under this AGREEMENT or to sublet or part with possession of the VEHICLE.
									    <br>10.3 The cost of fuel is not included in the amount of the rental. We will refuel all VEHICLES on return of the VEHICLE to US.
									    <br>10.4 You are not permitted to carry out any repairs, including replacing any tyres, on the VEHICLE.
									    <br>10.5 Any tampering by YOU with the odometer of the VEHICLE will be regarded as fraud. Where required in determining the rental charges, the distance driven by YOU or the DRIVER will be measured from the odometer installed in the VEHICLE. If such calculation is not practical, or possible for any reason whatsoever, the calculation will be done by such other reasonable method as WE may determine and YOU will be obliged to furnish all such information and assistance as WE may reasonably require for that purpose.
									    <br>10.6 If the RENTER is not the DRIVER, then, without in any way detracting from the RENTER's obligations in terms of this AGREEMENT, the RENTER and the DRIVER will be liable to US jointly and severally for all and/or any amounts owing under this AGREEMENT.
									    <br>10.7 Please be advised that although WE will use our best efforts, WE are unable to guarantee the availability of the VEHICLE to YOU at a particular time due to possible circumstances beyond our control. In the event that WE are however unable to do this, WE will endeavour to make alternative arrangements until such time as WE are able to make the VEHICLE available to YOU.
									    <br>10.8 Save as otherwise stated in this AGREEMENT any addition to or alteration of this AGREEMENT will be null and void unless agreed upon by US in writing.
									    <br>10.9 YOU agree that WE may sue YOU in the Magistrate's Court for all purposes under this AGREEMENT, notwithstanding that the subject matter, cause of action, or amount involved be otherwise beyond the jurisdiction of the said court.
									    <br>10.10 YOU choose the address where YOU will receive notices for all purposes in terms of this AGREEMENT, at the RENTER's address specified in the AGREEMENT or, in the case of that address not being in the Republic of South Africa, at the DRIVER's local address specified in the AGREEMENT.
									    <br>10.11 A certificate of any director, manager or accountant of FCR as to the amount owed by YOU to US will, on the face of it, constitute proof of the amount owing.
									    <br>10.12 This document contains the entire AGREEMENT between YOU and US regarding the matters contained herein and WE will not be bound by any undertakings, representations, warranties, promises or the like not recorded herein, unless otherwise stipulated by law.
									    <br>10.13 It is agreed that each clause of these terms and conditions is severable, the one from the other, and if any clause is found to be defective or unenforceable for any reason by any competent Court, then the remaining clauses will be and continue to be of full force and effect.
									    <br>10.14 This AGREEMENT will be governed by and interpreted in accordance with the laws of the Republic of South Africa.
									    <br>10.15 No extension, relaxation or other leniency that may be given or allowed by US can be taken to mean that other rights may not be enforced.
									    <br>10.16 The RENTER and/or DRIVER authorises US to conduct any credit checks which WE deem necessary to adequately assess the risk of contracting with YOU. WE are entitled to note any default by YOU in terms of this AGREEMENT and, in accordance with The National Credit Act's requirements, with any credit bureau, and YOU hold US blameless for any consequences arising from the notation.</p>

									<hr>

									<h2>YOU have read and understand the terms and conditions of this AGREEMENT. YOUR attention has been drawn to the following important clauses:</h2>
									<p>Clause 2.1: The VEHICLE is rented at YOUR sole risk
									    <br>Clause 4.1: YOU agree to pay US all amounts owing in terms of this AGREEMENT
									    <br>Clause 5: YOU may purchase in advance LIABILITY WAIVER to potentially reduce YOUR liability
									    <br>Clause 8: YOU indemnify US from liability in certain circumstances</p>
									<!-- InstanceEndEditable -->
								</div>
								<div class="mt-10">
									<button type="button" name="agree" data-dismiss="modal" class="btn btn-success btn-block close" >I Agree The Terms<span aria-hidden="true"></span></button>
								</div>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Terms of use -->

<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Quick links</h6>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="index.php#review">Car Brands</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="Terms_of_Service.php" data-toggle="modal" data-target=".bd-terms-modal-lg">Terms of Service</a></li>
					</ul>								
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Features</h6>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>								
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Resources</h6>
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>								
				</div>
			</div>												
			<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
				<div class="single-footer-widget">
					<h6>Follow Us</h6>
					<p>Let us be social</p>
					<div class="footer-social d-flex align-items-center">
						<a href="https://github.com/Fuadabulaban96" target="_blank"><i class="fa fa-github"></i></a>
						<a href="https://www.linkedin.com/in/fuad-abu-laban-a47102156" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="https://web.facebook.com/profile.php?id=100001457573683" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/fouadabulaban/" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>							
			<div class="col-lg-4  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Newsletter</h6>
					<p>Stay update with our latest</p>
					<div class="" id="mc_embed_signup">
						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
							<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>	
			<p class="mt-50 mx-auto footer-text col-lg-12">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Fuad Abulaban</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>											
		</div>
	</div>
</footer>	
<!-- End footer Area -->		

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>			
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
<script src="js/easing.min.js"></script>			
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/owl.carousel.min.js"></script>			
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>	
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>					
<script src="js/parallax.min.js"></script>		
<script src="js/mail-script.js"></script>	
<script src="js/main.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

	  if(window.location.href.indexOf('#login') != -1) {
	    $('.bd-login-modal-lg').modal('show');
	  }

	});
</script>
<script>
  $(function(){

    $.datepicker.setDefaults(
     $.extend($.datepicker.regional['']) );

  //$('#datepicker').datepicker();


  var datepicker1=$('#datepicker').datepicker({minDate: 'now',dateFormat: 'yy-mm-dd'});
  //var datepicker2=$('#datepicker2').datepicker({minDate: 'now' + 1});
  var datepicker2=$('#datepicker2').datepicker
  (
    {minDate:($( "#datepicker" ).datepicker())+1,dateFormat: 'yy-mm-dd'}
  );
  //$('#datepicker').datepicker('option', $.datepicker.regional['fr']);

 var datepicker3=$('#datepicker3').datepicker({dateFormat: 'yy-mm-dd'});

  });
</script>
</body>
</html>
