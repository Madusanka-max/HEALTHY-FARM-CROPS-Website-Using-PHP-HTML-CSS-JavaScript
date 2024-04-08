<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		
	</title>

	<link rel="stylesheet" href="css/style12.css">
</head>
<center>
<body>
	<header>
		<div class="btn">

			<form method="POST" action="Seller_in_AdminPANEL.php">
				<input type="submit" value="BACK"  >
			</form>

		</div>
	</header>

	<div class="search">

	<?php 

		include 'db_conn.php';

		$key = $_POST['key']; 

		$sql = "SELECT * FROM buyer WHERE username = '$key'";

		$result = $conn ->query($sql);

		if ($result->num_rows >= 0) {



		 
		echo '<table border = 1 >';
			echo '<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Contactno<th>

					
				</tr>';
		

		while($row =$result ->fetch_assoc()){

			echo '<tr>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['contactno'].'</td>
					
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