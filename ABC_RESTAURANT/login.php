
<?php
require_once 'db.php';
session_start();

if($_SESSION['status']!="Active")
{
    header("location:index.php");
}

$username = $_SESSION['username'];
$msg ="<h3><div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>×</button>
    <strong>Success!</strong> Welcome  ".$username." !!
  </div></h3>";
	   echo $msg;


?>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  
  <h6><a  class="navbar-brand" href="login.php">ABC Restaurant</a></h6>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">

      <h6><a class="nav-link " href="order.php" >Order </a></h6>
    </li>
    <li class="nav-item">
      <h6><a class="nav-link" href="report.php">Report</a></h6>
    </li>
    <li class="nav-item">
      <h6><a class="nav-link" href="about_us.html">About us</a></h6>
    </li>
    <li class="nav-item">
      <h6><a class="nav-link" href="feedback.php">Feedback</a></h6>
    </li>
    <li class="nav-item">
      <h6><a class="nav-link" href="customer_feedback.php">Customer_Feedback</a></h6>
    </li>
    
	</ul>
	<ul class="nav navbar-nav ml-auto">
		 <li class="navbar-item ">
      <h6><b class="nav-link "><?php echo $username; ?></b></h6>
    </li>
     <li class="navbar-item ">
      <h6><a class="nav-link" href="logout.php">logout</a></h6>
    </li>
   
  </ul>
</nav> 
	
	
	 <div id="accordion" style=" margin-top: 10%; margin-left: 10%; margin-right: 10%;">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
       Mission
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        "We Stand For Something Good in everything we do”.Our aim to make our customer happy and satisfied . 
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
     	Visson
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
      To serve happiness to our customers through delicious, quality meals and extraordinary restaurant experience while working toward the greater good for our employees, community and environment.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        About us
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
       thank you to our mentor rupali ma'am for the wonderful support throughout the project.
      </div>
    </div>
  </div>

</div> 
</body>
</html>