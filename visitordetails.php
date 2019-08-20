<?php

$servername = "localhost";
$username= "root";
$password = "";
$dbname = "reception";

if(isset($_POST['submit']))
{
  
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$currdate=$_POST['currdate'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$whereto=$_POST['whereto'];

$conn= new mysqli('localhost','root','','reception');

if(!$conn){
  echo "Error: ".mysqli_connect_error();
}
  echo "Connected";

$sql ="INSERT INTO visitors(firstname, lastname, currdate, checkin, checkout, department)VALUES('$firstname', '$lastname', '$currdate', '$checkin', '$checkout', '$whereto')";

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