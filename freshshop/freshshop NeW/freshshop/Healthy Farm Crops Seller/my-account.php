 <!--  -->
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
    <title>HealthyFarmCrops - My Account</title>
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
    <?php 
        if(!isset($_SESSION["login_sess"])) 
        {
            header("location: index.php"); 
        }
        $email=$_SESSION["login_email"];
        $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
        if($res = mysqli_fetch_array($findresult))
        {
            $id = $res['id'];
            $username = $res['username']; 
            $fname = $res['fname'];   
            $lname = $res['lname'];  
            $email = $res['email'];  
            $contactno =$res['contactno'];
            $address = $res['address'];
        }
    ?>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body style="background-image: url(../images/3preview.jpg);">
    <!-- Start Main Top -->
    <?php 
        include 'php/Header.php';
    ?>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box"style="background-image: url(../images/veg-bg.jfif);">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12" >
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!--Start account datails-->
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <form action="login_process.php" method="POST">
                        <div class="login_form"><br><br>
                            <img src="../images/Logo.png" alt="HEALTHY FARM CROPS" class="logo img-fluid" style="align:center;">
                            <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
                            <table class="table">
                                <tr>
                                    <th>User ID </th>
                                <td><?php echo $id; ?></td>
                                </tr>
                                <tr>
                                    <th>First Name </th>
                                    <td><?php echo $fname; ?></td>
                                </tr>
                                <tr>
                                    <th>Last Name </th>
                                    <td><?php echo $lname; ?></td>
                                </tr>
                                <tr>
                                    <th>Username </th>
                                    <td><?php echo $username; ?></td>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th>Address </th>
                                    <td><?php echo $address; ?></td>
                                </tr>
                                <tr>
                                    <th>Contact No  </th>
                                    <td><?php echo $contactno; ?></td>
                                </tr>
                            </table>
                        </div>
                    </form><br><br>
                </div>
            </div> 
        </div>
    </div>
    <!--End account datails-->

    <!-- Start Footer  -->
    <?php      
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