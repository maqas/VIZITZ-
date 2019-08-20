<?php

session_start();

//create server and database connection constants
$db = mysqli_connect('localhost', 'root', '', 'reception');
//declare variables for signiupdetails

$passwd= "";
$user_name= "";
$email="";
$phoneno="";
$rpt_password= "";

if(isset($_POST['submit'])){

	$user_name= $_POST['user_name'];
	 $phoneno = $_POST['phoneno'];
	 $email = $_POST['email'];
	 $passwd = $_POST['passwd'];
	 $rpt_password = $_POST['rpt_password'];

}

if(!$db){
echo "Error: ".mysqli_connect_error();
}else
{echo "Connected";}

$sql = "INSERT INTO signupdetails(user_name, phoneno, email, passwd, rpt_password) VALUES('$user_name','$phoneno','$email','$passwd','$rpt_password')";

$query = mysqli_query($db, $sql);

if (mysqli_query($db, $sql))
								{
									 echo "Record entered successfully!";
							 }
			 else {
									 echo "Error inserting record " ;

						}





























































