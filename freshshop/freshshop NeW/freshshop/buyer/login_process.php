<?php
    require_once("config.php");

    if(isset($_POST['sublogin'])){

        $login=$_POST['login_var'];
        $password=$_POST['password'];
        $query = "select * from buyer where (username ='$login' OR email='$login')";
        $res = mysqli_query($dbc,$query);
        $numRows=mysqli_num_rows($res);
        if($numRows == 1){
            $row = mysqli_fetch_assoc($res);
            if(password_verify($password,$row['password'])){
                $_SESSION["login_sess"]="1";
                  $_SESSION["login_email"]= $row['email'];

            header("location: ../project/B-cart.php");
            }
            else{
            header("location:login.php?loginerror=".$login);exit();
            }
        }
        else{
            header("location:login.php?loginerror=".$login);exit();
        }
    }

?>