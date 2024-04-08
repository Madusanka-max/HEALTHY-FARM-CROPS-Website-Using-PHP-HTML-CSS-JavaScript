<?php

	include 'database.php';

	$sql = "SELECT * FROM productstb";

	$result = $conn->query($sql);

	if($result->num_rows > 0){

		echo '<table border = 1>';
			echo '<tr>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Date</th>
				</tr>';
		

		while($row =$result->fetch_assoc() ){

			echo '<tr>
					<td>'.$row['productname'].'</td>
					<td>'.$row['productquantity'].'</td>
					<td>'.$row['productprice'].'</td>
					<td>'.$row['date'].'</td>
				  <tr>';
		}

		echo '</table>';
	}else{
		echo 'Empty table';
	}

?>