<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Admin</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
  
    <!--start header top-->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container-fluid">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="../images/Logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="BUYER_IN_AdminPANEL.php">Buyers</a></li> 
                        <li class="nav-item"><a class="nav-link" href="Seller_in_AdminPANEL.php">Sellers</a></li>
                        <li class="nav-item"><a class="nav-link" href="Order_in_AdminPANEL.php">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="Product_in_AdminPANEL.php">Items</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <div class="login-box" >
                 <button type="button" class="btn btn-success">
                        <a href="../index.php"><b style="color: snow">LOGOUT</b></a>
                    </button>
            </div>
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <form action="searchBuyer.php" method="post">
        <!--        <span class="input-group-addon"><i class="fa fa-search"></i></span> -->
                    
                    <input type="text" name="key"  class="form-control" placeholder="Buyer Name">
                    <input type="submit" value="Search by Buyer Name">
        <!--        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> -->
                </form>
            </div>
        </div>
    </div>

    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center;">Buyer's Details</h2>                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<br><br>
<!--Table start-->
<div class="container-fluid"> 
    <div class="table-responsive">
      <h2 class="text-center">Details of Buyers</h2>
      <table class="table  table-hover  table-bordered table-striped">
       <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>email</th>
            <th>address</th>
            <th>Contact No</th>
            <!--not display password details-->
            
        </tr>
      </thead>
      <tbody>
          <?php 
                if($dbc){
                   echo "";
                }else{
                   echo "Connection Failed.";
                }
                // selectopm query start here..........
                $query = "SELECT * FROM Buyer";
                $query_run = $dbc->query($query);
                while($row = $query_run->fetch_assoc()) {
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php  echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['contactno']; ?></td>
                <!--not display password details-->   
                
            </tr>
          <?php
            }
           ?> 
       </tbody>
    </table>
  </div>  
</div>
    <!--Table End-->
<br><br>

<?php 
        include '../php/Footer.php';
?>
</body>

 <!-- ALL JS FILES -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.superslides.min.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="../js/inewsticker.js"></script>
    <script src="../js/bootsnav.js."></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/baguetteBox.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>

</html>
       