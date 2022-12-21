<?php
require("../controllers/customer_controller.php");

session_start();
if(isset($_POST['login'])){
    $customer_email=$_POST['email'];
    $customer_pass=$_POST['password'];
    $hashed_password = base64_encode($customer_pass);

    $login=checkPassword_ctr($customer_email,$hashed_password );
    if($login){
 
        $_SESSION['customer_id'] = $login['customer_id'];
        $_SESSION['firstname'] = $login['firstname'];
        $_SESSION['middlename'] = $login['middlename'];
        $_SESSION['lastname'] = $login['lastname'];
        $_SESSION['customer_email'] = $login['customer_email'];
        $_SESSION['phone'] = $login['phone'];
        $_SESSION['password'] = $login['password'];
        $_SESSION['user_role'] = $login['user_role'];
        $_SESSION['userLogin']=true; 
        if($_SESSION['user_role']  == 1){
            header("location:../admin/admin_main.php");

        }
        else{
            header("location:../view/home.php");
        }

    }
    else{
        echo "<script> alert('Wrong Email or Password')</script>";
    }

}

?>