<?php
require("../controllers/product_controller.php");

$product_id=$_GET['id'];


$deleteProduct= deleteProduct_ctr($product_id);


if(!$deleteProduct){
    echo "<script>alert('Cart item could not delete');</script>";

}
else{
   
    header("location:../view/admin.php?message=success");
}


?>