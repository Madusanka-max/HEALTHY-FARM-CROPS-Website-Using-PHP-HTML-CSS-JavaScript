<? php
session_start();
<!DOCTYPE html>
<?php include("../admin/config.php"); ?>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Healthy Farm Crops-ConactUs</title>
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
    <link rel="stylesheet" href="css/style3.css">
    <script src="repeater.js" type="text/javascript"></script>

</head>

<body >
   
    <!-- Start Main Top -->
    <?php 
        include 'php/B-Header.php';
    ?>
    <!-- End Main Top -->

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
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item  active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
          <div class="row">
           <div class="col-lg-8 col-sm-12">
             <div class="contact-form-right">
             <?php 
                $msg="";
                if(isset($_GET['errmsg']))
                {
                  $msg ="Something went wrong. Please try again...";
                  echo '<div class="alert alert-Danger" role="alert" style=" color: #ff033e;">'.$msg.'</div>';
                }
               if(isset($_GET['successmsg']))
                {
                 $msg = "Your message was sent successfully.";
                 echo '<div class="alert alert-success" role="alert" style=" color: #2fbe25;">'.$msg.'</div>';
                }       
             ?>
                <h2 style=" color: #Ba04f9;">GET IN TOUCH</h2>
                <p style=" color:   #F904E2;">If you want to get more details about this site or send feedback text here...</p>
                 <form  action="../contactUs_action.php" method="POST">
                     <div class="row">
                        <div>
                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email"  class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="tel" placeholder="Your Contact No"  class="form-control" name="contactno" required data-error="Please enter your contact No">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" 
                                        name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control"  placeholder="Your Message"
                                         name="message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" name="sublogin" type="submit">Send Message</button>
                                        <div  class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                <div style="background-color:   #00ffef;">
                <div class="contact-info-left">                        
                    <h2>CONTACT INFO</h2>
                    <p>You can contact our Healthy Farm Crops management team using following contact details. </p>
                    <ul>
                    <li>
                    <p><i class="fas fa-map-marker-alt"></i>Address: Park Lane
                    <br>210,Gall Road,<br> Colombo 03. </p>
                    </li>
                    <li>
                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:078-5506606">078-5506606
                    </a></p>
                    </li>
                    <li>
                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:growwithGenoxia.com">growwithGenoxia.com</a></p>
                </li>
                </div>
                </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

   </div>
<div class="item">
    <?php include '../php/Footer.php'?>
   

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
?>