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
    <title>HealthyFarmCrops - Item Order</title>
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
        include 'php/B-Header.php'
    ?>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Item Order</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Shop.php">Shop</a></li>
                        <li class="breadcrumb-item active">Item Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start AddProduct -->
    <?php 
        
        if(isset($_POST['add_to_cart'])) {
            $pipup = $_POST['hiddenpid'];
            $productnameup = $_POST['hiddenproductname'];
            $productquantityup = $_POST['hiddenproductquantity'];
            $productpriceup = $_POST['hiddenproductprice'];
            $productdescriptionup = $_POST['hiddenproductdescription'];
            $dateup = $_POST['hiddendate'];
            $imageup = $_POST['hiddenimage'];
            $selleridup = $_POST['hiddensellerid'];

            
            //echo "$pipup <br> $productnameup <br> $productquantityup <br> $productpriceup <br> $productdescriptionup <br> $dateup <br> $selleridup";
        }else{

            $pipup = $_POST['hiddenpid'];
            $productnameup = $_POST['hiddenproductname'];
            $productquantityup = $_POST['hiddenproductquantity'];
            $productpriceup = $_POST['hiddenproductprice'];
            $productdescriptionup = $_POST['hiddenproductdescription'];
            $dateup = $_POST['hiddendate'];
            $imageup = $_POST['hiddenimage'];
            $selleridup = $_POST['hiddensellerid'];
        }
    ?>
    

    <?php 
        $sqlselect = "SELECT * FROM `productstb`";
    ?>
     
    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <form method="POST" action="checkout.php">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"> <img class="d-block w-100" src="../Healthy Farm Crops Seller/i/upload/<?php echo $imageup; ?>"> </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="hiddepid" value="<?php echo $pipup ?>">
                    <input type="hidden" name="hiddeproductname" value="<?php echo $productnameup; ?>">
                    <input type="hidden" name="hiddeproductquantity" value="<?php echo $productquantityup; ?>">
                    <input type="hidden" name="hiddeproductprice" value="<?php echo $productpriceup; ?>">
                    <input type="hidden" name="hiddesellerid" value="<?php echo $selleridup; ?>">
                    
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="single-product-details">
                            <h2><?php echo $productnameup; ?></h2>
                            <h5>Rs.<?php echo $productpriceup; ?></h5>
                            <p class="available-stock"><span>Quantity : <?php echo $productquantityup; ?>Kg</span><p>
                            <h4>Short Description:</h4>
                            <p>
                                <table>
                                    <tr><th>Product ID&ensp;- </th><td><?php echo $pipup; ?></td></tr>
                                    <tr><th>Seller ID&emsp;&ensp;- </th><td><?php echo $selleridup; ?></td></tr>
                                    <tr>
                                        <th>SellerName -&ensp;<br>Address&ensp;&emsp; -&ensp;<br>TelphoneNo -&ensp;</th>
                                        <td><?php echo $productdescriptionup; ?></td>
                                    </tr>
                                    <tr><th>Harvest Date - </th><td><?php echo $dateup; ?></td></tr>
                                </table>
                            </p>
                            <ul>
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Quantity</label>
                                        <input class="form-control" name="OQuantity" value="1" min="1" max="1000" type="number">
                                    </div>
                                </li>
                            </ul>

                            <div class="add-to-btn">
                                <div class="add-comp">
                                    <h5><i class="fa fa-shopping-cart"></i>&ensp;
                                    <input type="submit" name="OrderNow" class="btn hvr-hover" value="Order Now"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Cart -->

    

    <!-- End AddProduct -->

    <!-- Start Footer  -->
    <<?php include 'php/B-Footer.php';?>
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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>