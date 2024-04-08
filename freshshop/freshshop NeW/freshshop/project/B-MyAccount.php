<!DOCTYPE html>
<?php require_once("../config.php"); ?>

<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Healthy Farm Crops-MyAccount</title>
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
   <!-- Start Header -->
    <?php 
        include 'php/B-Header.php';
     ?>
    <!-- End  Header -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            
<?php 
if(!isset($_SESSION["login_sess"])) 
{
    header("location: login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM buyer WHERE email= '$email'");
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

    <title>my Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body style="background-image: url(../images/3preview.jpg);">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <!--account datails showing form-->
     <form action="login_process.php" method="POST">
  <div class="login_form">
 <img src="../images/Logo.png" alt="HEALTHY FARM CROPS" class="logo img-fluid" style="align:center;"> 
     <p><a href="../buyer/login.php"><span style="color:red; float: right;">Back</span> </a></p>
          <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
          </tr>
           <tr>
              <th>ID </th>
              <td><?php echo $id; ?></td>
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
        </div><br><br>
        <div class="col-sm-3">
        </div>
    </form>
    </div>
</div> 
            
        </div>
    </div>
    <!-- End My Account -->

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