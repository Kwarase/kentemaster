<?php
//start session
session_start(); 

//for header redirection
ob_start();

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME'];

//funtion to check for login
function check_login(){
    if(!isset($_SESSION['customer_id'])){
        //header('location:../Login/logout.php');
        return false;
    }
    return $_SESSION['customer_id'];
}


//function to check for login index 
function check_login_index(){
    if (!isset($_SESSION['customer_id'])){
        
        return false;
    }
    return true;
 

}

//function to check whether the role is a user or admin
function inspect_admin()
{
    if($_SESSION['user_role'] == 1)
    {
        return $_SESSION['user_role'];
        header('location:../admin/admin_main.php');
    }
}

// set IP session
function check_ip()
{
    $_SESSION["ip_add"] = $_SERVER["REMOTE_ADDR"];
    //get session role
    if (isset($_SESSION["ip_add"])) {
        //assign session to an array
        return $_SESSION["ip_add"];
    }
}
