<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
     
</head>
<body>
	<!--container start-->
	<div class="container "> 
	<div class="row">
		<div class=" sm-4 col-md-5 col-lg-6 col-xxl-7 mx-auto">
			<div class="login_form  mb-2">
				<img src="../images/Op2.png" alt="Healthy Farm Crops" class="form-control">
				 <?php
                     if(isset($_GET['loginerror'])){
                     	$loginerror =$_GET['loginerror'];
                     }
                     if(!empty($loginerror)){
                     	echo '<p class="errmsg">Invalid login credentials,
                     	Please Try Again..</p>';
                     }
                 ?>
               <br>
			   <form action="login_process.php" method="POST">
               <div class="mb-3">
               <label  class="label_txt mb-2">Username or Email </label>
               <input type="text" name="login_var" value="<?php if(!empty($loginerror)) 
               {echo $loginerror; } ?>" class="form-control" >
			   </div>
               <div class="mb-3">
               <label class="label_txt mb-2">Password</label>
               <input type="password" name="password"class="form-control" >
               </div>  
               <button type="submit" name="sublogin"class="btn btn-primary form_btn">LOGIN
               </button>
               </form>           
			   <p style="font-size: 12px;text-align: center; margin-top:10px;"><a href="forgot-password.php" style="color:#00376b;">Forgot Password?</a></p>
               
               <p>Don't have an account?<a href="signup.php">Sign up</a></p>
           </div>		
	    </div>
    </div>
    <!--container end-->
  </div>
</body>
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</html>

<!-- Start session  -->
    <?php      
        include 'session.php';
    ?>
<!-- End session   -->