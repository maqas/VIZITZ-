<?php
session_start();

//create server and database connection constants
$db = mysqli_connect('localhost', 'root', '', 'reception');
//declare variables for signiupdetails


if(isset($_POST['submit'])){

	$user_name= $_POST['user_name']; 
	 $phoneno = $_POST['phoneno'];
	 $email = $_POST['email'];
	 $passwd = $_POST['passwd'];
	 $usertype = $_POST['usertype'];
	


if(!$db){
echo "Error: ".mysqli_connect_error();
}else
{echo "Connected";}
$sql = "INSERT INTO users(user_name, phoneno, email, passwd,usertype) VALUES ('$user_name','$phoneno','$email','$passwd', '$usertype')";

$query = mysqli_query($db, $sql);

if (mysqli_query($db, $sql))
								{
									 echo "Record entered successfully!";
									
									 exit;
							 }
			 else {
									 echo "Error inserting record " ;

						}
}
?>
