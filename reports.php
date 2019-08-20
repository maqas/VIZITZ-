<?php?>

<html>
<head>
<title>
VISITOR MANAGEMENT SYSTEM
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/
HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<style>
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
              <a class="nav-link" href="admin.html">Home <span class="sr-only">(current)</span></a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li> 
          </ul>
      </nav>
      </div>
        
  </div>

</div>
<body>

	
            </div><hr>
            <div class="area1">
            <center><u>Reports</u></center><br>
            	
            	
            	<table class="report">
                        <tr>
                              <td>Total number of users:</td>
                              <td>
                                    <?php
                                    require 'function.php';
                                    $query="SELECT * FROM users";
                                    $result = mysqli_query($db,$query) or die(mysqli_error($db));
                                    $row=mysqli_num_rows($result);
                                    echo $row;
                                    ?>
                              </td>

                              <td><center><form action="Userreport.php" method="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total records of visitors:</td>
                              <td>
                                    <?php
                                    $conn= new mysqli('localhost','root','','reception');
                                    require 'visitordetails.php';
                                    $query="SELECT * FROM visitors";
                                    $result =mysqli_query($conn,$query) or die(mysqli_error($conn));
                                    $row=mysqli_num_rows($result);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="displaydata.php" method="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                        <tr>
                              <td>Total number of hosts:</td>
                              <td>
                                    <?php
                                    require 'host.php';
                                    $query= "SELECT * FROM hosts";
                                    $result =mysqli_query($conn,$query) or die(mysqli_error($conn));
                                    $row=mysqli_num_rows($result);
                                    echo $row;
                                    ?>
                              </td>
                            <td><center><form action="hostreport.php" method="POST">
                                                <input type="submit" name="btn" class="bltn" value="view">
                                          </form></center></td>
                        </tr>
                              
                  </table>
            	


            </div>
        </div>

		



	</div>
</body>
</html>