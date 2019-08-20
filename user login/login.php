<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN PAGE</title>
</head>
<style>

	input[type=text], input[type=password]{
		width: 30%;
		padding:12px 20px;
		margin: 8px 0;
		display: inline-block;
		border:1px solid #E5E4E2;
		
	}
button:hover {
    opacity: 0.8;
}
button {
    background-color:#437C17;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    text-align: center;
}

}
span.passwd {
    float: right;
    padding-top: 16px;
}
div.container{
	object-position: center;
	text-align: center;
	width: auto;
}
.imgcontainer{
	object-position: center;
	text-align: center;
}

</style>
<body>
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
session_start();
    //  insert values to database 
    if (isset($_POST['email'])) and (isset($_POST['passwd']))
    {
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

	//Check if user exists in the database
        $query = "SELECT * FROM `users` WHERE email='$email' and passwd= '$passwd'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);

        if($rows==1){
			$_SESSION['email'] = $email;
			$_SESSION['passwd'] = $passwd;
			header("Location: index.html");
			exit; // take user to welcome page
            } 
            else
            {
				echo "<div class='form-area'>
				<h3> Username/password is incorrect.</h3><br/>
				<br/>
				Click here to <a href='loginweb.php'>Login</a></div>";
				}
	}
?>

	<h2 align="center">USER LOGIN PAGE</h2>
	<form action="verification.php" method="POST" >
		<div class="imgcontainer">
		<img src="avatar.png" alt="avatar" height="200" width="200">
	</div>

	<div class="container">
		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>
		<br></br>
		<label for="passwd"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="passwd" required>
		<br></br>
		<button type="submit" name="submit">LOGIN</button >
		<label>
			<input type="checkbox" checked="checked" name="remember">Remember me
		</label>

	</div>
	<div class="container">
		<span class="passwd">Not a user?<a href="signin.php">Sign In</a></span>
	</div>
	</form>

</body>
</html>
