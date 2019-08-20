<?php

session_start();

//create server and database connection constants
$db = mysqli_connect('localhost', 'root', '', 'reception');
//declare variables for signiupdetails
$user = "";
$passwd= "";
$errors = array();
$user_name= "";
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
}
echo "Connected";

$sql = "INSERT INTO signupdetails(user_name, phoneno, email, passwd, rpt_password) VALUES('$user_name','$phoneno','$email','$passwd','$rpt_password')";

$query = mysqli_query($db, $sql);
if (mysqli_query($db, $sql))
								{
									 echo "Record entered successfully!";
							 }
			 else {
									 echo "Error inserting record " ;

						}


//variable declaration

if (isset($_POST['submit'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $user, $errors;

	// grap form values
	$user = mysqli_real_escape_string($db, $_POST['email']);
    $passwd = mysqli_real_escape_string($db, $_POST['passwd']);


	// make sure form is filled properly
	if (empty($user)) {
		array_push($errors, "Email is required");
	}

	if (empty($passwd)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$passwd = md5($passwd);

		$query = "SELECT email, passwd FROM signupdetails WHERE email='$user' AND passwd='$passwd'";

		$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1)  { // user found
			$_SESSION['email'] = $user;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.html');
			}
		else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


?>
