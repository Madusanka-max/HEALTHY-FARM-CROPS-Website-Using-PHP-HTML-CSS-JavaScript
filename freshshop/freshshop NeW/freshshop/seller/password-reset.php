<!DOCTYPE html>
<?php require_once("config.php");
if(isset($_SESSION["login_sess"])) 
{
  header("location: account.php");
}
?>
<html lang="en">
<head>
	<title>Password Reset - Healthy Farm Crops</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-3"></div>
			<div class="col-sm-4">
				<?php
				    if(isset($_GET['token']))
				    {
				    	$token = $_GET['token'];
				    }
				    //form for submit
				    if(isset($_POST['sub_set'])){
				    	extract($_POST);
				    	if($password == ''){
				    		$error[] = 'Please enter the password.';
				    	}
				    	if($passwordConfirm == ''){
				    		$error[] = 'Please confirm the password.';
				    	}
				    	if($password != $passwordConfirm){
				    		$error[] = 'Passwords do not match.';
				    	}if(strlen($password) <5){
				    		//min
				    		$error[] = 'The password is 6 characters long.';
				    	}
				    	if(strlen($password) >50 ){
				    		//max
				    		$error[] = 'Password: Max length 50 Characters Not allowed';
				    	}
				    	$token = $_GET['token'];
				    
				    	$fetchresultok = mysqli_query($dbc,"SELECT * FROM pass_reset WHERE token='$token'");
				    	if($res = mysqli_fetch_array($fetchresultok)){
				    		$email = $res['email'];
				    	}     
				    	      if(isset($email) != ''){
				    	      	$emailtok = $email;
				    	      }
				    	      else
				    	      {
				    	      	$error[] = 'Link has been expired or something missing';
				    	      	$hide =1;
				    	      }
				    	if(!isset($error)){
				    		$options = array("cost"=>4);
				    		$password = password_hash($password,PASSWORD_BCRYPT,$options);
				    		$resultresultpass = mysqli_query($dbc, "UPDATE seller SET 
				    			password = '$password' email = '$emailtok' ");
				    		if($resultresultpass){
				    			$success = " <div class='successmsg'><span style='font-size:100px;'>&#9989;</span> <br> Your password has been updated successfully.. <br> <a href='index.php' style='color:#fff;'>Login here... </a> </div> ";
				    			$resultdel = mysqli_query($dbc,"DELETE FROM pass_reset WHERE token = '$token' ");
				    			     $hide=1;
				    		}

				    	}
				    }
				?>
				<div class="login_form">
					<form action="" method = "POST">
						<div class="form-group">
							<img src="../images/Op2.png" alt="Healthy Farm Crops" class="logo img-fluid">
							<?php
							   if(isset($error)){
							   	   foreach($error as $error) {
							   	   	   echo '<div class="errmsg">'.$error.'</div><br>';
							   	   }
							   }
							   if(isset($success)) {
							   	echo $success;
							   }
							?>
							<?php if(!isset($hide)) { ?>
							  <label class="label_txt">Password </label>
                              <input type="password" name="password" class="form-control"required>
                          </div>
                          <div class="form-group">
                               <label class="label_txt">Confirm Password </label>
                               <input type="password" name="passwordConfirm" class="form-control" required > 
                            </div>
                            <br>
                            <button type="submit" name="sub_set" class="btn btn-primary btn-group-lg form_btn">Reset Password</button>
                        <?php } ?>
                    </div>
                    </form>               
				</div>
			</div>	
		</div>
	</div>
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" 
	integrity= "sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" 
	crossorigin="anonymous"></script>

</html>