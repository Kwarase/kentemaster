<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function logged_in(){
if (isset($_SESSION["customer_id"])){
    return true;
};
    return false;
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



//funtion to check for login
function checkLogin(){
  
    return isset($_SESSION['userLogin']);
}




//function to get user ID


//function to check for role (admin, customer, etc)
function checkUserRole($rolevalue)
{
    if ($rolevalue === '1') {
        return true;
    } else {
        return false;
    }
}

function session_login ($customer_id, $user_role){
    $_SESSION["customer_id"] = $customer_id;
    $_SESSION["user_role"] = $user_role;
}

//function to get user ID
function user_ID(){
    return $_SESSION["customer_id"];
}

//function to check for role (admin, customer, etc)
function admin_user(){
    return $_SESSION["user_role"] == 2;
    
}

//function to check for logout
function logged_out(){
 unset ($_SESSION["customer_id"]);
 unset ($_SESSION["user_role"]);
}


//function to check for role (admin, customer, etc)
function check_user_role(){
	return $_SESSION['user_role'];
	
		//header('location:../index.php);
	
}

function check_login_index()
{
    if(!isset($_SESSION['customer_id']))
 {
    header('location:login/logout.php');
 }
}

?>