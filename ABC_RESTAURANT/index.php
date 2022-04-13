
 <?php

 session_start();
// database connectivity
require_once 'db.php';

 if(isset($_POST["login"]))
 {

 	$username=$_POST['username'];
 	$password=$_POST['password'];

 	$result=mysqli_query($connection,"SELECT * FROM users WHERE username='$username' ");
 	$row=mysqli_fetch_assoc($result);

 	if(mysqli_num_rows($result)>0)
 	{
 		if($password == $row["password"])
 		{
 			$_SESSION['status']="Active";
 			$_SESSION['username'] =$username;
 			header("location:login.php");


 		}
 		else
 		{
 			echo"<script> alert('incorrect password');</script>";
 		}
 	}
 	else
 	{
 	  echo"<script> alert('user is not registered');</script>";
 	}


 }
    
	
?> 

<html>
<head>
	<title>login </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body >

	
	  <div class="container logo">
	    <p>Restaurant Analytical Website</p>
	    <h2> &nbsp;&nbsp;Quality matters....</h2>
	  </div>
	


	
	<div class="card center-block login" >

		<div class="card-body">

			<form  action="index.php" method="post" >
			  <div class="form-group">
			    <label for="username">Username :</label>
			    <input type="text" class="form-control" id="username" name="username" size="20" required>
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" class="form-control" id="password" name="password" size="20" required>
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox">Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary" name="login">Login</button>
			  <p>New User?
			  <a href="signup.php">Signin</a>
			  </p>

			  
			 

			  

			</form> 



	</div>
	</div>



</body>
</html>