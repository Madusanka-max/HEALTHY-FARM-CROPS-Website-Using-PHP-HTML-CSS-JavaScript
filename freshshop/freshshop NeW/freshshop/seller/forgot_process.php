<?php require_once("config.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

session_start();


if(isset($_POST['subforgot'])){
	$login =$_REQUEST['login_var'];
	$query = "select * from seller where (username = '$login' OR email='$login')";
	$res = mysqli_query($dbc,$query);
	$result = mysqli_fetch_array($res);
	if($result)
	{
		$findresult = mysqli_query($dbc,"SELECT * FROM seller WHERE (username='$login' OR email = 
			'$login')");
		if($res = mysqli_fetch_array($findresult))
		{
			$oldftemail = $res['email'];  
		}
		$token = bin2hex(random_bytes(50));
		$inresult = mysqli_query($dbc,"insert into  pass_reset values ('','$oldftemail','$token')");
		if($inresult)
		{

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'growwithGenoxiatech@gmail.com';     
        $mail->Password = '123growG';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   

        //Send Email
        $mail->setFrom('growwithGenoxiatech@gmail.com');
        
        //Recipients
        $mail->addAddress($login);              
        $mail->addReplyTo('growwithGenoxiatech@gmail.com');
        
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = "Your password reset Link";
        $mail->Body    = "This your password reset link.<p><a href='http://localhost/freshshop%20NeW/freshshop/seller/password-reset.php'>Link</a></p> Click to reset your password....";

        $mail->send();
        
     
    } catch (Exception $e) {
    }
    
    header("location: forgot-password.php?sent=1");

}

            else{
			header("location: forgot-password.php?servererr=1");
		}

	}
	else{
			header("location: forgot-password.php?something_wrong=1"); 
	}
}
else  
{
header("location: forgot-password.php?err=".$login); 
}



?>