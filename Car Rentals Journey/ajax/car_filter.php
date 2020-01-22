<?php
 	include '../includes/connection.php';
 	if (isset($_GET['cat_id'])) {

	 	if ($_GET['cat_id']==0) {

	 	$query      = "SELECT * FROM model";
		$result     = mysqli_query($conn,$query);
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="col-md-4 single-team pt-5">
				<div class="thumb">';
			echo "<img class='img-fluid filter' src='admin/upload/{$row['model_image']}' alt=''>";
			echo "<div class='align-items-center justify-content-center d-flex'>
						<a href=''><i class='fa fa-facebook'></i></a>
						<a href=''><i class='fa fa-twitter'></i></a>
						<a href=''><i class='fa fa-linkedin'></i></a>
					</div>
				</div>
				<div class='meta-text mt-30 text-center'>
					<h4>{$row['model_name']} {$row['model_subname']} {$row['model_year']}</h4>
					<h5 class='text-warning float-left ml-4'><small>JD</small>{$row['rent_price']}<small> /day</small></h5>
					<a href='single_model.php?model_id={$row['model_id']}' class='btn btn-dark float-right' ><span class='text-white'>Continue</span></a>
				</div>
			</div>";
		    }
	 	}else{
		 	$query  = "SELECT * FROM model WHERE cat_id = {$_GET['cat_id']}";
			$result = mysqli_query($conn,$query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="col-md-4 single-team">
					<div class="thumb">';
				echo "<img class='img-fluid filter' src='admin/upload/{$row['model_image']}' alt=''>";
				echo "<div class='align-items-center justify-content-center d-flex'>
							<a href=''><i class='fa fa-facebook'></i></a>
							<a href=''><i class='fa fa-twitter'></i></a>
							<a href=''><i class='fa fa-linkedin'></i></a>
						</div>
					</div>
					<div class='meta-text mt-30 text-center'>
						<h4>{$row['model_name']} {$row['model_subname']} {$row['model_year']}</h4>
						<h5 class='text-warning float-left ml-4'><small>JD</small>{$row['rent_price']}<small> /day</small></h5>
						<a href='single_model.php?model_id={$row['model_id']}' class='btn btn-dark float-right' ><span class='text-white'>Continue</span></a>
					</div>
				</div>";

			}

		}
	}