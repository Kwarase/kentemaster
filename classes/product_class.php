<?php
//connect to database class
include("../settings/dbclass.php");

class product_class extends db_connection
{
    /**
     * Category Functions
     */

    
    //Add Category
    function add_category_cls($category)
    {
        $mysql = "INSERT INTO `categories`(`cat_name`) VALUES ('$category')";
        return $this->db_query($mysql);
    }

    //Select All Category
    function select_all_categories_cls()
    {
        $mysql = 'SELECT * FROM `categories`';
        return $this->db_fetch_all($mysql);
    }

    //Select One Category
    function select_one_category_cls($ctg_id)
    {
        $mysql = "SELECT `cat_name`,`cat_id` FROM `categories` WHERE `cat_id`='$ctg_id'";
        return $this->db_fetch_one($mysql);
    }

    //Update Category
    function update_one_category_cls($ctg_id, $category)
    {
        $mysql = "UPDATE `categories` SET `cat_name` = '$category' WHERE `cat_id`=$ctg_id";
        return $this->db_query($mysql);
    }

    //Delete brand
    function delete_category_cls($ctg_id)
    {
        $sql = "DELETE FROM `categories` WHERE cat_id = '$ctg_id'";
        return $this->db_query($sql);
    }



     /**
      * Product Funstionss
      */

    function createProduct($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words){
        $sql="INSERT INTO `products`(`product_category`, `product_name`, `product_price`, `product_description`, `product_image`, `product_search_words`) VALUES ('$product_category ','$product_name','$product_price','$product_description',' $product_image','$product_search_words')";
        return $this->db_query($sql);

    }

    function deleteProduct($product_id){
        $sql="DELETE FROM `products` WHERE `product_id`='$product_id'";
        return $this->db_query($sql);
    }

    function updateProduct($product_id,$product_category, $product_name, $product_price, $product_description,$product_search_words){
        $sql="UPDATE `products` SET `product_category`='$product_category',`product_name`='$product_name',`product_price`='$product_price',`product_description`='$product_description',`product_search_words`=' $product_search_words' WHERE `product_id`='$product_id'";
        return $this->db_query($sql);
    }

    function selectAllProduct(){
        $sql="SELECT * FROM `products`";
        return $this->db_fetch_all($sql);
    }

    function selectAProduct($product_id){
        $sql="SELECT * FROM `products` WHERE `product_id`='$product_id'";
        return $this->db_fetch_one($sql);
    }

    function selectProductByCategory($category){
        $sql="SELECT products.* FROM products,categories WHERE categories.category_id=products.product_category and categories.category_name LIKE '%$category%';";
        return $this->db_fetch_all($sql);
    }

    function SearchProduct($SearchItem){
        $sql="SELECT * FROM `products`,`categories` WHERE product_name LIKE '%$SearchItem%' and product_search_words LIKE '%$SearchItem%' and categories.category_name LIKE '%$SearchItem%';";
        return $this->db_fetch_all($sql);
    }
	

}

?>

?>