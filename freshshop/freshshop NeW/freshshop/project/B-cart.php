<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>HealthyFarmCrops - Shop</title>
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Start Add Img -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="js/fetch.js"></script>
    <!-- End Add Img -->
      
    <link rel="stylesheet" href="style.css">

    <!-- start new-->
    <?php require_once("../config.php");?>

    <!-- end new-->

    <!--start new 1-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--end new 1-->
    </head>

    <body>
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



    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banners-01.jfif" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Healthy Farm Crop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                     <!--   <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banners-02.jfif" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Healthy Farm Crop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                     <!--   <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Healthy Farm Crop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                     <!--   <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    
    <!--new-->
    <br />
    <div class="container">
        <br />
        <br />
        <br />
        
        <h1 style="color: #00ad00;  "> <center><i class="fa fa-shopping-cart"></i>  <b> WELCOME TO THE SHOP! </b> </center> </h1> 
        <br />
            <br /><br/>
        <div class="container">
            <div class="search">
                <form action="" method="post">
                    <div class="input-group"><i class="fa fa-search"></i>&ensp;
                        <input type="text" size="25" maxlength="25" name="search" placeholder="Search Product ...." />&emsp;
                        <input type="submit" class="btn hvr-hover" name="searchsub"  Value="Search"/>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
            if(isset($_POST['searchsub'])) {
                $search = $_POST['search'];
                $Sel = "SELECT * FROM `productstb` WHERE `productname` LIKE '%$search%'";
                $qrysearch = mysqli_query($dbc, $Sel);
                while($row = mysqli_fetch_array($qrysearch)) 
                { 
                ?>


                    
                    <form method="POST" action="Item.php">
                        <input type="hidden" name="hiddenpid" value="<?php echo $row["id"]; ?>">
                        <input type="hidden" name="hiddenproductname" value="<?php echo $row["productname"]; ?>">
                        <input type="hidden" name="hiddenproductquantity" value="<?php echo $row["productquantity"]; ?>">
                        <input type="hidden" name="hiddenproductprice" value="<?php echo $row["productprice"]; ?>">
                        <input type="hidden" name="hiddenproductdescription" value="<?php echo $row["productdescription"]; ?>">
                        <input type="hidden" name="hiddendate" value="<?php echo $row["date"]; ?>">
                        <input type="hidden" name="hiddenimage" value="<?php echo $row["image"]; ?>">
                        <input type="hidden" name="hiddensellerid" value="<?php echo $row["sellerid"]; ?>">

                        
                        
                        <div class="col-sm-4-3 col-md-4 special-grid top-featured">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new"><?php echo $row["date"]; ?></p>
                                </div>
                                <img src="../Healthy Farm Crops Seller/i/upload/<?php echo $row["image"]; ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <input type="submit" class="btn hvr-hover" name="add_to_cart" value="View"/>
                                </div>
                                </div>
                                <div class="why-text">
                                    <h3><?php echo $row["productname"]; ?></h3>
                                    <h5><?php echo $row["productquantity"]; ?>Kg</h5>
                                    <h5>Rs.<?php echo $row["productprice"]; ?></h5>
                                    <table>
                                        <tr>
                                            <th><h6>SellerName -&ensp;<br>Address&ensp;&emsp; -&ensp;<br>TelphoneNo -&ensp;</h6></th>
                                            <td><h6> <?php echo $row["productdescription"]; ?></h6></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                
                <?php
                }
            }
            else 
            {
                $sqlselect = "SELECT * FROM `productstb`";
                $qry = mysqli_query($dbc, $sqlselect);
                while ( $row=mysqli_fetch_array($qry)) 
                {
                    ?>
                    <br>
                    <form method="POST" action="Item.php">
                        <input type="hidden" name="hiddenpid" value="<?php echo $row["id"]; ?>">
                        <input type="hidden" name="hiddenproductname" value="<?php echo $row["productname"]; ?>">
                        <input type="hidden" name="hiddenproductquantity" value="<?php echo $row["productquantity"]; ?>">
                        <input type="hidden" name="hiddenproductprice" value="<?php echo $row["productprice"]; ?>">
                        <input type="hidden" name="hiddenproductdescription" value="<?php echo $row["productdescription"]; ?>">
                        <input type="hidden" name="hiddendate" value="<?php echo $row["date"]; ?>">
                        <input type="hidden" name="hiddenimage" value="<?php echo $row["image"]; ?>">
                        <input type="hidden" name="hiddensellerid" value="<?php echo $row["sellerid"]; ?>">
                    
                        <div class="col-sm-4 col-md-4 special-grid top-featured">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <div class="type-lb">
                                        <p class="new"><?php echo $row["date"]; ?></p>
                                    </div>
                                   <br><br><br>
                                    <img src="../Healthy Farm Crops Seller/i/upload/<?php echo $row["image"]; ?>" class="img-thumbnail" alt="Image">

                                    <div class="mask-icon">
                                        <input type="submit" class="btn hvr-hover" name="add_to_cart" value="View"/>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h3><?php echo $row["productname"]; ?></h3>
                                    <h5><?php echo $row["productquantity"]; ?>Kg</h5>
                                    <h5>Rs.<?php echo $row["productprice"]; ?></h5>
                                    <table>
                                        <tr>
                                            <th><h6>SellerName -&ensp;<br>Address&ensp;&emsp; -&ensp;<br>TelphoneNo -&ensp;</h6></th>
                                            <td><h6> <?php echo $row["productdescription"]; ?></h6></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                <?php
                }
            }
        ?>
        <div style="clear:both"></div>
        <br />
    </div>
    <br />

    <!--End new-->


  




 


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


