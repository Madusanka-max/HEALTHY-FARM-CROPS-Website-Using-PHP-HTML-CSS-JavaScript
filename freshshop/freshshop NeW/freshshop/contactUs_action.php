<?php

include 'config.php';

if(isset($_POST['sublogin']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactno = $_POST['contactno'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "INSERT INTO contact_us(sender_name,email,telephone,subject,message) VALUES('$name','$email',
	'$contactno','$subject','$message')";
	$result = mysqli_query($dbc,$sql);

	if($result)
	{
		header('location: contactUs.php?successmsg');
		exit();
    }
    if(!empty($name) || !empty($email) || !empty($contactno) || !empty($subject) )
    {
    	header('location: contactUs.php?errmsg');
    }
    		

else{
	header('location: contactUs.php?errmsg');
	exit();
}

}


?>