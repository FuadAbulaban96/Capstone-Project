<?php 
	include('includes/public_header.php');
?>
<!-- Ekko Lightbox -->
<!-- Ionicons -->
<!-- Theme style -->
<link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style type="text/css">
	.img-fluid.filter{
		height: 250px!important;
	}
</style>
<script type="text/javascript">
  $(document).ready(function()
    {
      $(".category").click(function()
        {
          //get selected parent option 
          var cat_id = $(this).attr("name");
          var cat_name = $(this).html();

          $('.category').removeClass('active');
          $(this).addClass('active');
          //alert(admin_id);
          $.ajax(
          {
            type: "get",
            url: "ajax/car_filter.php?cat_id=" + cat_id,
            success: function(data)
            {
              $("#filters").html(data);
              $("#cat_title").html(cat_name);
            }
          });
        });

          //get selected parent option 
          var cat_id = $(".category.active").attr("name");
          var cat_name = $(".category.active").html();

          //alert(admin_id);
          $.ajax(
          {
            type: "get",
            url: "ajax/car_filter.php?cat_id=" + cat_id,
            success: function(data)
            {
              $("#filters").html(data);
              $("#cat_title").html(cat_name);


            }
          });

        });
</script>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Cars			
				</h1>	
				<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars.php"> Cars</a></p>
			</div>											
		</div>
	</div>
</section>

<!-- End banner Area -->	
<section class="content mt-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-dark">
					<div class="card-header">
						<div class="card-title col-12 text-center" >
							<span class="text-warning"  id="cat_title"></span>
						</div>
					</div>
					<div class="card-body">
						<div class="text-center">
							<div class="row btn-group mb-2">
								<?php
									if (!isset($_GET['cat_id'])) {
									    echo '<div class="col-md col-sm all-item"><a class="btn btn-warning category active" name="0"> All Models </a></div>';
										$query  = "SELECT * FROM category"; 
										$result = mysqli_query($conn,$query);
										while ($row = mysqli_fetch_assoc($result)) {
											if (isset($_GET['cat_id'])) {
												if ($row['cat_id'] == $_GET['cat_id']) {
													echo "<div class='col-md col-sm-12 active'><a class='btn btn-warning category' name='{$row['cat_id']}'>{$row['cat_name']}</a></div>";
												}else{
													echo "<div class='col-md col-sm-12'><a class='btn btn-warning category' name='{$row['cat_id']}'>{$row['cat_name']}</a></div>";
												}
											}else{
												echo "<div class='col-md col-sm-12'><a class='btn btn-warning category' name='{$row['cat_id']}'>{$row['cat_name']}</a></div>";
											}
										}
									}else{
										echo '<div class="col-md col-sm"><a class="btn btn-warning category" name="0"> All Models </a></div>';
										$query  = "SELECT * FROM category";
										$result = mysqli_query($conn,$query);
										while ($row = mysqli_fetch_assoc($result)) {
											if (isset($_GET['cat_id'])) {
												if ($row['cat_id'] == $_GET['cat_id']) {
													echo "<div class='col-md col-sm-12 active'><a class='btn btn-warning category active' name='{$row['cat_id']}'>{$row['cat_name']}</a></div>";
												}else{
													echo "<div class='col-md col-sm-12'><a class='btn btn-warning category' name='{$row['cat_id']}'>{$row['cat_name']}</a></div>";
												}
											}else{
												echo "<div class='col-md col-sm-12'><a class='btn btn-warning category' name='{$row['cat_id']}'>{$row['cat_name']}</a></div>";
											}
										}
									}
								?>
							</div>
							<div class="mb-2">
								<div class="text-center m-3">
									<select class="custom-select" style="width: auto;" data-sortOrder>
										<option value="index"> Sort by Position </option>
										<option value="sortData"> Sort by Custom Data </option>
									</select>
									<div class="btn-group">
										<a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
										<a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
									</div>
								</div>
							</div>
						</div>
						<div>
							<section class="team-area section-gap team-page-teams pt-0" id="team">	
								<div class="filter-container p-0">
									<div class="row justify-content-center d-flex align-items-center pt-4" id="filters">
																								
									</div>
								</div>
							</section>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>
			
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
				<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
			</div>
		</div>
	</div>	
</section>
<!-- End callaction Area -->

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

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Ekko Lightbox -->
<script src="admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- Filterizr-->
<script src="admin/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
	$(function () {
		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				alwaysShowClose: true
			});
		});

		$('.filter-container').filterizr({gutterPixels: 3});
		$('.btn[data-filter]').on('click', function() {
			$('.btn[data-filter]').removeClass('active');
			$(this).addClass('active');
		});
	})
</script>
<!-- End feature Area -->				
<?php include('includes/public_footer.php');?>