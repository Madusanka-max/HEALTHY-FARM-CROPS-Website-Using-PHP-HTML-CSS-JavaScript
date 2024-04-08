<?php
$connectdb = mysqli_connect("localhost", "root", "");
 
if ($connectdb) {
//echo "<br/> Connected to server";
}else{
die("<br />Connection error ". mysqli_connect_error());
}
 
$selectdb = mysqli_select_db($connectdb, "products");
if ($selectdb) {
//echo "<br />Existing Database Selected";
} else {
$sqlcreatedb = "CREATE DATABASE IF NOT EXISTS `products`";
if (mysqli_query($connectdb, $sqlcreatedb)) {
//echo "<br />New database created";
$selectdb2 = mysqli_select_db($connectdb, "products");
if ($selectdb2) {
//echo "<br />Created database selected";
$sqlcreatetable = "
CREATE TABLE IF NOT EXISTS `productstb` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`productname` varchar(100) NOT NULL,
`productquantity` int(5) NOT NULL,
`productprice` double(8,2) NOT NULL,
`productdescription` varchar(100) NOT NULL,
`date` date NOT NULL,
`image` varchar(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
if (mysqli_query($connectdb,$sqlcreatetable)) {
//echo "<br />New table created";
} else {
//echo "<br />No table created";
}
}
 
} else {
//echo "<br />No database created";
}   
}
 
?>