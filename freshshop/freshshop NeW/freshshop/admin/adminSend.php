<?php session_start()?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="feedback.php">Back</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Send FEEDBACK</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="send_email.php">
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email" required="required"/>
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" required="required"/>
				</div>
				<div class="form-group">
					<label>Message</label>
					<input type="text" class="form-control" name="message" required="required"/>
				</div>
				<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
			</form>
			<br />
			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
		</div>
	</div>
</body>
</html>