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
    <title>HealthyFarmCrops - Add Products</title>
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

    <script language="javaScript" type="text/javascript">
        function checkDelete(){
            return confirm ('Are you sure delete this record?');
        }
    </script>
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
                    <h2>Add Products</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                        <li class="breadcrumb-item">Shop</li>
                        <li class="breadcrumb-item active">Add Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start AddProduct -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <h2>Add Products</h2>
            </div><br>
            <div class="">
                <!-- Start functions -->
                <?php
                    if(!isset($_SESSION["login_sess"])) 
                    {
                        header("location: ../index.php"); 
                    }
                    $email=$_SESSION["login_email"];
                    $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
                    if($res = mysqli_fetch_array($findresult))
                    {
                        $userid = $res['id'];
                    }

                    if(isset($_POST['addtopred'])) {
                        $productname = $_POST['productname'];
                        $productquantity = $_POST['productquantity'];
                        $productprice = $_POST['productprice'];
                        $productdescription = $_POST['productdescription'];
                        $date = $_POST['date'];
                        $productidname = $_FILES['uploadimg']['name'];
                        $productidtmp = $_FILES['uploadimg']['tmp_name'];
                        $folder = "i/upload/";
                        move_uploaded_file($productidtmp, $folder.$productidname);
                        $insert = "INSERT INTO productstb (`productname`, `productprice`,`productquantity` ,`productdescription` , `date`, `image`, `sellerid`) 
                                                 VALUES ('$productname', '$productprice','$productquantity','$productdescription', '$date', '$productidname', '$userid')";
                        $qry = mysqli_query($dbc, $insert);
                        echo "<script>
                                alert('Product Added');
                                window.location.href='AddProducts.php';
                            </script>";       
                    } 
                
                    if(isset($_POST['editdata'])){
                        $pidup = trim($_POST['productid']);
                        $productnameup = $_POST['productname'];
                        $productquantityup = $_POST['productquantity'];
                        $productpriceup = $_POST['productprice'];
                        $productdescriptionup = $_POST['productdescription'];
                        $dateup = $_POST['date'];
                        $uploadimgupname = $_FILES['uploadimg']['name'];
                        $uploadimguptmp = $_FILES['uploadimg']['tmp_name'];
                        $folder = "i/upload/";
                        move_uploaded_file($uploadimguptmp, $folder.$uploadimgupname);
                        if(!empty($productnameup) && !empty($productquantityup) && !empty($productpriceup) && !empty($productdescriptionup) && !empty($dateup) && !empty($uploadimgupname) ) {
                            $update = "UPDATE `productstb` SET 
                        `productname`='$productnameup',
                        `productquantity`='$productquantityup',
                        `productprice`='$productpriceup',
                        `productdescription`='$productdescriptionup',
                        `date`='$dateup',
                        `image`='$uploadimgupname'
                        WHERE `id` = '$pidup'";
                        $qryupdate = mysqli_query($dbc, $update);
                        if(!$qryupdate) {
                            echo "error";
                            exit();
                        }else {
                            //header("location: AddProducts.php");
                        }
                    } else {
                        echo "all fields must be filled";
                    }   
                    }
                ?>
                <!-- End functions -->
                <!-- Start Delete_Fetch -->
                    <?php
                        if(isset($_POST['addtopredfetch'])){
                            $searchfromdb = $_POST['searchfromdb'];
                            $sel = "SELECT * FROM `productstb` WHERE `id` = '$searchfromdb'";
                            $qry = mysqli_query($dbc, $sel);
                            $fetch = mysqli_fetch_assoc($qry);
                             
                            $pid = $fetch['id'];
                            $pproductname = $fetch['productname'];
                            $pproductquantity = $fetch['productquantity'];
                            $pproductprice = $fetch['productprice'];
                            $pproductdescription = $fetch['productdescription'];
                            $pdate = $fetch['date'];
                            $pimage = $fetch['image']; 
                            
                            if(!($fetch)) {echo "error in fetching";};
                        }
                            

                        if (isset($_POST['searchfromdbsub']))
                        {
                            echo "<script>
                                alert('Product Deleted');
                                window.location.href='AddProducts.php';
                            </script>";
                            $searchfromdb = $_POST['searchfromdb'];
                            $del = "DELETE FROM productstb WHERE `id` = '$searchfromdb'";
                            $qry = mysqli_query($dbc, $del);
                        } 
                    ?>
                    <!-- End Delete_Fetch -->
                <form action="" method="post" enctype="multipart/form-data" id="myForm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="productid" placeholder="ID (do not enter)" value ="<?php if(!isset($pid)) {echo "";} else {echo $pid; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="productname" placeholder="Name" value ="<?php if(!isset($pproductname)) {echo "";} else {echo $pproductname; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="productquantity" placeholder="Quantity (kg)" value ="<?php if(!isset($pproductquantity)) {echo "";} else {echo $pproductquantity; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="productprice" placeholder="Price (Rs.) per Kg" value ="<?php if(!isset($pproductprice)) {echo "";} else {echo $pproductprice; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="productdescription" placeholder="description(name<br>Address<br>telNo)" value ="<?php if(!isset($pproductdescription)) {echo "";} else {echo $pproductdescription; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date"  name="date" placeholder="Date" value ="<?php if(!isset($pdate)) {echo "";} else {echo $pdate; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="uploadimg" id="uploadimg" value ="<?php if(!isset($pimage)) {echo "";} else {echo $pimage; } ?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="submit-button text-center">
                                    <input type="submit" class="btn hvr-hover" name="addtopred" value="Add Product">&emsp;&emsp;&emsp;
                                    <input type="submit" class="btn hvr-hover" name="editdata" value="Update Product">
                                </div>
                            </div>
                        </div>
                </form>
                <div class="">
                    <img src="i/upload/<?php if(!isset($pimage)) {echo "";} else {echo $pimage; }  ?>" id="imgLocim" height="275" width="275" />
                </div>
            </div><br><br>
            <div class="">
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
                                $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
                                if($res = mysqli_fetch_array($findresult))
                                {
                                    $userid = $res['id'];
                                }

                                $sel = "SELECT * FROM `productstb` WHERE `sellerid` = '$userid' ";
                                $qry = mysqli_query($dbc, $sel);
                                while($row=mysqli_fetch_array($qry))
                                {
                                    echo "<option>".$row['id']."</option>";
                                }
                            ?>
                        </select> &emsp;&emsp;
                        <input type="submit" class="btn hvr-hover" name="searchfromdbsub"  a href="deletelink" onclick="return checkDelete() " value="Delete" />&emsp;
                        <input type="submit" class="btn hvr-hover" name="addtopredfetch" value="Fetch Product">
                    </form>
                    
                </div>
                <form method="POST" action="" enctype="multipart/form-data">
                </form>
                <br>
                <div class="">
                    <div class="search">
                        <form action="" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" name="search" placeholder="Search Product ...." />&emsp;
                                <input type="submit" class="btn hvr-hover" name="searchsub"  Value="Search"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            </div>
                        </form>
                    </div><br>
                    <div class="productsDis">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Quantity (kg)</th>
                                <th>Price(Rs.) per Kg</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Seller ID</th>
                            </tr>
                            <!-- Start Search -->
                            <?php
                                if(!isset($_SESSION["login_sess"])) 
                                {
                                    header("location: ../index.php"); 
                                }
                                $email=$_SESSION["login_email"];
                                $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
                                if($res = mysqli_fetch_array($findresult))
                                {
                                    $userid = $res['id'];
                                }

                                if(isset($_POST['searchsub'])) {
                                    $search = $_POST['search'];
                                    $Sel = "SELECT * FROM `productstb` WHERE `productname` LIKE '%$search%' and `sellerid` = '$userid'";
                                    $qrysearch = mysqli_query($dbc, $Sel);
                                    while($row = mysqli_fetch_array($qrysearch)) 
                                    {
                                        echo "
                                        <tr>
                                            <td>".$row['id']."</td>
                                            <td>".$row['productname']."   </td>
                                            <td>".$row['productquantity']." </td>
                                            <td>".$row['productprice']." </td>
                                            <td>".$row['productdescription']." </td>
                                            <td>".$row['date']."</td> 
                                            <td><img src='i/upload/".$row['image']."' height='100px' width='100px'/> </td> 
                                            <td>".$row['sellerid']."</td>
                                        </tr>
                                        ";
                                    }
                                }
                                else 
                                {
                                    $sqlselect = "SELECT * FROM `productstb` WHERE `sellerid` = '$userid'";
                                    $qry = mysqli_query($dbc, $sqlselect);
                                    while ( $row=mysqli_fetch_array($qry)) 
                                    {
                                        echo "
                                        <tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['productname']."   </td>
                                        <td>".$row['productquantity']." </td>
                                        <td>".$row['productprice']."  </td>
                                        <td>".$row['productdescription']." </td>
                                        <td>".$row['date']."</td> 
                                        <td><img src='i/upload/".$row['image']."' height='100px' width='100px'/> </td>
                                        <td>".$row['sellerid']."</td> 
                                        </tr>
                                        ";
                                    }
                                }
                            ?>
                            <!-- End Search -->
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- End AddProduct -->

    <!-- Start Footer  -->
    <?php include 'php/B-Footer.php';?>
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