<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN PAGE</title>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">		
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
span.passwd {
    float: center;
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
.H2{
	text-align: center;
}

</style>
<body style="background-color: #008080;">
	<h1 align="center">VISITOR MANAGEMENT SYSTEM</h1>
	<h2 align="center">USER LOGIN PAGE</h2>
	<form action=login.php method="POST" >
		<div class="imgcontainer">
		<img src="avatar.png" alt="avatar" height="200" width="200">
	</div>

	<div class="container">
		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="someone@gmail.com" pattern=".+@gmail.com" title="Please provide a vallid Emailaddress"  name="email" required>
		<br></br>
		<label for="passwd"><b>Password</b></label>
		<input type="password" placeholder="Enter password" name="passwd" required>
		<br></br>
		<button type="submit" name="submit">LOGIN</button >
		<label>
			<input type="checkbox" checked="checked" name="remember">Remember me
		</label>

	</div>
	<div class="container">
		<span class="passwd">Not a user?<a href="signup.php">Signup</a></span>
	</div>
	</form>

</body>

</html>

<?php
require('verification.php');

 if(isset($_POST['submit'])) 
    {
		session_start();
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
	//Check if user exists in the database
        $query = "SELECT * FROM users WHERE email='$email' and passwd= '$passwd'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));
		$rows = mysqli_fetch_array($result);

		if ($rows['usertype']=='admin')
				{
					$_SESSION['email'] = $email;
					$_SESSION['passwd'] = $passwd;
					header("Location: admin.html");
					exit;
				}
			elseif ($rows['email']==$email && $rows['passwd']==$passwd) 
			{
				$_SESSION['email'] = $email;
			$_SESSION['passwd'] = $passwd;
			header("Location: regviz.html");
			exit; // take user to welcome page
			}
            else
            {
				echo "<div class='form'>
				<h3> Username/password is incorrect.</h3>
				}<br></br>
				Click here to <a href='login.php'>Login</a></div>";
			}
	}



?>