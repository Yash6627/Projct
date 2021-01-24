<?php
$username='root';
$password='';
$hostname="localhost";
	
	$con=mysqli_connect($hostname,$username,$password) or die("Error connection to MYSQLI");
	if(!$con)
	{
		echo("connection error".mysli_error());
	}
	else
	{
		mysqli_select_db($con,"project_db");
	}
?>