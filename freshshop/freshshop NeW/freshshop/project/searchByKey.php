<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>
		
	</title>

	<link rel="stylesheet" href="css/style12.css">

</head>
<center>
<body style="background-color: #00b7eb;">
	<header>
		<div class="btn">

			<form method="POST" action="B-cart.php">
				<input type="submit" class="btn btn-warning" value="BACK TO SHOP"  >
			</form>

		</div>
	</header>

	<div class="search">

	<?php 

	include 'database.php';

	$key = $_POST['key']; 

	$sql = "SELECT * FROM productstb WHERE productname = '$key'";

	$result = $conn ->query($sql);

	if ($result->num_rows >= 0) {



		 
		echo '<table border = 1 >';
			echo '<tr>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Date</th>
					<th>Description<th>
					
				</tr>';
		

		while($row =$result ->fetch_assoc()){

			echo '<tr>
					<td>'.$row['productname'].'</td>
					<td>'.$row['productquantity'].'</td>
					<td>'.$row['productprice'].'</td>
					<td>'.$row['date'].'</td>
					<td>'.$row['productdescription'].'</td>
					
				  <tr>';
		}

		echo '</table>';
		

		
	}else{
		echo 'Product Name does not exist';
	}


	

?>
</div>
</body>
</center>
</html>