<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php");
}
$username = $_SESSION['username'];

include 'db.php';
	
$item = array('tea','coffee','samosa','cake','pizza','burger');


$ramStats =  array('tea' => 0 ,'coffee'=> 0,'samosa'=>0 ,'cake'=>0,'pizza'=>0,'burger'=>0);
$shamStats =  array('tea' => 0 ,'coffee'=> 0,'samosa'=>0 ,'cake'=>0,'pizza'=>0,'burger'=>0);
$ghanStats =  array('tea' => 0 ,'coffee'=> 0,'samosa'=>0 ,'cake'=>0,'pizza'=>0,'burger'=>0);
$user = "root";
$pass = "";
$db="restaurant";  
$connection=mysqli_connect("localhost",$user,$pass,$db);

$sql_distinct_users = "SELECT user,COUNT(1) as order_count FROM `transactions` GROUP BY user;";

$result = mysqli_query($connection,$sql_distinct_users);


$users=array();
$sales_count=array();

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    array_push($users,$row["user"]);
    array_push($sales_count,$row["order_count"]);
  }
}


// print_r($users) ;
// print_r($sales_count);



$dataPoints = array( 
	array("y" => $sales_count[0],"label" => $users[0] ),
	array("y" => $sales_count[1],"label" => $users[1] ),
	array("y" => $sales_count[2],"label" => $users[2] )
);


?>
<html>
<head>
	<title>Report</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  


<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Total Sales chart for Employees"
	},
	axisY: {
		title: "Orders (Per count)",
		includeZero: true,
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "$#,##0k",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>


</head>
<body>

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="login.php">ABC Restaurant</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="order.php" >Order </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="report.php">Report</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="about_us.html">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="feedback.php">Feedback</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="customer_feedback.php">Customer_Feedback</a>
    </li>
    
	</ul>
	<ul class="nav navbar-nav ml-auto">
		 <li class="navbar-item ">
      <b class="nav-link "><?php echo $username; ?></b>
    </li>
     <li class="navbar-item ">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
   
  </ul>
</nav>


<div class="container">
  <div class="row">
    <div class="col" id="chartContainer" style="height: 370px; width: 100%;"></div> 
  </div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>