<?php
//delete.php

include('database_connection.php');

if(isset($_POST["ProductID"]))
{
 $file_path = 'files/' . $_POST["ProductName"];
 if(unlink($file_path))
 {
  $query = "DELETE * FROM productsdetails WHERE ProductID = '".$_POST["ProductID"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>

