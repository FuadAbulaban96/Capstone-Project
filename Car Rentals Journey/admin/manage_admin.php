<?php 
	include('../includes/admin_header.php'); 
	if (isset($_POST['submit'])){
		//fetch Data from web form
		$email    = $_POST['admin_email'];
		$password = $_POST['admin_password'];
		$fullname = $_POST['fullname'];

		$admin_image = $_FILES['admin_image']['name'];
		$tmp_name  = $_FILES['admin_image']['tmp_name'];
		$path      = "upload/";

		move_uploaded_file($tmp_name,$path.$admin_image);



		$query = "INSERT INTO admin(admin_email,admin_password,fullname,admin_image) VALUES ('$email','$password','$fullname','$admin_image')";

		//perform query
		if(mysqli_query($conn,$query)){

			echo "<script>window.top.location='manage_admin.php'</script>";
		}

}






 ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
		    <div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Admin</h1>
				</div>
				<div class="col-sm-6">
				    <ol class="breadcrumb float-sm-right">
				        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				        <li class="breadcrumb-item active">Manage Admin</li>
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
			            	<h3 class="card-title">New Admin</h3>
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
				                <input type="text" class="form-control" name="fullname" id="exampleInputfullname" placeholder="Enter FullName">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputEmail1">Email address</label>
				                <input type="email" class="form-control"  name="admin_email" id="exampleInputEmail1" placeholder="Enter email">
				              </div>

				              <div class="form-group">
				                <label for="exampleInputPassword1">Password</label>
				                <input type="password" class="form-control" name="admin_password" id="exampleInputPassword1" placeholder="Password">
				              </div>
				            </div>
				            <!-- /.card-body -->
				            <div class="card-footer">
				              <button type="submit" name="submit" class="btn btn-block btn-outline-dark btn-lg"><i class="fas fa-save"> Save </i></button>
				            </div>
			            </form>
			        </div>
			        <!-- /.card -->
			    </div>
			</div>
		    <div class="row">
		        <div class="col-12">
			      	<div class="card">
			        	<div class="card-header">
			          		<h3 class="card-title">Admin Information</h3>
			        	</div>
			        	<!-- /.card-header -->
					    <div class="card-body">
				            <table id="example2" class="table table-bordered table-hover">
				            	<thead>
						            <tr>
						              <th class='text-center'>ID</th>
						              <th class='text-center'>Image</th>
						              <th class='text-center'>Full Name</th>
						              <th class='text-center'>Email</th>
						              <th class='text-center'>Edit</th>
						              <th class='text-center'>Delete</th>
						        </thead>
						        <tbody>
								<?php

									$query  = "SELECT * FROM admin";
									$result = mysqli_query($conn,$query);
									while ( $row =mysqli_fetch_assoc($result)) {
										echo "<tr>";
										echo "<td class='text-center'>{$row['admin_id']}</td>";
										echo "<td class='text-center'><img height='100' width='100' src='upload/{$row['admin_image']}'></td>";
										echo "<td class='text-center'>{$row['admin_email']}</td>";
										echo "<td class='text-center'>{$row['fullname']}</td>";
										echo "<td class='text-center'><a href = 'edit_admin.php?admin_id={$row['admin_id']} ' class = 'btn btn-warning btn-block'>Edit</a></td>";
										echo "<td class='text-center'><a href = 'delete_admin.php?admin_id={$row['admin_id']} ' class = 'btn btn-danger btn-block'>Delete</a></td>";
										echo"</tr>";
									}

								?>
						        </tbody>    
						    </table>
					    </div>
		        		<!-- /.card-body -->
		      		</div>
		      		<!-- /.card -->
				</div>
			</div>
	</section> 
</div> 

<?php include('../includes/admin_footer.php'); ?>