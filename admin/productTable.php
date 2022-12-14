<?php

require_once("../controllers/product_controller.php");
function myproductViewTable_fnc()
{
    
    $data = selectAllProduct_ctr();
    echo "

    <table class='table'>
    <thead class='table-warning'>
        <tr>
        <th scope='col'>Image</th>
          <th scope='col'> Product</th>
          <th scope='col'>Price</th>
          <th scope='col'>Description</th>
          
          <th scope='col'>Delete</th>
          <th scope='col'>Edit</th>
        </tr>
      </thead>
      <tbody>
    
    ";

    foreach ($data as $product) {
        $productId=$product['product_id'];
        $productName=$product['product_name'];
        $productPrice=$product['product_price'];
        $productDescription=$product['product_description'];
        $productImage=$product['product_image'];
        $productKeyword=$product['product_search_words'];

        myProductsaddcart_fnc($productId,$productName,$productPrice,$productDescription,$productImage,$productKeyword);
    }

    echo "
    </tbody>
</table>";
}

function myProductsaddcart_fnc($productId,$productName,$productPrice,$productDescription,$productImage,$productKeyword)
{
    echo "
    <tr>
    <td><img src='$productImage' alt='$productName' width='100px' height='100'></td>
      <td>$productName</td>
      <td>$productPrice</td>
      <td>$productDescription</td>
      
      <td>
      <a href ='../admin/deleteProduct.php?id=$productId&pname=$productName&pprice=$productPrice&pdes=$productDescription&pimage=$productImage&pkeyword=$productKeyword' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '../view/updateProduct.php?id=$productId&pname=$productName&pprice=$productPrice&pdes=$productDescription&pimage=$productImage&pkeyword=$productKeyword' class='btn btn-dark btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil'></i></a>
      </td>
    </tr>
    ";
}

?>