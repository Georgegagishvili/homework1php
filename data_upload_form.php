<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container card">
		<form method="POST" action="check_data.php">
		  <div class="form-group">
		    <label>Product Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" name="product_name">
		    
		  </div>
		  <div class="form-group">
		    <label>Description</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Desc." name="description">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Upload To Database</button>

		  <a href="select.php">
		  	<button 
		  		type="button" class="btn btn-primary" style = "background: green;">View Database Items
		  	</button>
		  </a>

		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>