<?php 
	require_once("db.php");
	if (isset($_POST['product_name'],$_POST["description"])) {
		$product_name=mysqli_real_escape_string($conn,$_POST["product_name"]);
		$description=mysqli_real_escape_string($conn,$_POST["description"]);
		if (empty($product_name) OR empty($description)){
			echo "<a href = 'login.php'>Enter Product Name & Description if you want to insert them.</a>";
		}
		else{
			$sql="INSERT INTO `products`( `product_name`, `description`) VALUES ('$product_name','$description')";
			$result=$conn->query($sql);
			if ($conn->query($sql)===TRUE){
				echo "<h1>Successfully inserted data.</h1>";
			}
			else{
				echo "Sorry, but data was not inserted.". $conn->error;
			}
		}
	}

?>