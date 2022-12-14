<?php
//connect to database class
require_once("../settings/dbclass.php");

/**
*Customer class to handle all customer functions 
*/
/**
 *@author Emmanuel Kwarase
 *
 */

class customer_class extends db_connection
{
	//--INSERT--//
	function insert_customer($a, $b, $c, $d, $e, $f)
	{
		$sql = "INSERT INTO `customer`(`firstname`, `middlename`, `lastname`, `customer_email`, `phone`, `password`, `user_role`) VALUES ('$a','$b','$c','$d','$e', '$f', '2')";

		return $this->db_query($sql);
	}

	//--SELECT--//
	function login_customer($d){

		$sql =" SELECT * FROM `customer` WHERE `customer_email` = '$d'";

		return $this -> db_fetch_one($sql);
	}

	function user_email($customer_id){
		$sql = "SELECT `customer_email` FROM `customer` WHERE `customer_id` = '$customer_id'";

		return $this -> db_fetch_one($sql);
	}
	
    function updateCustomer($customer_id,$fname, $mname, $lname, $email, $phone, $password, $user_role){
        $sql="UPDATE `customer` SET `firstname`='$fname',`middlename`='$mname',`lastname`='$lname',`customer_email`='$email',`phone`='$phone',`password`='$password', `user_role`='$user_role' WHERE `customer_id`='$customer_id'";
        return $this->db_query($sql);

    }

    function deleteCustomer($customer_id){
        $sql="DELETE FROM `customer` WHERE `customer_id`='$customer_id'";
        return $this->db_query($sql);
    }

    function selectAll(){
        $sql="SELECT * FROM `customer` ";
        return $this->db_fetch_all($sql);
    }

    function select_customer($customer_email){
        $sql="SELECT * FROM `customer` WHERE `customer_email`='$customer_email' ";
        return $this->db_fetch_one($sql);
    }

    function checkPassword($customer_email,$password){
        $sql="SELECT * FROM `customer` WHERE `customer_email`='$customer_email' and `password`='$password'";
        return $this->db_fetch_one($sql);
    }

}

?>