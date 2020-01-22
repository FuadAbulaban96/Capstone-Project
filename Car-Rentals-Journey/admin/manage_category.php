<?php
	include('../includes/admin_header.php'); 
	// the action will start if user press on button
if (isset($_POST['submit'])){
	//fetch Data from web form
	$category  = $_POST['cat_name'];

	//get data from FILE
	$cat_image = $_FILES['cat_image']['name'];
	$tmp_name  = $_FILES['cat_image']['tmp_name'];
	$path      = "upload/";

	move_uploaded_file($tmp_name,$path.$cat_image);



	$query     = "INSERT INTO category (cat_name,cat_image) VALUES ('$category','$cat_image')";

	//perform query
	if(mysqli_query($conn,$query)){

		echo "<script>window.top.location='manage_category.php'</script>";
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
					<h1>Create Category</h1>
				</div>
				<div class="col-sm-6">
				    <ol class="breadcrumb float-sm-right">
				        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				        <li class="breadcrumb-item active">Manage Category</li>
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
			            	<h3 class="card-title">New Category</h3>
			            </div>
			            <!-- /.card-header -->
			            <!-- form start -->
			            <form role="form" method="post" enctype="multipart/form-data">
				            <div class="card-body">
				              <div class="form-group">
				                <label for="exampleInputcatname">Category Name</label>
				                <input type="text" class="form-control" name="cat_name" id="exampleInputcatname" placeholder="Enter Category Name">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputFile">Category Image</label>
				                <div class="input-group">
				                  <div class="custom-file">
				                    <input type="file" class="custom-file-input" name="cat_image" id="exampleInputFile">
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
			          		<h3 class="card-title">Categories DataTable</h3>
			        	</div>
			        	<!-- /.card-header -->
					    <div class="card-body">
				            <table id="example2" class="table table-bordered table-hover">
				            	<thead>
						            <tr>
						              <th class='text-center'>ID</th>
						              <th class='text-center'>Category</th>
						              <th class='text-center'>Category Image</th>
						              <th class='text-center'>Models Number</th>
						              <th class='text-center'>Edit</th>
						              <th class='text-center'>Delete</th>						              
						            </tr>
						        </thead>
						        <tbody>
						         	<?php

										$query  = "SELECT * FROM category";
										$result = mysqli_query($conn,$query);
										while ( $row =mysqli_fetch_assoc($result)) {
											$query1  = "SELECT * FROM model 	WHERE cat_id  = {$row['cat_id']}";
											$result1 = mysqli_query($conn,$query1);
											$i=0;
											while ($row1 = mysqli_fetch_assoc($result1)) {
												$i++;
											}
											$query2 = "UPDATE category SET model_number = '$i' WHERE cat_id ={$row['cat_id']}";
											$result2 = mysqli_query($conn,$query2);
											
											echo "<tr>";
											echo "<td class='text-center'>{$row['cat_id']}</td>";
											echo "<td class='text-center'>{$row['cat_name']}</td>";
											echo "<td class='text-center'><img width='100' src ='upload/{$row['cat_image']}'></td>";
											// echo "<td><a href  = 'viewproducts_category.php?cat_id={$row['cat_id']} ' class = 'btn btn-info'>View</a></td>";
											echo "<td class='text-center'>$i</td>";
											echo "<td class='text-center'><a href  = 'edit_category.php?cat_id={$row['cat_id']} ' class = 'btn btn-warning btn-block'>Edit</a></td>";
											echo "<td class='text-center'><a href  = 'delete_category.php?cat_id={$row['cat_id']} ' class = 'btn btn-danger btn-block'>Delete</a></td>";
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