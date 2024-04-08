<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body >
<!--start of container-->
<div class="container-fluid">
 <div class="row">
 	 <div class="col-sm-4 col-md-4 col-sm-12 mx-auto ">
 	    <!--Form start-->
 	    <div class="login_form">
 		<form action="login.php" method="post">
 			  <br><img src="../images/Op2.png" alt="Healthy Farm Crops" class="form-control mb-3">
 			  <?php if (isset($_GET['errmsg'])) { ?>
     		  <p class="errmsg"><?php echo $_GET['errmsg']; ?></p>
     		  <?php } ?><br>    		
			  <div class="mb-3">
    		  <label class="form-label">Username or Email </label>
    		  <input type="text" class="form-control" name="uname">    
  			  </div>
  			  <div class="mb-4">
    		  <label  class="form-label">Password</label>
   			  <input type="password" class="form-control" name="password">
  			  </div>  
			  <button type="submit"  class="btn btn-primary btn-group-lg form_btn">Login</button>
	    </form>
		</div>
		<!--Form end-->
     </div>
 </div>
</div>
<!--end of container-->
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" 
	integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</html>
