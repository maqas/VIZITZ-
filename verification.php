<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$db="reception";

  $con= new mysqli($host,$username,$password,$db);

		if($con->connect_error)
		{
			 die("Connection failed:".$con->connect_error);
		}
// insert values to databases
?>
