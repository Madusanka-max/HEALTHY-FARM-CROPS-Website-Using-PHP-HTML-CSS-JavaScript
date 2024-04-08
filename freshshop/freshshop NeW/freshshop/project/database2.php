<?php

$db = mysqli_connect("localhost","root","","final");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>