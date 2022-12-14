<?php 
require_once("../functions/getCatgory.php");

$productId=$_GET['id'];
$productName=$_GET['pname'];
$productPrice=$_GET['pprice'];
$productDescription=$_GET['pdes'];
$productKeyword=$_GET['pkeyword'];
?>


<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Edit Product</h2>
						
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
                    <form action="../admin/updateProduct.php" method="POST" style="margin:5% 10%;" >
					
					<div class="modal-body"></div>
					<div class="form-outline mb-4">
						<label class="form-label" for="ptitle" style="color: #051922;font-weight: bold;">Product Name</label>
                        <input type="hidden" id="ptitle" name="pId"  value ="<?php echo  $productId; ?>" class="form-control" />
						<input type="text" id="ptitle" name="pname"  value ="<?php echo  $productName; ?>" class="form-control" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="mycat" style="color: #051922;font-weight: bold;">Product Category</label>
						<?php getAllCategoryDropdown(); ?>
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pprice" style="color: #051922;font-weight: bold;">Product Price</label>
						<input type="number" name="pprice" id="pprice" class="form-control" value ="<?php echo  $productPrice; ?>" placeholder="Price" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pdesc" style="color: #051922;font-weight: bold;">Product Description</label>
						<input type="text" name="pdesc" id="pdesc" value ="<?php echo  $productDescription; ?>" class="form-control" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pkeyword" style="color: #051922;font-weight: bold;">Product Keywords</label>
						<input type="text" name="pkeyword" id="pkeyword" value ="<?php echo  $productKeyword ?>" class="form-control" placeholder="Keyword" />
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" style="color: #051922;font-weight: bold;" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btnAdd btn-primary" name="submit" value="Add Product">
					</div>
				</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end contact form -->