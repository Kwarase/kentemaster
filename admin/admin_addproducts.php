<?php
include("../settings/core.php");
include ("../controllers/product_controller.php");


$Allcategories = select_all_categories_ctr();
if (isset($_GET['editPID'])) {
    $select_one_product = select_product_ctr($_GET['editPID']);
    // print_r($select_one_product);
}

// page if admin logs in
if (isset($_SESSION['user_role']) == '1') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/admin.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Admin | Add/add_product</title>
    </head>

    <body>
        <!-- user profile -->
        <div class="us_container">
        <div class="sidebar">
                <div class="content">

                    <div class="logo" style="padding: 20px 0; color:white;">
                        <h4>KENTEMASTER</h4>
                    </div>

                    <!-- menu -->
                    <p class="sm">Menu</p>


                    <div class="menuItems">
                        <a href="./admin_main.php" class="menuItem">
                            <div class="icon">
                                <!-- icon -->
                                <i class='bx bxs-dashboard'></i>

                            </div>
                            <p class="m_name">Dashboard</p>
                        </a>
                        <a href="./admin_orders.php" class="menuItem">
                            <div class="icon">
                                <i class='bx bx-store-alt'></i>
                            </div>
                            <p class="m_name">Orders</p>
                        </a>


                        <a href="./admin_viewproduct.php" class="menuItem">
                            <div class="icon">
                            <i class='bx bx-show'></i>
                                <!--  -->
                            </div>
                            <p class="m_name">View Product</p>
                        </a>
                        <a href="./admin_addproducts.php" class="menuItem active">
                            <div class="icon">
                            <i class='bx bx-message-square-add'></i>
                                <!--  -->
                            </div>
                            <p class="m_name">Add Product</p>
                        </a>

                        <a href="./admin_categories.php" class="menuItem">
                            <div class="icon">
                            <i class='bx bxs-customize'></i>
                                <!-- <img src="../assets/icons/bx_bxs-category-alt.svg" alt=""> -->
                            </div>
                            <p class="m_name">Categories</p>
                        </a>

                        <a href="./admin_customers.php" class="menuItem">
                            <div class="icon">
                            <i class='bx bxs-user'></i>
                                <!-- <img src="../assets/icons/bi_people-fill.svg" alt=""> -->
                            </div>
                            <p class="m_name">Customers</p>

                        <a href="./admin_payments.php" class="menuItem">
                            <div class="icon">
                            <i class='bx bxs-discount'></i>
                                <!-- <img src="../assets/icons/fluent_payment-24-filled-white.svg" alt=""> -->
                            </div>
                            <p class="m_name">Payments</p>
                        </a>

                        <a href="../login/logout.php" class="menuItem">
                            <div class="icon">
                            <i class='bx bxs-user-minus'></i>
                                <!-- <img src="../assets/icons/ri_logout-circle-fill.svg" alt=""> -->
                            </div>
                            <p class="m_name">Logout</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="side-content">
                <div class="content">
                    <div class="heading">
                        <?php
                        if (isset($_GET['editPID'])) {
                        ?>
                            <p>Edit Product</p>
                        <?php
                        } else {
                        ?>
                            <p/add_product</p>
                        <?php
                        }
                        ?>
                    </div>

                    <!-- add-product form -->
                    <div class="addProduct">
                        <form action="../actions/add_product.php" method="POST" enctype="multipart/form-data">
                            <div class="flex">
                                <div class="form-control">
                                    <label for="">Select Category</label>
                                    <select name="category" id="category">
                                        <option value="--Select Category--" selected>--Category--</option>
                                        <?php
                                        if (isset($_GET['editPID'])) {
                                            echo "<option value='$select_one_product[cat_id]' selected>$select_one_product[cat_name]</option>";
                                            foreach ($Allcategories as $category) {
                                                echo "<option value='$category[cat_id]'>$category[cat_name]</option>";
                                            }
                                        } else {
                                            echo "<option disabled hidden>Select Product Category</option>";
                                            foreach ($Allcategories as $category) {
                                                echo "<option value='$category[cat_id]'>$category[cat_name]</option>";
                                            }
                                        }

                                        ?>
                                        ?>
                                    </select>
                                    <small></small>
                                </div>

                            </div>
                            <div class="flex">
                                <div class="form-control">
                                    <label for="">Name</label>
                                    <?php
                                    if (isset($_GET['editPID'])) {
                                        echo "<input type='text' placeholder='' name='prod_title' id='pname' value='$select_one_product[product_name]'>";
                                    } else {
                                        echo "<input type='text' placeholder='' name='prod_title' id='pname'>";
                                    }

                                    ?>
                                    <small></small>
                                </div>
                                <div class="form-control">
                                    <label for="">Price</label>
                                    <?php
                                    if (isset($_GET['editPID'])) {
                                        echo "<input type='text' placeholder='' name='prod_pri' id='price' value='$select_one_product[product_price]'>";
                                    } else {
                                        echo "<input type='text' placeholder='' name='prod_pri' id='price'>";
                                    }

                                    ?>
                                    <small></small>
                                </div>
                            </div>

                            
                            <div class="form-control">
                                <label for=""> <?php echo isset($_GET['editPID']) ? '' : "Image" ?> </label>
                                <?php
                                if (isset($_GET['editPID'])) {
                                    echo "";
                                } else {
                                    echo "<input type='file' name='image' id='image' accept='image/*'>";
                                }

                                ?>
                                <!-- <input type="file" name="image" id="image" accept="image/*"> -->
                                <small></small>
                            </div>
                            <div class="form-control spc">
                                <label for="">Description</label>
                                <?php
                                if (isset($_GET['editPID'])) {
                                    echo '<textarea name="prod_desc" id="desc" cols="30" rows="10">' . $select_one_product['product_description'] . '</textarea>';
                                } else {
                                    echo '<textarea name="prod_desc" id="desc" cols="30" rows="10"></textarea>';
                                }

                                ?>
                                <small></small>
                            </div>
                            
                                <div class="form-control">
                                    <label for="">Keyword</label>
                                    <?php
                                    if (isset($_GET['editPID'])) {
                                        echo '<input type="text" name="prod_key" id="keyword" value=' . $select_one_product['product_search_words'] . '>';
                                    } else {
                                        echo '<input type="text" name="prod_key" id="keyword">';
                                    }

                                    ?>
                                    <small></small>
                                </div>
                            </div>
                            
                            <input type="hidden" name="p_id" value="<?php echo isset($_GET['editPID']) ? $select_one_product['product_id'] : '' ?>">

                            <div class="form-control">
                                <button name="<?php 
                                
                                if(isset($_GET['editPID'])){
                                    echo "updateProduct";
                                }
                                else{
                                    echo "addProduct";
                                }
                                    
                                ?>" id="addProduct"><?php 
                                
                                if(isset($_GET['editPID'])){
                                    echo "Update Product";
                                }
                                else{
                                    echo "Add Product";
                                }?>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/js/accordion.js"></script>
        <script src="../js/productval.js"></script>

    </body>

    </html>
<?php
} else {
    ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="../assets/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <!-- animate css -->
        <link rel="stylesheet" href="../assets/css/animate.css">
        <!-- mean menu css -->
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="../assets/css/main.css">
        <!-- responsive -->
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->

        <!-- sweet alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </head>
   <body>
   <input type="hidden" name="" id="alert" value="<?php echo $message; ?>">
   <script>
            
                Swal.fire({
                    title: 'Access Denied',
                    text: 'You cannot access this page because you are not an admin',
                    icon: 'warning',
                    confirmButtonText: 'Okay'
                }).then(() => {
                    window.location.href = '../index.php'
                })
            

        </script>
    
   </body>
   </html>

   <?php
}


