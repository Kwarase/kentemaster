<?php
		include ("../controllers/product_controller.php");

	
		
		$brand;
		//Getting the searched data
		if(isset($_GET['submit'])){
			$category = $_GET['search'];
			
		   echo($category);
		   $custid = $_GET['customer_id'];
		
		
			$searchresults=search_product_ctr($category);

		
			
			header('Location: ../view/search_product_ctr.php?category_id='.$category.'&customer_id='.$custid);
		}
		
		?>