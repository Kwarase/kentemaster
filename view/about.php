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
include '../settings/core.php';
require '../controllers/product_controller.php';
$uid = $_SESSION['customer_id'] ?? null;
$role = $_SESSION['user_role'] ?? null;
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
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li class="hot"><a href="store.php">Store</a>
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
                                <li><a href="cart.html#/cart"><span class="flaticon-shopping-cart"></span></a></li>
                                <?php if (isset($uid)) {
													echo 
                          '<li><a href="../login/logout.php">Logout</a></li>';
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

    <main>
        <div class="about-details section-padding30">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-lg-10">

                        <div class="about-details-cap mb-50">
                            <h4>Meet the team</h4>
                           <div class="watch-area">
                                <div class="container">
                                    <div class="row align-items-center justify-content-between ">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="watch-details mb-40">
                                                <h2>Peter Paul Akanko</h2>
                                                <p>Founder, Chief Executive Officer<br>
                                                    KNUST ‘14<br>
                                                    Peter Paul Akanko is an Alumnus of the Kwame Nkrumah University of Science and Technology, the Kumasi Business Incubator, President Obama's Young African Leaders Initiative and the Ghana-Netherlands growing business together program. He developed the Interest in Kente after encountering Kente weavers in 2012 though a summer program. He realized a lot of local Kente weavers struggled to get markets for their products. He went ahead to start Kente Master out of his love for arts and Culture and his passion to help economically empower local Kente weavers.<br>
                                                    LinkedIn: <a href="https://gh.linkedin.com/pub/peter-paul-junior-akanko/70/194/904" style="color: red"> Peter Paul Junior Akanko</a>


                                                </p>
                                                <!-- <a href="shop.html" class="btn">Show Clothing</a> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="choice-watch-img mb-40">
                                                <img src="ceo.jpeg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row align-items-center justify-content-between ">
                                        <div class="col-lg-5 col-md-6">
                                            <div class="watch-details mb-40">
                                                <h2>Parag Bapna</h2>
                                                <p>Chief Operating Officer<br>

                                                UPenn ‘17<br>

                                                Parag has always had an interest in entrepreneurship, and when he visited Ghana in the summer after his freshman year, he met Peter Paul and the two became best buds. After returning to Penn the following semester, Parag started working with Kente Master to lay the groundwork for its international expansion.<br>

                                                LinkedIn: <a href="https://www.linkedin.com/in/parag-bapna-a5b75488" style="color: red">Parag Bapna</a></p>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="choice-watch-img mb-40">
                                                <img src="parag.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                           
                        </div>


                        <div class="about-details-cap mb-50">
                            <h4>Who We Are</h4>
                            <p>Kente Master is a social Enterprise and a market leader in the production of High Quality Original Kente products while leveraging on digital technology to market and supply these products globally. We invision being a Global fashion Giant in the Nearby Future.
                            </p>
                           
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4>Media Recognition</h4>
                            <p>From our valued customers to several media outlets, everyone recognizes the quality we bring to the table.<br>

                            <a href="http://ayibamagazine.com/weaving-history-story-kente-master/" style="color:red">Ayiba Magazine</a><br>

                            <a href="https://face2faceafrica.com/article/kente-master" style="color:red">Face2FaceAfrica</a><br>

                            <a href="http://thevoix.com/kente-masters-story-how-one-social-enterprise-weaves-history-to-the-present/" style="color:red">The Voix</a><br>
                            Check out our <a style="color: red" href="https://medium.com/@davidtamsey/meet-peter-paul-akanko-the-knust-graduate-making-kente-stoles-for-ivy-league-schools-65905ac4a99d">Medium post on Kente Master</a><br>
                            Check out our Youtube video on <a style="color: red" href="https://youtu.be/nxezYEoVzAU">Accelerating Tech Business Innovation in Ghana</a>
                            </p>
                           
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4>Our Social Impact</h4>
                            <p>We Align with the Sustainable Development Goals (SDGs). 
                                Kente Master works with various weaving communities in Ghana, creating newer and wider markets for them through our global customer base and helping to economically empower them and give them a better livelihood (SDG 8).<br>
                                Also, for every product purchased from us 1 cedi is donated to our partner companies to help promote Health (SDG 3), Education (SDG 4) and Climate Action (SDG 13)
                            </p>
                           
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4>Our Clients and Partners</h4>
                            
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="penn.png">
                                </div>

                                <div class="col-sm-4">
                                    <img src="makuu.png"> 
                                </div>

                                <div class="col-sm-4">
                                    <img src="Enactus.png"> 
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="can.png">
                                </div>

                                <div class="col-sm-4">
                                    <img src="PSOM.png"> 
                                </div>

                                <div class="col-sm-4">
                                    <img src="Dartmouth.png"> 
                                </div>
                                
                            </div>

                        </div>


                        <div class="about-details-cap mb-50">
                            <h4>How our Kente is made</h4>
                            <p>Kente Master has formed partnerships with various weaving associations in Ghana who create Kente through the same traditional means by which it was first woven centuries ago. This means they handcraft and design everything: thread, color, pattern, weaving, and seaming, ultimately leaving the consumer with an authentic, quality product that confers Royal Heritage. We also work with other artisans to make High Quality innovative products such as clothing and accessories to meet current market needs.
                           
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        

     
        <!-- Shop Method End-->
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
