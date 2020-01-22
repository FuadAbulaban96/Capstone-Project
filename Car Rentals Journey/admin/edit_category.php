<?php
// open connection
include('../includes/admin_header.php');

// the action will start if user press on button
if (isset($_POST['submit'])){

	//fetch Data from web form
	$category  = $_POST['cat_name'];
	//get data from FILE

	$cat_image = $_FILES['cat_image']['name'];
	$tmp_name  = $_FILES['cat_image']['tmp_name'];
	$path      = "upload/";


	if ($_FILES['cat_image']['error']==0) {
		$query2 = " SELECT * FROM category WHERE cat_id        = {$_GET['cat_id']} ";
		$result =mysqli_query($conn,$query2);
		$row    =mysqli_fetch_assoc($result);

		unlink("upload/{$row['cat_image']}");

		move_uploaded_file($tmp_name,$path.$cat_image);
		$query = " UPDATE category         SET   cat_name      = '$category',
									   		     cat_image     = '$cat_image' 
									   				   
							      		   WHERE 
							 	       		   	 cat_id        = {$_GET['cat_id']}";

	}
	else{
	
		$query    = " UPDATE category          SET   cat_name  = '$category'
								      
								      		   WHERE 
								 	      			 cat_id    = {$_GET['cat_id']}";
	

    }
    	// Applied query
	if(mysqli_query($conn,$query)){

		echo "<script>window.top.location='manage_category.php'</script>";

	} /* Back to manage admin page */


}

//Fetch Old Data

$query  = "SELECT * FROM category 	WHERE cat_id      = {$_GET['cat_id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);


?>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
		    <div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Category</h1>
				</div>
				<div class="col-sm-6">
				    <ol class="breadcrumb float-sm-right">
				        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				        <li class="breadcrumb-item active">Edit Category</li>
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
			            	<h3 class="card-title">Update Category</h3>
			            </div>
			            <!-- /.card-header -->
			            <!-- form start -->
			            <form role="form" method="post" enctype="multipart/form-data">
				            <div class="card-body">
				              <div class="form-group">
				                <label for="exampleInputcatname">Category Name</label>
				                <input type="text" class="form-control" name="cat_name" id="exampleInputcatname" aria-required="true" aria-invalid="false" value="<?php echo $row['cat_name'] ?>">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputFile">Category Image</label>
				                <div class="input-group">
				                  <div class="custom-file">
				                    <input type="file" class="custom-file-input" name="cat_image" id="exampleInputFile" value="">
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
