<!DOCTYPE html>

<html>
<title>RECEPTION MANAGEMENT</title>
<head>

   <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/
HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
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
    background-color:#008080;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    text-align: center;
}
div.container{
  text-align: center;
  width: auto;
}
.imgcontainer{
  object-position: center;
  text-align: center;
  background-color: #008080;
  padding-top: 0px;
  margin-top: 0px;
}

</style>
 <div class="grid-container">
      <div class="imgcontainer">
      <img src="VISITZ.png" width="100" height="100">
      <h2>VISITOR MANAGEMENT SYSTEM</h2>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.html">VISITZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>    
          </ul>
      </nav>
      </div>
        
  </div>

</div>
<body>

<div class="containter">

  <form action="signup.php" id="signUpForm" method="POST" >
    
      <h2>Signup below to register as a user</h2>
      <p>Please fill out all details.</p>
      <hr>
      <label for="user_name"><b>Username</b></label>
      <input type="text" id="emailField" name="user_name" placeholder="Enter name" required>
<br>
      <label for="phoneno"><b>phonenumber</b></label>
      <input type="text" name="phoneno" placeholder="Enter phone number" required>
<br>
      <label for="email"><b>Email</b></label >
      <input type="text" class="container-email" placeholder="someone@gmail.com" pattern=".+@gmail.com" title="Please provide a vallid Emailaddress"  name="email" required>
<br>

      <label for="passwd"><b>Enter Password</b></label>
      <input type="password" placeholder="Enter password" name="passwd" required>
<br>

      <label>
        <input type="checkbox" checked="checked" name="remember">Remember me
      </label>

      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.
      </p>

      <div class="radio">
         <h3>Choose user type:</h3>
          <input type="radio" name="usertype" value="admin">admin<br>
          <input type="radio" name="usertype" value="receptionist">receptionist
      </div>
       
        <div class="clear">
          <button type="submit" name="submit" class="signupbtn">SIGN UP</button>
          <button type="button" id="okButton" class="cancelbtn">Cancel</button>
        </div>
  </form>

 </div>

</body>

<?php include('function.php')?>

</html>
