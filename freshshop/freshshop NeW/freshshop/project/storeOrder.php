<?php

session_start();


$con = mysqli_connect("localhost","root","","final");


if (mysqli_connect_error()) {
    echo "<script>
    alert('cannot connect to database');
    window.location.href='checkout.php';
    </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['place']))
    {      
        $Order_ID = mysql_insert_id($con);
        $query1 = ("INSERT INTO 'order' (`Order_ID`,`P_ID`,`P_Name`,`O_Quantity`,`Price`,`Total_Price`) VALUES(?,?,?,?,?,?)");
        $stmt = mysqli_prepare($con,$query1);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt,"isii",$Order_ID,$P_ID,$P_Name,$O_Quantity,$Price,$Total_Price);
            foreach($_SESSION['shopping_cart'] as $keys => $values)
            {
               $P_ID = $values['item_id'];
               $P_Name = $values['item_name'];
               $O_Quantity = $values['item_quantity'];
               $Price = $values['item_price'];
               $Total_Price =$values["item_quantity"] * $values["item_price"];
               mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['shopping_cart']);
            echo "<script>
            alert('Order placed');
            window.location.href='checkout.php';
            </script>";
        }
        else{

            echo "<script>
            alert('SQL Error');
            window.location.href='checkout.php';
            </script>";
        }



         
    }
}

?>