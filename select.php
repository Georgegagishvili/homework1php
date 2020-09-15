<?php 
	require_once("db.php");
	$sql="SELECT * FROM `products` WHERE 1";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) { 
		echo "Item ID: ".$row["id"]."<br>";
		echo "Product Name: ".$row["product_name"]."<br>";
		echo "Product Description:".$row["description"]."<br>";
		echo "Created at: ".$row["created_at"]."<br>";
		echo "<br>";
	}
?>
