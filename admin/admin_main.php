<?php
include("../settings/core.php");
include ("../controllers/product_controller.php");
include ("../controllers/cart_controller.php");
include ("../controllers/customer_controller.php");

$pendingOrders = sum_pending_orders_ctr();
$orderCount = count_orders_ctr();
$productCount = count_products_ctr();
$approvedOrders = sum_approved_orders_ctr();
$ordersAdmin = select_order_admin_ctr();

if (isset($_SESSION['user_role']) == '1') {

    // page if admin logs in

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
        <title>Admin | Dashboard</title>
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
                        <a href="./admin_main.php" class="menuItem active">
                            <div class="icon">
                                <!-- icon -->
                                <i style="color: white;" class='bx bxs-dashboard'></i>

                            </div>
                            <p class="m_name">Dashboard</p>
                        </a>
                        <a href="./admin_orders.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bx-store-alt'></i>
                            </div>
                            <p class="m_name">Orders</p>
                        </a>


                        <a href="./admin_viewproduct.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bx-show'></i>
                                <!--  -->
                            </div>
                            <p class="m_name">View Product</p>
                        </a>
                        <a href="./admin_addproducts.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bx-message-square-add'></i>
                                <!--  -->
                            </div>
                            <p class="m_name">Add Product</p>
                        </a>

                        <a href="./admin_categories.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bxs-customize'></i>
                                <!-- <img src="../assets/icons/bx_bxs-category-alt.svg" alt=""> -->
                            </div>
                            <p class="m_name">Categories</p>
                        </a>

                        <a href="./admin_customers.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bxs-user'></i>
                                <!-- <img src="../assets/icons/bi_people-fill.svg" alt=""> -->
                            </div>
                            <p class="m_name">Customers</p>
                        </a>

                        <a href="./admin_payments.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bxs-discount'></i>
                                <!-- <img src="../assets/icons/fluent_payment-24-filled-white.svg" alt=""> -->
                            </div>
                            <p class="m_name">Payments</p>
                        </a>

                        <a href="../login/logout.php" class="menuItem">
                            <div class="icon">
                                <i style="color: white;" class='bx bxs-user-minus'></i>
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
                        <p>Orders</p>

                    </div>

                    <div class="stats_plaque">
                        <div class="stat_items">
                            <div class="stat_item">
                                <div class="icon ic1">
                                    <!--  -->
                                    <i style="color: white;" class='bx bxs-spreadsheet'></i>
                                </div>
                                <div class="textDetails">
                                    <p>All Products</p>
                                    <h2><?php echo $productCount['count'] ?></h2>
                                </div>
                            </div>
                            <div class="stat_item">
                                <div class="icon ic2">
                                    <!--  -->
                                    <i style="color: white;" class='bx bx-cart-alt'></i>
                                </div>
                                <div class="textDetails">
                                    <p>Total Orders</p>
                                    <h2><?php echo $orderCount['count'] ?></h2>
                                </div>
                            </div>
                            <div class="stat_item">
                                <div class="icon ic4">
                                    <!--  -->
                                    <i style="color: white;" class='bx bxs-radiation'></i>

                                </div>
                                <div class="textDetails">
                                    <p>Orders Pending</p>
                                    <h2><?php echo $pendingOrders['result'] ?></h2>
                                </div>
                            </div>
                            <div class="stat_item">
                                <div class="icon ic3">
                                    <!--  -->
                                    <i style="color: white;" class='bx bxs-message-alt-check'></i>
                                </div>
                                <div class="textDetails">
                                    <p>Orders Approved</p>
                                    <h2><?php echo $approvedOrders['result'] ?></h2>
                                </div>
                            </div>
                        </div>

                        <!-- other items -->
                        <div class="other_plaques">
                            <div class="top_rated">
                                <div class="heading">
                                    <h3>New orders</h3>
                                </div>
                                <div class="table">
                                    <table>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Invoice No</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
                                            <!-- <th>Actions</th> -->
                                        </tr>
                                        <?php
                                        foreach ($ordersAdmin as $order) {
                                        ?>
                                            <tr>
                                                <td><?php echo $order['order_id']; ?></td>
                                                <td><?php echo $order['firstname'] ?></td>
                                                <td><?php echo $order['invoice_no']; ?></td>
                                                <td><?php echo $order['order_date']; ?></td>
                                                <td><?php echo $order['order_status']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sweet alert code -->
        
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
