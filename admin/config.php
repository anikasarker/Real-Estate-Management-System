<?php
$hname = 'localhost';
$uname = 'root';
$pass = ' ';
$db = 'real_estate_system';

//$con=mysqli_connect($hname,$uname,$pass,$db);
	$con = mysqli_connect("localhost","root","","real_estate_system");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
?>
