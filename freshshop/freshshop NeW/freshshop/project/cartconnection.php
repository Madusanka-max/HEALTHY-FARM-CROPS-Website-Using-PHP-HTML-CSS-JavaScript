<?php 
    /*
    include "../config.php";
    if(!isset($_SESSION["login_sess"])) 
    {
        header("location: ../index.php"); 
    }
    $email=$_SESSION["login_email"];
    $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
    if($res = mysqli_fetch_array($findresult))
    {
        $userid = $res['id'];
    }*/
    
    if(isset($_POST['add_to_cart'])) {
        $pipup = $_POST['hiddenpid'];
        $productnameup = $_POST['hiddenproductname'];
        $productquantityup = $_POST['hiddenproductquantity'];
        $productpriceup = $_POST['hiddenproductprice'];
        $productdescriptionup = $_POST['hiddenproductdescription'];
        $dateup = $_POST['hiddendate'];
        $selleridup = $_POST['hiddensellerid'];

        
        echo "$pipup <br> $productnameup <br> $productquantityup <br> $productpriceup <br> $productdescriptionup <br> $dateup <br> $selleridup";
        header("location: Item.php");
    }
?>