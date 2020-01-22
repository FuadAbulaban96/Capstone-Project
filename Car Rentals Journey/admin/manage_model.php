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

		move_uploaded_file($tmp_name,$path.$mod_image);
		


		$query     = "INSERT INTO model(model_name,model_subname,model_year,passenger_capacity,rent_price,model_desc,cat_id,model_image) 		          VALUES ('$name','$subname','$year','$capacity','$price','$desc','$cat_id','$mod_image')";

		
		//perform query
		mysqli_query($conn,$query);
		
		echo "<script>window.top.location='manage_model.php'</script>";		
	}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
		    <div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Model</h1>
				</div>
				<div class="col-sm-6">
				    <ol class="breadcrumb float-sm-right">
				        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				        <li class="breadcrumb-item active">Manage Model</li>
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
			            	<h3 class="card-title">New Model</h3>
			            </div>
			            <!-- /.card-header -->
		
			            <!-- form start -->
			            <form role="form" method="post" enctype="multipart/form-data">
				            <div class="card-body">
				              <div class="form-group">
				                <label for="exampleInputname">Model Name</label>
				                <input type="text" class="form-control" name="model_name" id="exampleInputname" placeholder="Enter Model Name">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputsubname">Model  SubName</label>
				                <input type="text" class="form-control" name="model_subname" id="exampleInputsubname" placeholder="Enter Model SubName">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputyear">Model Year</label>
				                <input type="text" class="form-control" name="model_year" id="exampleInputyear" placeholder="Enter Model Year">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputcapacity">Passenger Capacity</label>
				                <input type="text" class="form-control" name="passenger_capacity" id="exampleInputcapacity" placeholder="Enter Passenger Capacity">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputprice">Rent Price</label>
				                <input type="text" class="form-control" name="rent_price" id="exampleInputprice" placeholder="Enter Rent Price">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputdesc">Model Description</label>
				                <input type="text" class="form-control" name="model_desc" id="exampleInputdesc" placeholder="Enter Model Description">
				              </div>
				              <div class="form-group">
				                <label for="exampleInputcatid">Choose Category</label>
				                <select class="form-control" name="cat_id" id="exampleInputcatid" >
				                	<?php

										$query  = "SELECT * FROM category";
										$result = mysqli_query($conn,$query);
										while ($row    = mysqli_fetch_assoc($result)){

											echo "<option value ='{$row['cat_id']}'>{$row['cat_name']}</option>";
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
			          		<h3 class="card-title">Models DataTable</h3>
			        	</div>
			        	<!-- /.card-header -->
					    <div class="card-body">
				            <table id="example1" class="table table-bordered table-hover">
				            	<thead>
						            <tr>
						              <th>Model Id</th>
						              <th>Model Name</th>
						              <th>Model Sub Name</th>
						              <th>Model Year</th>
						              <th>Passenger Capacity</th>
						              <th>Rent Price</th>
						              <th>Model Describtion</th>
						              <th>Category Name</th>
						              <th>Model Image</th>
						              <th>Edit</th>
						              <th>Delete</th>
						            </tr>
						        </thead>
						        <tbody>
						            <?php
						           
										$query  = "SELECT * FROM model 
												   INNER JOIN category 
												   ON model.cat_id = category.cat_id";

										$result = mysqli_query($conn,$query);

										while ( $row =mysqli_fetch_assoc($result)) {
											echo "<tr>";
											echo "<td>{$row['model_id']}</td>";
											echo "<td>{$row['model_name']}</td>";
											echo "<td>{$row['model_subname']}</td>";
											echo "<td>{$row['model_year']}</td>";
											echo "<td>{$row['passenger_capacity']}</td>";
											echo "<td>{$row['rent_price']}</td>";
											echo "<td>{$row['model_desc']}</td>";
											echo "<td>{$row['cat_name']}</td>";
											echo "<td><img width='100'src='upload/{$row['model_image']}'></td>";
			
											echo "<td class='text-center'><a href = 'edit_model.php?model_id={$row['model_id']}&cat_id={$row['cat_id']} ' class='btn btn-warning btn-block'>Edit</a></td>";
											echo "<td class='text-center'><a href = 'delete_model.php?model_id={$row['model_id']} ' class='btn btn-danger btn-block'>Delete</a></td>";
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