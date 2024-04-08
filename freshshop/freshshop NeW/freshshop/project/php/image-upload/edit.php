
<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM productsdetails 
WHERE ProductID = '".$_POST["ProductID"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["ProductName"]);
 $output['ProductName'] = $file_array[0];
 $output['ProductPrice'] = $row["ProductPrice"];
 $output['ProductQuantity'] = $row["ProductQuantity"];
 $output['ProductDetail'] = $row["ProductDetail"];
}

echo json_encode($output);

?>
