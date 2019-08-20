<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
</head>
<style>
	

</style>

<body>

	<div class="wrapper">

		<div class="header"> <img src="" height="120px" width="900px">



		</div>

		<div class="content">
			<div class="menu">
				<table class="table">
					<tr>
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
                                    
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                                    
					</tr>
				</table>
            </div><hr>
            <div class="area1">
            <center><u>Add User</u></center>
                  
               <center>  
                  <form action="addrec.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                       <tr>
                              <td>user_namer</td>
                              <td>
                                   <input type="text" name="user_name" placeholder="Enter name"> 
                                     
                              </td>

                        </tr>
                         <tr>
                              <td>Type of User</td>
                              <td>
                                    <select name="usertype">
                                          <option></option>
                                          <option>admin</option>
                                          <option>receptionist</option>
                                    </select>
                                     
                              </td>

                        </tr>
                         <tr>
                              <td>Phone number</td>
                              <td>
                                   <input type="text" name="phoneno" placeholder="Enter digits"> 
                                     
                              </td>

                        </tr>

                           <tr>
                              <td>Email</td>
                              <td>
                                   <input type="text" placeholder="someone@gmail.com" pattern=".+@gmail.com" title="Please provide a vallid Emailaddress"  name="email">
                                     
                              </td>

                        </tr>
                        <tr>
                              <td>Password</td>
                              <td>
                                    <input type="passwd" name="passwd" placeholder="Enter Password">
                              </td>
                        </tr>

                        
                  </table> <br>
                  <input type="submit" name="submit" class="btn" value="Add User"></center>
                  </center>
                  
                  </form>
                  </center> 
                  
            	
            	<?php
            	extract($_POST);
            	if (isset($submit)) {

            require'function.php';
                       
            		$query=mysql_query("INSERT INTO users(user_name,usertype,phoneno,email,passwd) VALUES ('$user_name','$usertype','$phoneno','$email','$passwd')");
            		if (!empty($query)) {
            			echo "New User is Succesiful Added<br>";
            		}
            		else	
            		{
            			echo mysqli_error();
            		}
            	}
            	
            	?>


            </div>
        </div>

		<div class="footer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2018 all rights reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict 

		</div>



	</div>
</body>
</html>