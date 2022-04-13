<?php 
// database connectivity
require_once 'db.php';

 if(isset($_POST['register']))
 {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];


  $duplicate =mysqli_query($connection,"SELECT * FROM users WHERE username='$username' OR email = '$email'");

  if(mysqli_num_rows($duplicate)>0)
  {
    echo 
    "<script> alert('username or email has already been registered');
    </script> ";
  }
  else
  {
    if($password ==$cpassword)
    {
      $query ="INSERT INTO users VALUES('', '$username', '$email', '$password', '$cpassword')";
      mysqli_query($connection,$query);
      echo
      "<script> alert('registeration is successful');
      </script> ";
      header("location:login.php");
    }
    else
    {
      echo 
      "<script> alert('check the password !');</script> ";
    }
  }
 }
?>
 

<html>
<head>
  <title>Sign up</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
</head>


<body>

     
  
    <div class="container logo">
      <p>Restaurant Analytical Website</p>
      <h2>&nbsp;&nbsp; Quality matters....</h2>
    </div>
  
  <div class="card center-block login" >

    <div class="card-body">


        <form action="signup.php" method="POST" >


        <div class="form-group">
          <label for="name">Username :</label>
          <input type="text" class="form-control" id="name" name="username" size="20" required>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="text" class="form-control" id="email" name="email" size="20" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="password" size="20" required>
          <small>We won't share your password with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="cpwd">Confirm Password:</label>
          <input type="password" class="form-control" id="cpwd" name="cpassword" size="20" required>
        </div>
        <button type="submit" class="btn btn-primary" name="register">Submit</button>
        

        

      </form> 
    </div>
  </div>




<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>
</html>