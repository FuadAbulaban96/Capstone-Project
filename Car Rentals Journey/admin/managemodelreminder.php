<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Update Product</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Product</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Name</label>
									<input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['model_name'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Price</label>
									<input id="cc-pament" name="product_price" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['rent_price'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Description</label>
									<input id="cc-pament" name="product_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row['model_desc'] ?>" >
								</div>
								<div class="form-group">
									<label for="cc-full_name" class="control-label mb-1">Product Image</label>
									<input id="full_name" name="model_image" type="file" class="form-control cc-full_name identified visa" value="">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Choose Category</label>
									<select id="cc-pament" name ="cat_id" class="form-control" >
										<?php

											$query  = "SELECT * FROM category";
											$result = mysqli_query($conn,$query);
											while ($row    = mysqli_fetch_assoc($result)){

												echo "<option value ='{$row['cat_id']}'>{$row['cat_name']}</option>";
											}


										  ?>
									</select>
								<div>
									<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
										<span id="payment-button-amount">Update</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>