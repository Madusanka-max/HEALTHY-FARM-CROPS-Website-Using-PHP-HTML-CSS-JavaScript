<?php require_once("config.php"); ?>
 <?php
if(isset(['place'])) {
 
 
    $productname = ['item_name'];
    $productquantity = ['item_quantity'];
    $productprice = ['item_price'];
    $total = ['total'];
    $grandTotal =['grandTotal'];


    
    $insert = ("INSERT INTO order(productname, productquantity,productprice,total,grandTotal) 
            VALUES ('$productname','$productquantity','$productprice','$total','$grandTotal')");
    $qry =  mysqli_query($dbc,$insert);

    if($qry) {
        echo "inserted";
            header("location: checkout.php");
    }
    else{
        echo "error";
    }       
}

mysqli_close($dbc);
?>