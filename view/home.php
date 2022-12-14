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

<?php
include 'settings/core.php';
require 'controllers/product_controller.php';
$uid = $_SESSION['customer_id'] ?? null;
$role = $_SESSION['role'] ?? null;
?>

<body>
    <!--? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../images/logo.svg" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
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
                                <?php
                                  session_start();
                                  if(isset($_SESSION['cid'])){
                                ?>
                                <a class="nav-item nav-link" style="align-self: right;" href="login/logout.php">Logout</a>
                                <?php
                                    }
                                ?>

                                <li><a href="cart.html#/cart"><span>Sign In</span></a></li>
                                <li><a href="cart.html#/cart"><<span>Sign Up</span></a></li>
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
  
    <!-- products -->
			<div class="row product-lists">
				<?php
    $datafound = select_allproduct_ctr();

    foreach ($datafound as $item) { ?>
					<div class="col-lg-4 col-md-6 text-center strawberry">
						<div class="single-product-item">
							<div class="product-image" style="height: 250px; margin-bottom: 30px;">
								<a href="./view/single_product.php?product_id=<?php echo $item[
            'product_id'
        ]; ?>"><img style="width: 100%; height: 100%; object-fit: cover;" src="<?php echo $image .
    basename($item['product_image']); ?>" alt=""></a>
							</div>
							<h3><?php echo $item['product_title']; ?></h3>
							<p class="product-price"><span><?php
       echo 'GHS';
       echo $item['product_price'];
       ?></span> </p>
							<a href="./actions/add_to_cart.php?product_id=<?php echo $item[
           'product_id'
       ]; ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
				<?php }
    ?>
	<!-- end products -->





    <section>
        <div class="">
            Caurosel with Kentemaster
            'There is a special Kente for everyone'
            w pictures
            <a href="store.php">Visit our store</a>
        </div>
    </section>

    <section>
        <div class="">
            New Product Arrivals
            Display products from db
        </div>
    </section>

    <section>
        <div class="">
            Some of our work
            [Pictures]
            View our Gallery
            Display some images from db gallery
        </div>
    </section>

    <section>
        <div class="">
            Popular Products - Category 1
            Display specific products from db
        </div>
    </section>

    <section>
        <div class="">
            Planning on making a bulk purchase
            <a href="bulk.php">Tell us about it</a>
        </div>
    </section>

    <section>
        <div class="">
            Other products - Category 2
            Display some products from db
        </div>
    </section>

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