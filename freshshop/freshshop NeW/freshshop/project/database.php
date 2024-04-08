<?php
error_reporting(0);
// Database configuration 
$dbHost     = "localhost";   // hostname
$dbUsername = "root";        // table username
$dbPassword = "";            // table password
$dbName ='final';            // database name
 
// Create database connection 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}else{
   // echo 'connection Ok';
}


?>