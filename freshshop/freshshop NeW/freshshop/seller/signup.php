<!DOCTYPE html> <!--Allbuyer data name & id simple-->
<?php require_once("config.php"); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SELLER Signup - Healthy Farm Crops</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">		
</head>
<body style ="background-image: url(../images/schmidgaertnerei-pic01.jpg);">
	<!--container start-->
	<div class="container">
	<div class="row">
		      <nav><br>
		      <div class="btn-group" role="group" aria-label="badge">
			  <button type="button" class="btn btn-success"><a href="../index.php" style="color:#00ff00;">Home</a></button>
			  <button type="button" class="btn btn-success"><a href="signup.php" style="color:#00ff00;">Refresh Page</a></button>
			  </div>
			  </nav>
		
			 <?php
			 		if(isset($_POST['signup'])){
			 		  extract($_POST);
			 		  if(strlen($ftname)<3){ //minimun
			 		  	$error[] = 'Please enter First Name using 3 charaters atleast.';
			 		  }
			 		  if(strlen($ftname) >20){ //max
			 		  	$error[] = 'First Name: Max length 20 Characters Not allowed';
			 		  }
			 		  if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $ftname)){
           				 $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
           			  }
			 		  if(strlen($ltname)<3){ //minimun
			 		  	$error[] = 'Please enter Last Name using 3 charaters atleast.';
			 		  }
			 		  if(strlen($ltname) >20){ //max
			 		  	$error[] = 'Last Name: Max length 20 Characters Not allowed';
			 		  }
			 		  if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $ltname)){
           				 $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
           			  } 
           			  if(strlen($username)<3){ // change minimum length
           			  	  $error[] = 'Please enter Username using 3 charaters atleast.';
           			  } 
           			  if(strlen($username)>50){ // Change Max Length 
           				 $error[] = 'Username : Max length 50 Characters Not allowed';
           			  }
           			  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
            			 $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
            		  } 
            		  if(strlen($email)>50){  // Max 
           				 $error[] = 'Email: Max length 50 Characters Not allowed';
           		      } 
           		      if($confirmpassword ==' '){
           		      	 $error[] = 'Please confirm the password';
           		      }
           		      if($password !=  $confirmpassword ){
           		      	$error[] = 'Passwords do not match';
           		      }
           		      if(strlen($password) <5){//min
           		      	$error[] = 'The Password is 6 charactors long.';
           		      }
           		      if(strlen($password) > 20){//max
           		      	$error[] = 'Password: Max length 20 Characters Not allowed';
           		      }
           		      $sql ="select * from buyer where (username = '$username' or email = '$email' );";
           		      $res = mysqli_query($dbc,$sql);
           		      if(mysqli_num_rows($res) > 0) {
           		      	 $row = mysqli_fetch_assoc($res);
           		      
           		     		 if($username == $row['username'])
           		     		 {
           		      			$error[] = 'Username alredy Exists.';
           		      		 }
           		     		 if($email == $row['email'])
      						 {
                        		$error[] ='Email alredy Exists.';
                    		 }
                     }
                     if(!isset($error)){
                     		$date = date('y-m-d');
                     		$options = array("cost"=>4);
                     	$password = password_hash($password, PASSWORD_BCRYPT,$options);

                     		$result = mysqli_query($dbc,"INSERT into seller(id,fname,lname,	username,email,address,contactno,password )
                     		 values ('','$ftname','$ltname','$username','$email','$address',
                     		 '$contactno','$password') ");

                     		if($result){
                     			$done =2;
                     		}else{
                     			$error[] = 'Failed : Something Went Wrong';
                     		}
                     }			 	
			 }
			 ?>
		
		<div class="col-sm-4">
			<?php 
				if(isset($error)){
					foreach ($error as $error) {
						echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
					}
				}
			 ?>
		</div>
		<div class="col-sm-4"> 
			   <?php  if(isset($done)) { ?>
				<div class="successmsg"><span style="font-size:100px; ">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff; align:center">Login here... </a> </div>
                 <?php }  ?> 
                 


		</div>
		<!--form start-->
		<div class=" signup_form col-sm-4 ">
			  <br><img src="../images/Op2.png" alt="Healthy Farm Crops" class="form-control"><br>
			  <div style="text-align-last: center;"></div>
			<form 
			   action="" method="POST">

			  <div class=" form-group mb-3">
			    <label  class="form-label">First Name</label>
			    <input type="text" class="form-control" name="ftname" > 
			   </div>
			   <div class=" form-group mb-3">
			    <label  class="form-label">Last Name</label>
			    <input type="text" class="form-control" name="ltname" > 
			   </div>
			    <div class=" form-group mb-3">
			    <label class="form-label">User Name</label>
			    <input type="text" class="form-control" name="username" >
			   </div>
			   <div class=" form-group mb-3">
			    <label  class="form-label">Email</label>
			    <input type="email" class="form-control" name="email" > 
			   </div>
			   <div class=" form-group mb-3">
			    <label  class="form-label ">Address</label>
			    <input type="textarea" class="form-control" name="address" > 
			   </div>
			    <div class=" form-group mb-3">
			    <label  class="form-label">Contact No</label>
			    <input type="tel" class="form-control" name="contactno" >
			   </div>
			   <!--Date here-->
				<div class=" form-group mb-3">
			    <label  class="form-label">Password</label>
			    <input type="password" class="form-control" name="password" > 
			   </div>			   
				<div class=" form-group mb-3">
			    <label  class="form-label">Confirm Password</label>
			    <input type="password" class="form-control" name="confirmpassword">
			  </div>
			  <!--account no here-->
			  <button type="submit" name="signup" class="btn btn-primary form_btn" >REGISTER
			  </button>
			</form>
			<p>Have an account?<a href="login.php" > Log in</a></p>
		</div>
		<!--form end-->
	</div>
	</div>
	<!--container end-->	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
	
	

</html>