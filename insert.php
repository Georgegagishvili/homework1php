<?php 
	require_once("db.php");
	if (isset($_GET["product_name"])){
		$product_name=mysqli_real_escape_string($conn,$_GET["product_name"]);
		$sql="INSERT INTO `products`( `product_name`, `description`, `created_at`) VALUES ('$product_name','11','00-00-00')";
		if ($conn->query($sql)===TRUE){
			echo "success";
		}
		else{
			echo "error". $conn->error;
		}
	}
?>