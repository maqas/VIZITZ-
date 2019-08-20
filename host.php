<?php

$servername = "localhost";
$username= "root";
$password = "";
$dbname = "reception";

if(isset($_POST['submit'])) 
{

$hostname=$_POST['hostname'];
$phoneno=$_POST['phoneno'];
$department=$_POST['department'];
$email=$_POST['email'];


$conn= new mysqli('localhost','root','','reception');

if(!$conn){
  echo "Error: ".mysqli_connect_error();
}
  echo "Connected";

$sql ="INSERT INTO hosts(hostname, phoneno, email, department)VALUES('$hostname', '$phoneno', '$email', '$department')";

$query = mysqli_query($conn,$sql);

 if($query)
 {
 	echo "Record inserted";
 
 }
 else{
 	echo "Error insterting record";
 	
			exit; // take user to home page
 }
}
?>