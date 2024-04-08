<?php 
	//session_start();
	$dbHost ='localhost';
	$dbUsername ="root";
	$dbPassword ='';
	$dbName ='final';

	$dbc = mysqli_connect($dbHost ,$dbUsername,$dbPassword,$dbName);
	
	if (!$dbc) {
	echo "Connection failed!";
}
?>