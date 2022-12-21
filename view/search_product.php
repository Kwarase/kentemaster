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
include ("../settings/core.php");
require("../controllers/product_controller.php");

$uid = $_SESSION['customer_id'] ?? null;
$role = $_SESSION['role'] ?? null;

$product_id = $_GET['product_id'];
$product = select_product_ctr($product_id);
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
                                <?php if (isset($uid)) {
													echo '<a href="../login/logout.php">Logout</a>';
												}
									else{
										echo '<li><a href="../login/login.php"><span>Sign In</span></a></li>
										<li><a href="../login/signup.php"><<span>Sign Up</span></a></li>';
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

    <div class="product-section" style="padding-top: 150px;">
        <div class="container">
        <?php
	foreach ($item as $things){ 
		?>
        <div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image" style="height: 250px; margin-bottom: 30px;">
							<a href="single_product.php"><img style="width: 100%; height: 100%; object-fit: cover;" src="<?php echo $things['product_image']; ?>" alt=""></a>
						</div>
						<h3><?php
											
											echo $things['product_title'];
											?></h3>
						<p class="product-price"><span><?php
										echo 'GHS';
										echo $things['product_price'];
										?></span>  </p>
						<a href="../actions/add_to_cart.php?product_id=<?php echo $things['product_id']?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        <?php 
							echo "
							<a href='../view/single_product.php?product_id={$things['product_id']}' class='cart-btn'>View product</a>
							";
						    ?>
					</div>
				</div>
			</div>
            <?php } ?>

        </div>
    </div>

    </main>
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
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <script type="text/javascript" src="myjs.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

   <script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>


  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f3b9ccc4c7806354da72f17/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    
</body>
</html>
