<?php
$host = 'localhost';
$loginUser = 'root';
$loginPassword = '';
$dbName = '43';
$connect = mysqli_connect($host, $loginUser, $loginPassword, $dbName);//Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
?>