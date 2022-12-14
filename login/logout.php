<?php
// session_start();

// //function to check for logout
//     unset ($_SESSION["customer_id"]);
//     unset ($_SESSION["user_role"]);
//     header('Location: ../index.php');

require_once("../settings/core.php");

function destroyallSessions(){
    if(isset($_GET['Logout'])){
        session_destroy();
        header("location:../index.php");
    }
}

destroyallSessions();



?>