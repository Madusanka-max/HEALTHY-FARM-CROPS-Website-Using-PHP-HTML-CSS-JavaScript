
<?php
//update.php

include('database_connection.php');

if(isset($_POST["ProductID"]))
{
 $old_name = get_old_ProductName($connect, $_POST["ProductID"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["ProductName"] . '.' . $file_extension;
 $query = '';
 if($old_name != $new_name)
 {
  $old_path = 'files/' . $old_name;
  $new_path = 'files/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE productsdetails SET ProductName = '".$new_name."', ProductPrice = '".$_POST["ProductPrice"]."', ProductQuantity = '".$_POST["ProductQuantity"]."', ProductDetail = '".$_POST["ProductDetail"]."' WHERE ProductID = '".$_POST["ProductID"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE productsdetails SET ProductPrice = '".$_POST["ProductPrice"]."', ProductQuantity = '".$_POST["ProductQuantity"]."', ProductDetail = '".$_POST["ProductDetail"]."' WHERE ProductID = '".$_POST["ProductID"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_ProductName($connect, $ProductID)
{
 $query = "
 SELECT ProductName FROM productsdetails WHERE ProductID = '".$ProductID."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["ProductName"];
 }
}

?>
