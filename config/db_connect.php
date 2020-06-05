<?php

###Connect to database###
$dbhost = "localhost";
$dbname = "ipia";
$dbuser = "ipia";
$dbpass = "ipia123";


$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>