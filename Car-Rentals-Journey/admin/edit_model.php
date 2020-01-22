<?php 
	include('../includes/admin_header.php'); 
	// the action will start if user press on button    
	// model_id	model_name	model_subname	model_year passenger_capacity	rent_price 	model_desc	cat_id	model_image 
	if (isset($_POST['submit'])){
		//fetch Data from web form
		$name      = $_POST['model_name'];
		$subname   = $_POST['model_subname'];
		$year      = $_POST['model_year'];
		$capacity  = $_POST['passenger_capacity'];
		$price     = $_POST['rent_price'];
		$desc      = $_POST['model_desc'];
		$cat_id    = $_POST['cat_id'];
		$mod_image = $_FILES['model_image']['name'];
		$tmp_name  = $_FILES['model_image']['tmp_name'];
		$path      = "upload/";



		if ($_FILES['model_image']['error']==0) {
			
			$query2 = " SELECT * FROM model WHERE model_id    = {$_GET['model_id']} ";
			$result =mysqli_query($conn,$query2);
			$row    =mysqli_fetch_assoc($result);

			unlink("upload/{$row['model_image']}");
			

			move_uploaded_file($tmp_name,$path.$mod_image);
			$query = " UPDATE model SET    model_name         = '$name',
									       model_subname      = '$subname',
									       model_year         = '$year',
									       passenger_capacity = '$capacity',
									       rent_price         = '$price',
									       model_desc         = '$desc',
									       cat_id             = '$cat_id',
										   model_image        = '$mod_image' 
										   				   
								      WHERE 
								 	       model_id           = {$_GET['model_id']}";

		}
		else{
		
			$query = " UPDATE model SET    model_name         = '$name',
									       model_subname      = '$subname',
									       model_year         = '$year',
									       passenger_capacity = '$capacity',
									       rent_price         = '$price',
									       model_desc         = '$desc',
									       cat_id             = '$cat_id' 
											   				   
									  WHERE 
								 	       model_id      = {$_GET['model_id']}";
			

	    }
	    	// Applied query
		if(mysqli_query($conn,$query)){
			
			echo "<script>window.top.location='manage_model.php'</script>";

		} /* Back to manage product page */


}

//Fetch Old Data

$query  = "SELECT * FROM model WHERE   model_id     = {$_GET['model_id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);


?>
<!-- MAIN CONTENT-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
		    <div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Model</h1>
				</div>
				<div class="col-sm-6">
				    <ol class="breadcrumb float-sm-right">
				        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				        <li class="breadcrumb-item active">Edit Model</li>
				    </ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
		<!-- Main content -->
	<section class="content">
		  <div class="container-fluid">
		    <div class="row">
		      <!-- left column -->
		      	<div class="col-12">
		        <!-- general form elements -->
			        <div class="card card-dark">
			            <div class="card-header">
			            	<h3 class="card-title">Update Model</h3>
			            </div>
			            <!-- /.card-header -->
		
			            <!-- form start -->
			            <form role="form" method="post" enctype="multipart/form-data">
				            <div class="card-body">
				              <div class="form-group">
				                <label for="exampleInputname">Model Name</label>
				                <input type="text" class="form-control" name="model_name" id="exampleInputname" placeholder="Enter Model Name" value="<?php echo $row['model_name'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputsubname">Model  SubName</label>
				                <input type="text" class="form-control" name="model_subname" id="exampleInputsubname" placeholder="Enter Model SubName" value="<?php echo $row['model_subname'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputyear">Model Year</label>
				                <input type="text" class="form-control" name="model_year" id="exampleInputyear" placeholder="Enter Model Year" value="<?php echo $row['model_year'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputcapacity">Passenger Capacity</label>
				                <input type="text" class="form-control" name="passenger_capacity" id="exampleInputcapacity" placeholder="Enter Passenger Capacity" value="<?php echo $row['passenger_capacity'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputprice">Rent Price</label>
				                <input type="text" class="form-control" name="rent_price" id="exampleInputprice" placeholder="Enter Rent Price" value="<?php echo $row['rent_price'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputdesc">Model Description</label>
				                <input type="text" class="form-control" name="model_desc" id="exampleInputdesc" placeholder="Enter Model Description" value="<?php echo $row['model_desc'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputcatid">Choose Category</label>
				                <select class="form-control" name="cat_id" id="exampleInputcatid" >
			                		<?php

										$query  = "SELECT * FROM category";
										$result = mysqli_query($conn,$query);
										while ($row = mysqli_fetch_assoc($result)){
											if ($row['cat_id'] == $_GET['cat_id']) {
												echo "<option value ='{$row['cat_id']}' selected='selected'>{$row['cat_name']}</option>";
											}
											else{
												echo "<option value ='{$row['cat_id']}'>{$row['cat_name']}</option>";
											}
										}
									  ?>
				                </select>
				              </div>
				              <div class="form-group">
				                <label for="exampleInputFile">Model Image</label>
				                <div class="input-group">
				                  <div class="custom-file">
				                    <input type="file" class="custom-file-input" name="model_image" id="exampleInputFile">
				                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
				                  </div>
				                  <div class="input-group-append">
				                    <span class="input-group-text" id="">Upload</span>
				                  </div>
				                </div>
				              </div>
				            </div>
				            <!-- /.card-body -->
				             <div class="card-footer">
				              <button type="submit" name="submit" class="btn btn-block btn-outline-dark btn-lg"><i class="fas fa-wrench"> Update </i></button>
				            </div>
			            </form>
			        </div>
			        <!-- /.card -->
			    </div>
			</div>
			</div>
		</section>
	</div>

<?php include('../includes/admin_footer.php'); ?>