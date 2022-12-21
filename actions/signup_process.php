<?php
require("../controllers/customer_controller.php");


    $fname=$_POST['firstname'];
    $mname=$_POST['middlename'];
    $lname=$_POST['lastname'];
    $email=$_POST['customer_email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $user_role=2;

    $hashed_password = base64_encode($password);

    if(select_customer_ctrl($email)===NULL){
        $register=add_customer_ctrl($fname, $mname, $lname, $email, $phone, $hashed_password, $user_role);
        if($register){
            header("location:../login/login.php");

        }
        else{
            echo"<script> alert('Registration Unsuccessful');
            </script>";
            header("location:../login/signup.php");
        }

    }
    else{
        echo "
        <script> alert('Email Already Exist');
            </script>
        
        ";
    }




?>