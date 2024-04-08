<?php

	include 'db_conn.php';

	$sql = "SELECT * FROM buyer";

	$result = $conn->query($sql);

	if($result->num_rows > 0){

		echo '<table border = 1>';
			echo '<tr>
					<th>User Name</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Contactno<th>
				</tr>';
		

		while($row =$result->fetch_assoc() ){

			echo '<tr>
					<td>'.$row['username'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['contactno'].'</td>
				  <tr>';
		}

		echo '</table>';
	}else{
		echo 'Empty table';
	}

?>