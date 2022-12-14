















<div class="row product-lists">
			<?php 
	$datafound = select_allproduct_ctr(); 
				
	foreach ($datafound as $item) { ?>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image" style="height: 250px; margin-bottom: 30px;">
							<a href="single_product.php?product_id=<?php echo $item['product_id']?>"><img style="width: 100%; height: 100%; object-fit: cover;" src="<?php echo $item['product_image']; ?>" alt=""></a>
						</div>
						<h3><?php
											
											echo $item['product_title'];
											?></h3>
						<p class="product-price"><span><?php
										echo 'GHS';
										echo $item['product_price'];
										?></span>  </p>
						<a href="../actions/add_to_cart.php?product_id=<?php echo $item['product_id']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<?php } ?>