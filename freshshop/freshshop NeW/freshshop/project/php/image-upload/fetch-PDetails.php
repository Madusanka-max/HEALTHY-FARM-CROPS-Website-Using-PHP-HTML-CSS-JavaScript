
<?php
include('database_connection.php');
$query = "SELECT * FROM productsdetails ORDER BY ProductID  DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$output = '';
$output .= '
 <table class="table table-bordered table-striped">
  <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Price ( Rs. )</th>
    <th>Quantity (kg)</th>
    <th>Description</th>
  </tr>
';
if($number_of_rows > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td><img src="php/image-upload/files/'.$row["ProductName"].'" class="img-thumbnail" width="75" height="75" /></td>
   <td>'.$row["ProductName"].'</td>
   <td>'.$row["ProductPrice"].'</td>
   <td>'.$row["ProductQuantity"].'</td>
   <td>'.$row["ProductDetail"].'</td>
   <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["ProductID"].'">Add to Cart</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="5" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
