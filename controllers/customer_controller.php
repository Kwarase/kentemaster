<?php
//connect to the user account class
include("../classes/customer_class.php");



//--INSERT--//
function add_customer_ctrl($a, $b, $c, $d, $e, $f){

// creating an instance
  $add = new customer_class();

// return method
  return $add -> insert_customer($a, $b, $c, $d, $e, $f);
}

function updateCustomer_ctr($customer_id,$fname, $mname, $lname, $email, $phone, $password, $user_role){
    $customer=new customer_class;
    return $customer->updateCustomer($customer_id,$fname, $mname, $lname, $email, $phone, $password, $user_role);
  }

  function deleteCustomer_ctr($customer_id){
    $customer=new customer_class;
    return $customer->deleteCustomer($customer_id);
  }

  function selectAll_ctr(){
    $customer=new customer_class;
    return $customer->selectAll();
  }

  function select_customer_ctrl($customer_email){
    $customer=new customer_class;
    return $customer->select_customer($customer_email);
  }

  function checkPassword_ctr($customer_email,$password){
    $customer=new customer_class;
    return $customer->checkPassword($customer_email,$password);
  }
