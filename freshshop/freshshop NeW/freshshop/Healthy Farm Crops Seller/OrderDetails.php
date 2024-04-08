<!DOCTYPE html>
<?php require_once("../config.php");?>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>HealthyFarmCrops - Order Details</title>
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

</head>

<body>
    <!-- Start Main Top -->
    <?php 
        include 'php/Header.php';
    ?>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Order Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                        <li class="breadcrumb-item">Shop</li>
                        <li class="breadcrumb-item active">Order Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start ProductsDetails -->
    <div class="cart-box-main">
        <div class="container">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <div id="right">
                        <div class="search">
                            <form action="" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" name="search" placeholder="Search Product ...." />&emsp;
                                    <input type="submit" class="btn hvr-hover" name="searchsub"  Value="Search"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            </form>
                        </div><br>

<!-- End ProductsDetails -->

    <!-- Start OrderDetails -->
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
                                $email=$_SESSION["login_email"];
                                $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
                                if($res = mysqli_fetch_array($findresult))
                                {
                                    $userid = $res['id'];
                                }
                                if(isset($_POST['searchsub'])) {
                                    $search = $_POST['search'];
                                    $Sel = "SELECT * FROM `productstb` WHERE `sellerid` = '$userid'";
                                    $qrysearch = mysqli_query($dbc, $Sel);
                                    while($row = mysqli_fetch_array($qrysearch)) 
                                    {

                                        $ppid = $row['id'];

                                        $sqlselect = "SELECT * FROM `order` WHERE `P-Name` LIKE '%$search%' and `P-ID` = $ppid";
                                        $qry = mysqli_query($dbc, $sqlselect);
                                        while ( $row=mysqli_fetch_array($qry)) 
                                        {
                                            echo "
                                            <tr>
                                            <td>".$row['O-ID']."</td>
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
                                    }

                                }
                                else 
                                {
                                    $Sel = "SELECT * FROM `productstb` WHERE `sellerid` = '$userid'";
                                    $qrysearch = mysqli_query($dbc, $Sel);
                                    while ( $row=mysqli_fetch_array($qrysearch)) 
                                    {
                                        
                                        $ppid = $row['id'];

                                        $sqlselect = "SELECT * FROM `order` WHERE `P-ID` = $ppid ";
                                        $qry = mysqli_query($dbc, $sqlselect);
                                        while ( $row=mysqli_fetch_array($qry)) 
                                        {
                                            echo "
                                            <tr>
                                            <td>".$row['O-ID']."</td>
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
                                    }
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
    <<?php      
        include '../php/Footer.php';
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