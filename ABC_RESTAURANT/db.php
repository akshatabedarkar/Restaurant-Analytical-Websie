
 <?php

  	$server ="localhost";
	$user = "root";
	$password = "";
	$db="restaurant";
	
	$connection=mysqli_connect($server,$user,$password,$db);

	if(!$connection)
	{
		die("failed to connect to localhost.");

	
	}
	
?>