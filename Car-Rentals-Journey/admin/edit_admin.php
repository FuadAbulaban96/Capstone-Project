<?php
// open connection
include('../includes/admin_header.php');

// the action will start if user press on button
if (isset($_POST['submit'])){
	//fetch Data from web form
	$email    = $_POST['admin_email'];
	$password = $_POST['admin_password'];
	$fullname = $_POST['fullname'];

	$admin_image = $_FILES['admin_image']['name'];
	$tmp_name  = $_FILES['admin_image']['tmp_name'];
	$path      = "upload/";



	if ($_FILES['admin_image']['error']==0) {
		$query2 = " SELECT * FROM admin WHERE admin_id        = {$_GET['admin_id']} ";
		$result =mysqli_query($conn,$query2);
		$row    =mysqli_fetch_assoc($result);

		unlink("upload/{$row['admin_image']}");

		move_uploaded_file($tmp_name,$path.$admin_image);
		$query    = " UPDATE admin SET admin_email    = '$email',
								   admin_password = '$password',
								   fullname       = '$fullname',
								   admin_image	  = '$admin_image'
							   WHERE 
							 	   admin_id       = {$_GET['admin_id']}";

	}
	else{
	
		$query    = " UPDATE admin SET admin_email    = '$email',
								   admin_password = '$password',
								   fullname       = '$fullname'
							   WHERE 
							 	   admin_id       = {$_GET['admin_id']}";
	

    }


	//perform query
	if(mysqli_query($conn,$query))
{
	echo "<script>window.top.location='manage_admin.php'</script>";
}


}

//Fetch Old Data

$query  = "SELECT * FROM admin WHERE   admin_id   = {$_GET['admin_id']}";
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
					<h1>Edit Admin</h1>
				</div>
				<div class="col-sm-6">
				    <ol class="breadcrumb float-sm-right">
				        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				        <li class="breadcrumb-item active">Edit Admin</li>
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
			            	<h3 class="card-title">Update Admin</h3>
			            </div>
			            <!-- /.card-header -->
<!-- 			            admin_id	admin_email	admin_password	fullname      -->
			            <!-- form start -->
			            <form role="form" method="post" enctype="multipart/form-data">
				            <div class="card-body">
				              <div class="form-group">
				                <label for="exampleInputFile">Admin Image</label>
				                <div class="input-group">
				                  <div class="custom-file">
				                    <input type="file" class="custom-file-input" name="admin_image" id="exampleInputFile">
				                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
				                  </div>
				                  <div class="input-group-append">
				                    <span class="input-group-text" id="">Upload</span>
				                  </div>
				                </div>
				              </div>		
				              <div class="form-group">
				                <label for="exampleInputfullname">Full Name</label>
				                <input type="text" class="form-control" name="fullname" id="exampleInputfullname"  aria-required="true" aria-invalid="false" value="<?php echo $row['fullname'] ?>" >
				              </div>
				              <div class="form-group">
				                <label for="exampleInputEmail1">Email address</label>
				                <input type="email" class="form-control"  name="admin_email" id="exampleInputEmail1" aria-required="true" aria-invalid="false" value="<?php echo $row['admin_email'] ?>" >
				              </div>
				              <div class="form-group">
				                <label for="exampleInputPassword1">Password</label>
				                <input type="text" class="form-control" name="admin_password" id="exampleInputPassword1" aria-required="true" aria-invalid="false" value="<?php echo $row['admin_password'] ?>" >
				              </div>
				            </div>
				            <!-- /.card-body -->
				            <div class="card-footer">
				              <button type="submit" name="submit" class="btn btn-block btn-outline-dark btn-lg"><i class="fas fa-user-edit"> Update </i></button>
				            </div>
			            </form>
			        </div>
			        <!-- /.card -->
			    </div>
			</div>
	</section> 
</div> 

<?php include('../includes/admin_footer.php'); ?>