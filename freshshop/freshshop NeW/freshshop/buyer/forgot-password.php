<!DOCTYPE html>
<?php require_once("config.php");
if(isset($_SESSION["login_sess"]))
{
	 header("location: account.php");
}
?>
<html lang="en">
<head>
	<title>Forgot Password </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/style2.css">	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">			
		</div>
		<div class="col-sm-4">
			<form action="forgot_process.php" method="POST">
				<div class="login_form">
					<div class="form-group">
						<img src="../images/Op2.png" alt="forgot password" class="img-fluid logo">
						<?php if(isset($_GET['err'])){
						  $err = $_GET['err'];
						     echo '<p class="errmsg">No user found. </p>';
						  } 
						    // if server  error
						   if(isset($_GET['servererr'])){
						  	   echo "<p class='errmsg'>Your link is processing.Please check your link after few hour..\nThank You..</p>";
						  }
						    // if other issues
						   if(isset($_GET['somethingwrong'])){ 
 								echo '<p class="errmsg">Something went wrong.  </p>';
   						  }
   						  // If Success | Link sent 
						   if(isset($_GET['sent'])){
							    echo "<div class='successmsg'>Reset link has been sent to your registered email id . Kindly check your email. It can be taken 2 to 3 minutes to deliver on your email id . </div>"; 
						  }
						?>
						<?php if(!isset($_GET['sent'])) { ?>
						  	<label class="label_txt">Username or Email </label>
						  	<input type="text" name="login_var" value="<?php if(!empty($err)){echo $err;} ?>" class="form-control" required="">
						  	</div>
						  	 <button type="submit" name="subforgot" class="btn btn-primary btn-group-lg form_btn">Send Link </button>
						  <?php } ?>		
			</form>
			<br>
			 <p>Have an account? <a href="login.php">Login</a> </p>
		   <p>Do not have an account? <a href="signup.php">Sign up</a> </p>
		</div>
	   </div>
	  </div>
	</div>	
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>