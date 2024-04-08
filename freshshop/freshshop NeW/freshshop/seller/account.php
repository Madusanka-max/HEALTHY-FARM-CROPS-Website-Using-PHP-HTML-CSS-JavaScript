<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM seller WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$id = $res['id'];
$username = $res['username']; 
$fname = $res['fname'];   
$lname = $res['lname'];  
$email = $res['email'];  
$contactno =$res['contactno'];
$address = $res['address'];

}
 ?>
<html lang="en">
<head>
	<title>my Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body style="background-image: url(../images/3preview.jpg);">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
     <form action="login_process.php" method="POST">
  <div class="login_form">
 <img src="../images/Logo.png" alt="HEALTHY FARM CROPS" class="logo img-fluid" style="align:center;"> 
     <p><a href="../seller/login.php"><span style="color:red; float: right;">Back</span> </a></p>
          <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
          </tr>
           <tr>
              <th>ID </th>
              <td><?php echo $id; ?></td>
          </tr>
          <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
           <tr>
              <th>Address </th>
              <td><?php echo $address; ?></td>
          </tr>
           <tr>
              <th>Contact No  </th>
              <td><?php echo $contactno; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-3">
        </div>
    </form>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>