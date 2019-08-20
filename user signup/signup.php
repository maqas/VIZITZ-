<?php include('function.php')?>

<!DOCTYPE html>

<html>
<title>RECEPTION MANAGEMENT</title>
<head>
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\VISITZ\user signup\signup.css">
</head>
<body>

<form class="signup" action="function.php" method="POST" style="border: 2px solid">
    <div class="containter">
      <h2>Signup below to register as a user</h2>
      <p>Please fill out all details.</p>
      <hr>
      <label for="user_name"><b>Username</b></label>
      <input type="text" name="user_name" placeholder="Enter name" required>
<br>
      <label for="phoneno"><b>phonenumber</b></label>
      <input type="text" name="phoneno" placeholder="Enter phone number" required>
<br>
      <label for="email"><b>Email</b></label >
      <input type="text" class="container-email" placeholder="Enter email" name="email" required>
<br>

      <label for="passwd"><b>Enter Password</b></label>
      <input type="password" placeholder="Enter password" name="passwd" required>
<br>
<br>
      <label>
        <input type="checkbox" checked="checked" name="remember">Remember me
      </label>

      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.
      </p>
        <div class="clear">
          <button type="submit" name="submit" class="signupbtn">SIGN UP</button>
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
      </div>

</form>


</body>



</html>
