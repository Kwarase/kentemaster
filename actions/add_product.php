<?php
include '../controllers/product_controller.php';


if (isset($_POST['addProduct']) ) {
    //$temp = explode(".", $_FILES['image']['name']);
    //$newfilename = round(microtime(true)) . '.' . end($temp);
    $target= "../images/".basename($_FILES['image']['name']);
    $product_category=$_POST['category'];
    $product_name= $_POST['name'];
    $product_price= $_POST['price'];
    $product_description= $_POST['description'];
    $product_image= $_FILES['image']['name'];
    $product_search_words= $_POST['keywords'];
    //echo $target;
      $check= add_product_ctr($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words);
      if ($check) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg= "success";
          # code...
        }else {
          $msg= "fail";
        }
          header ("location:../admin/admin_viewproduct.php");
        //echo "success";
      } else {
        echo "fail";
      }
      
    }
    

//Edit product
if (isset($_POST['updateProduct'])) {
    $product_category=$_POST['category'];
    $product_name= $_POST['name'];
    $product_price= $_POST['price'];
    $product_description= $_POST['description'];
    $product_image= $_FILES['image']['name'];
    $product_search_words= $_POST['keywords'];
    $prod_id = $_POST['p_id'];
    
    $addprod = update_product_ctr(
        $prod_id,
        $product_category,
        $product_name,
        $product_price,
        $product_description,
        $product_image,
        $product_search_words
    );

    if ($addprod == true) {
        header('location:../admin/admin_viewproduct.php');
    } else {
        header('location:../admin/product.php');
    }
}



//action to remove the product
if(isset($_GET['deletePID'])){
   
     
    $product_id = $_GET['deletePID'];
   
    
  
    $delprod=delete_product_ctr($product_id);
    if($delprod){
    header('Location: ../admin/admin_viewproduct.php');
    }

}




?>