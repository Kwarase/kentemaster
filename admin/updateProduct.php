<?php
require_once("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $product_id=$_POST['pId'];
    $product_category= $_POST['mycat'];
    $product_name=$_POST['pname'];
    $product_price=$_POST['pprice'];
    $product_description=$_POST['pdesc'];
    $product_search_words=$_POST['pkeyword'];
    
    
          $result = updateProduct_ctr($product_id,$product_category, $product_name, $product_price, $product_description, $product_search_words);
          if($result){
              echo "success";
              header("location:../view/admin.php?message2=success");
          }else{
              echo "failed";
              header("location:../view/admin.php");
          }
     



    

}
?>
