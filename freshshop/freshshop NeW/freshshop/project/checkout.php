
<!DOCTYPE html>
<?php require_once("../config.php");?>
<html lang="en">
<!-- Basic -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>HealthyFarmCrops - Checkout</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <!-- Start Add Img -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="js/fetch.js"></script>
    <!-- End Add Img -->
      
    <link rel="stylesheet" href="style.css">

    <!--start new 1-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   <!--end new 1-->

   <script language="javaScript" type="text/javascript">
        function checkDelete(){
            return confirm ('Are you sure delete this record?');
        }
    </script>
    
    
    </head>

    <body>
    <!-- Start Header -->
        <!-- Start Header -->
        <!-- Start Main Top -->
    <?php 
        include 'php/B-Header.php';
     ?>
    <!-- End Top Search -->



    

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <form action="searchByKey.php" method="post">
        <!--        <span class="input-group-addon"><i class="fa fa-search"></i></span> -->
                    <br><br><br>
                    <input type="text" name="key"  class="form-control" placeholder="Product Name">
                    <input type="submit" value="search by product name">
        <!--        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> -->
                </form>
            </div>
        </div>
    </div>

    <!-- End Top Search -->
    <br><br><br>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="B-Home.php">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start OrderDetails -->

    <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'vendor/PHPMailer/src/Exception.php';
        require 'vendor/PHPMailer/src/PHPMailer.php';
        require 'vendor/PHPMailer/src/SMTP.php';

        if(!isset($_SESSION["login_sess"])) 
            {
                header("location: ../index.php"); 
            }
            $email=$_SESSION["login_email"];
            $findresult = mysqli_query($dbc, "SELECT * FROM buyer WHERE email= '$email'");
            if($res = mysqli_fetch_array($findresult))
            {
                $id = $res['id'];
                $fname = $res['fname'];
                $lname = $res['lname'];
                $contactno =$res['contactno'];
                $address = $res['address'];
            }
        $sqlselect = "SELECT * FROM `productstb`";
        if(isset($_POST['OrderNow'])) {

            $OQuantityup = $_POST['OQuantity'];
            $pipu = $_POST['hiddepid'];
            $productnameu = $_POST['hiddeproductname'];
            $productquantityu = $_POST['hiddeproductquantity'];
            $productpriceu = $_POST['hiddeproductprice'];
            $selleridu = $_POST['hiddesellerid'];
            $Total_Price = $_POST['hiddeproductprice'] * $_POST['OQuantity'];
            $Date = date("Y-m-d");

            $sqlseller = mysqli_query($dbc, "SELECT * FROM `seller` WHERE id = '$selleridu'");
            if($res = mysqli_fetch_array($sqlseller)){

                $selleremailu = $res['email'];

            }

            //Load composer's autoloader

            $mail = new PHPMailer(true);                            
            try {
                //Server settings
                $mail->isSMTP();                                     
                $mail->Host = 'smtp.gmail.com';                      
                $mail->SMTPAuth = true;                             
                $mail->Username = 'growwithGenoxiatech@gmail.com';     
                $mail->Password = '123growG';             
                $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                );
                $mail->SMTPSecure = 'ssl';                           
                $mail->Port = 465;

                //Send Email
                $mail->setFrom('growwithGenoxiatech@gmail.com');
                
                //Recipients
                $mail->addAddress($selleremailu);              
                $mail->addReplyTo('growwithGenoxiatech@gmail.com');
                
                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = '<h1>Healthy Farm Crops Order alert</h1>';
                $mail->Body    = "<h2>Ordered by : $fname $lname</h2><h3><u>Order Details</u><br> Product ID :- $pipu<br>Product Name :- $productnameu<br>Order Quantity :- $OQuantityup Kg<br>Total Price :- Rs. $Total_Price<br><br><u>Buyer Details</u><br>Buyer ID :- $id<br>Buyer Name:- $fname $lname<br>Contact No :- $contactno<br>Address :- $address</h3>" ;

                $mail->send();
                
               $_SESSION['result'] = 'Message has been sent';
               $_SESSION['status'] = 'ok';
            } catch (Exception $e) {
               $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
               $_SESSION['status'] = 'error';
            }
            
             

            $insert = "INSERT INTO `order` (`O-Quantity`, `Totail-Price`, `O-Date`, `P-ID`, `P-Name`, `Price`, `B-ID`, `B-Name`, `B-Contact-No`, `B-Address`) VALUES ('$OQuantityup', '$Total_Price', '$Date ', '$pipu', '$productnameu', '$productpriceu', '$id', '$fname', '$contactno', '$address');";

            $update ="UPDATE productstb SET productquantity = productquantity - '$OQuantityup' WHERE id = '$pipu'";
            $result =mysqli_query($dbc,$update);

            $qry = mysqli_query($dbc, $insert);

            if(!$qry){
            echo "
            <script>
                alert('Order is not Added');
            </script>";
            }else{
                echo "
            <script>
                alert('Order is Added $selleremailu');
            </script>";
            }
            
        } 

    ?>


    <h1 style="color: #00ad00;  "> <center><i class="fa fa-shopping-cart"></i>  <b> WELCOME TO THE CHECKOUT! </b> </center> </h1> 

    <!-- Start Delete_Fetch -->
      
                    <br><br>

        <div class="submit-button text-center">
            <form method="post" action="">
                <select name="searchfromdb" >
                    <option>Choose ID</option>
                    <?php
                        if(!isset($_SESSION["login_sess"])) 
                        {
                            header("location: ../index.php"); 
                        }
                        $email=$_SESSION["login_email"];
                        $findresult = mysqli_query($dbc, "SELECT * FROM buyer WHERE email= '$email'");
                        if($res = mysqli_fetch_array($findresult))
                        {
                            $userid = $res['id'];
                        }

                        $sqlselect = "SELECT * FROM `order` WHERE `B-ID` = '$userid'";
                        $qry = mysqli_query($dbc, $sqlselect);
                        while ( $row=mysqli_fetch_array($qry))
                        {
                            echo "<option>".$row['O-ID']."</option>";
                        }
                    ?>
                </select> &emsp;
                <input type="submit" class="btn hvr-hover" name="searchfromdbsub" href="deletelink" onclick="return checkDelete()" value="Delete"/>
            </form>
        </div>
        <?php
            if (isset($_POST['searchfromdbsub']))
            {
                
                $searchfromdb = $_POST['searchfromdb'];
                $del = "DELETE FROM `order` WHERE `O-ID` = '$searchfromdb'";
                $qry = mysqli_query($dbc, $del);
                echo "<script>
                    alert('$searchfromdb');
                    window.location.href='checkout.php';
                </script>";

            } 
        ?>
        <!-- End Delete_Fetch -->


    <div class="cart-box-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="5%">Order ID</th>
                                    <th width="5%">Product ID</th>
                                    <th width="15%">Product Name</th>
                                    <th width="10%">Price</th>
                                    <th width="5%">Buyer ID</th>
                                    <th width="10%">Buyer Name</th>
                                    <th width="10%">Buyer ContactNo</th>
                                    <th width="15%">Buyer Address</th>
                                    <th width="10%">Order Date</th>
                                    <th width="5%">Order Quantity</th>
                                    <th width="10%">Total Price</th>
                                    
                                </tr>
                            </thead>
                            <?php
                                if(!isset($_SESSION["login_sess"])) 
                                {
                                    header("location: ../index.php"); 
                                }
                                $email=$_SESSION["login_email"];
                                $findresult = mysqli_query($dbc, "SELECT * FROM buyer WHERE email= '$email'");
                                if($res = mysqli_fetch_array($findresult))
                                {
                                    $userid = $res['id'];
                                }

                                $sqlselect = "SELECT * FROM `order` WHERE `B-ID` = '$userid'";
                                $qry = mysqli_query($dbc, $sqlselect);
                                while ( $row=mysqli_fetch_array($qry)) 
                                    {
                                        echo "
                                        <tr>
                                        <td>".$row['O-ID']." </td>
                                        <td>".$row['P-ID']."   </td>
                                        <td>".$row['P-Name']." </td>
                                        <td>".$row['Price']."  </td>
                                        <td>".$row['B-ID']." </td>
                                        <td>".$row['B-Name']."</td> 
                                        <td>".$row['B-Contact-No']."</td> 
                                        <td>".$row['B-Address']."</td> 
                                        <td>".$row['O-Date']."</td> 
                                        <td>".$row['O-Quantity']."</td> 
                                        <td>".$row['Totail-Price']."</td>
                                        
                                        </tr>
                                        ";
                                    }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End OrderDetails -->

    <!-- Start Footer  -->
    <?php      
        include 'php/B-Footer.php';
    ?>
    <!-- End Footer  -->

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
            
</body>


</html>

