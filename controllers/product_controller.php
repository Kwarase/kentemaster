<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data
function cleanText($data)
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


/**
* Category Functions
*/
//Categories
function add_category_ctr($category)
{
    $addnewcategory= new product_class();
    return $addnewcategory->add_category_cls($category);

}

//Select All categories
function select_all_categories_ctr(){
    $allcategories= new product_class();
    return $allcategories->select_all_categories_cls();

}

//Select One category
function select_one_category_ctr($ctg_id){
    $onecategory= new product_class();
    return $onecategory->select_one_category_cls($ctg_id);

}

//Update one category
function update_category_ctr($ctg_id,$category){
    $updtcat= new product_class();
    return $updtcat->update_one_category_cls($ctg_id,$category);

}

//Delete one category
function delete_category_ctr($ctg_id){
  $deletecat = new product_class();
  return $deletecat->delete_category_cls($ctg_id);
}


/**
 *  * Product Funstions
 * */

function add_product_ctr($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words){
   $product=new product_class;
    return $product->createProduct($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words);
}

function delete_product_ctr($product_id){
    $product=new product_class;
     return $product->deleteProduct($product_id);
 }

 function update_product_ctr($product_id,$product_category, $product_name, $product_price, $product_description, $product_search_words){
    $product=new product_class;
     return $product->updateProduct($product_id,$product_category, $product_name, $product_price, $product_description, $product_search_words);
 }

 function select_allproduct_ctr(){
    $product=new product_class;
     return $product->selectAllProduct();
 }

 function select_product_ctr($product_id){
    $product=new product_class;
     return $product->selectAProduct($product_id);
 }

 function products_by_category($category){
    $product =new product_class;
    return $product->selectProductByCategory($category);
 }

 function search_product_ctr($SearchItem){
    $product = new product_class;
    return $product->SearchProduct($SearchItem);
 }


?>
