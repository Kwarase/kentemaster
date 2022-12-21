<?php
include("../settings/core.php");
include ("../controllers/cart_controller.php");


if (isset($_SESSION['customer_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == '1') {

        if (isset($_GET['a_id'])) {
            $order_id = $_GET['a_id'];
            $order_status = "Approved";
            $result = approve_order_controller($order_id, $order_status);
            if ($result) {
                header('Location: ../admin/admin_orders.php?message=success');
            }
            else{
                header('Location: ../admin/admin_orders.php?message=failed');
            }
        }

        if (isset($_GET['cancel_id'])) {
            $order_id = $_GET['cancel_id'];
            $result = approve_order_controller($order_id, 'Cancelled');

            if ($result) {
                header('Location: ../admin/admin_orders.php?message=successCancel');
            } else {
                header('Location: ../admin/admin_orders.php?message=failedCancel');

            }
        }
    } else {
    }
}
