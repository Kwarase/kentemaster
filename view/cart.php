<?php
include_once '../settings/core.php';
include '../controllers/cart_controller.php';
// $uid = check_login();

// $role = inspect_admin();
$subTotal = 0.0;
$total = 0.0;

if(isset($_SESSION['customer_id'])){
	$uid = $_SESSION['customer_id'];
	$selectedproduct = select_all_cart_ctr($uid);
}else{
	$ip_add = check_ip();
	$selectedproduct_gst = select_all_cart_gst_ctr($ip_add);
}

if (isset($_GET['message'])) {
	$message = $_GET['message'];
} else {
	$message = '';
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS only -->
    <title>Kente Master</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="../index.php"><img src="../images/logo.png" height="40" width="44" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li class="hot"><a href="#">Store</a>
                                    </li>
                                    <li><a href="">Services</a>
                                        <ul class="submenu">
                                            <li><a href="tour.html">Book a tour</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="">Opportunities</a>
                                        <ul class="submenu">
                                            <li><a href="jobs.html">Jobs</a></li>
                                            <li><a href="internships.html">Internships</a></li>
                                            <li><a href="partner.php">Become a partner</a></li>
                                            <li><a href="invest.php">Invest in Kente Master</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="">Media</a>
                                        <ul class="submenu">
                                            <li><a href="gallery/photos.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="authenticity.php">Authenticate</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li><a href="cart.html#/cart"><span class="flaticon-shopping-cart"></span></a> </li>
                                <?php if (isset($uid)) {
													echo '<a href="../Login/logout.php">Logout</a>';
												}
									else{
										echo '<li><a href="cart.html#/cart"><span>Sign In</span></a></li>
											<li><a href="cart.html#/cart"><<span>Sign Up</span></a></li>';
									} ?> 

                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h3 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">There is a special Kente for everyone.</h3>
                                    <h6 data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Clothing you with Royalty</h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="../assets/img/hero/stole2.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		
		<!-- cart -->

	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-quantity"></th>
									<th class="product-total">Sub Total</th>


								</tr>
							</thead>
							<tbody>
								<?php // print_r($selectedproduct);
								if (isset($uid) ) {
									
										
										foreach ($selectedproduct as $product) {
	
											$sub = $product['product_price'] * $product['qty'];
											$total += (float) $sub;
											$title = $product['product_title'];
											$unitprice = $product['product_price'];
											$qty = $product['qty'];
											$subTotal = $sub;
											$total = $total;
									?>
											<form method=POST action="../actions/manage_quantity.php">
												<tr class="table-body-row">
													<input type="hidden" name="prod_id" value="<?php echo $product['product_id']; ?>">
													<td class="product-remove"><a href="<?php echo '../actions/remove_from_cart.php?deletePID=' .
																							$product['product_id']; ?>"><i class="far fa-window-close"></i></a></td>
													<td class="product-image"><img src="<?php echo $product['product_image']; ?>" alt=""></td>
													<td class="product-name"> <?php echo $product['product_title']; ?></td>
													<td class="product-price"> <?php
																				echo 'GHS';
																				echo $product['product_price'];
																				?>
													</td>
													<td class="product-quantity"><input type="number" name="qty" placeholder="0" value=<?php echo $qty; ?>></td>
													<td class="product-quantity">
														<input class="btn black" type="submit" name="updateQty" value="Update">
													</td>
													<td class="product-total"><?php echo $subTotal; ?></td>
											</form>
	
											</tr>
										<?php
										}
									
								} else {
									foreach ($selectedproduct_gst as $product) {

										$sub = $product['product_price'] * $product['qty'];
										$total += (float) $sub;
										$title = $product['product_title'];
										$unitprice = $product['product_price'];
										$qty = $product['qty'];
										$subTotal = $sub;
										$total = $total;
									?>
										<form method=POST action="../actions/manage_quantity.php">
											<tr class="table-body-row">
												<input type="hidden" name="prod_id" value="<?php echo $product['product_id']; ?>">
												<td class="product-remove"><a href="<?php echo '../actions/remove_from_cart.php?deletePID=' .
																						$product['product_id']; ?>"><i class="far fa-window-close"></i></a></td>
												<td class="product-image"><img src="<?php echo $product['product_image']; ?>" alt=""></td>
												<td class="product-name"> <?php echo $product['product_title']; ?></td>
												<td class="product-price"> <?php
																			echo 'GHS';
																			echo $product['product_price'];
																			?>
												</td>
												<td class="product-quantity"><input type="number" name="qty" placeholder="0" value=<?php echo $qty; ?>></td>
												<td class="product-quantity">
													<input class="btn black" type="submit" name="updateQty" value="Update">
												</td>
												<td class="product-total"><?php echo $subTotal; ?></td>
										</form>

										</tr>
								<?php
									}
								} ?>
							</tbody>
						</table>
					</div>
				</div>



				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>

								<tr class="total-data">
									<td><strong> GHS </strong></td>
									<td><?php echo $total; ?></td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">

							<?php if (isset($uid)) { ?>

								<a href="../view/payment_form.php?amount=<?php echo $total; ?>" class="boxed-btn black">Check Out</a>
							<?php } else { ?>
								<a role="button" class="boxed-btn black" onclick="fireAlert()">Check Out</a>
								<script>
									function fireAlert(){
										Swal.fire({
											title: 'Action Restricted',
											text: 'You need to be logged in',
											icon: 'warning',
											confirmButtonText: 'Okay'
										}).then(()=>{
											window.location.href='../Login/login.php';
										})
									}
								</script>
							<?php } ?>

						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<input type="hidden" name="" id="alert" value="<?php echo $message; ?>">

	<!-- end cart -->

	<footer>
        <!-- Footer Start-->
        <div class="">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by Emmanuel Kwarase</p>                  
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="https://www.twitter.com/Kentemaster"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/Kentemaster"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/Kentemaster/"><i class="fab fa-instagram"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>





  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
