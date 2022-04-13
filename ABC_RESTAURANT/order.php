 <?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:index.php");
}
$username= $_SESSION['username'];

$paymsg="";

//echo implode(" ",$_REQUEST);

if(isset($_POST['tea_qty'])){
  include 'db.php';

  $content = json_encode($_REQUEST);
  $json_arr = json_decode($content,true);
  $amt = $json_arr["total"]; 
  

  $sql = "insert into transactions (user,order_details,transaction_amount) values('".$username."','".$content."',".$amt.")";

  $user = "root";
  $pass = "";
  $db="restaurant";
  $connection=mysqli_connect("localhost",$user,$pass,$db);

  $result = mysqli_query($connection,$sql);
  if($result){


    $msg ="<h3><div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>×</button>
    <strong>Sucess!</strong> Ordered Placed.</h3>
  </div>";
     echo $msg;
     
    
  }
  else{

    $msg ="<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>×</button>
    <strong>Failed!</strong> Order failed try again.
  </div>";
     echo $msg;
    

  }
  
}

?>
<html>
<head>
  <title>order</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
</head>
</head>
<script>

   var orderObj = [];


   function addItem(){

    var itm = paymentForm.item.value;
    var qty = paymentForm.qty.value;
    var amt = paymentForm.amt.value;
    item = {}
        item ["name"] = itm;
        item ["qty"] = qty;
        item["amt"]=amt;
    orderObj.push(item);
    console.log(orderObj);

   }

  function calc(itm){

    switch (itm)
    {
      case 'tea': document.getElementById("tea_amt").value = 10 * document.getElementById("tea_qty").value;
            break;
      case 'coffee':document.getElementById("coffee_amt").value = 20*document.getElementById("coffee_qty").value;
            break;
      case 'samosa':document.getElementById("samosa_amt").value = 30*document.getElementById("samosa_qty").value;
            break;
      case 'cake':document.getElementById("cake_amt").value = 40*document.getElementById("cake_qty").value;
            break;
      case 'pizza':document.getElementById("pizza_amt").value = 50*document.getElementById("pizza_qty").value;
            break;
      case 'burger':document.getElementById("burger_amt").value = 60*document.getElementById("burger_qty").value;
            break;
    } 
    calc_total();


  }

  function calc_total() {
    document.getElementById("total").value = parseInt(document.getElementById("tea_amt").value) + parseInt(document.getElementById("coffee_amt").value) + parseInt(document.getElementById("samosa_amt").value) + parseInt(document.getElementById("cake_amt").value) +parseInt(document.getElementById("pizza_amt").value) + parseInt(document.getElementById("burger_amt").value) 
  }
</script>
<body>
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="login.php">ABC Restaurant</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="order.php" >Order </a>
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
      <b class="nav-link"><?php echo $username; ?></b>
    </li>
     <li class="navbar-item ">
      <a class="nav-link" href="logout.php">logout</a>
    </li>
   
  </ul>
</nav> 


    <div class="card" style="margin-top: 10%; margin-left: 20%;margin-right: 20%;">

      <div class="card-body">

     <form name="paymentForm" action="order.php" method="post">
      
         <div class="container">
         
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Items</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tea</td>
                <td><input  class="form-control"  id="tea_qty" type="number" name="tea_qty" value = "0" oninput="calc('tea')" min="0" ></td>
                <td><input  class="form-control"  id="tea_amt" type="text" name="tea_amt" value = "0" readonly></td>
              </tr>
              <tr>
                <td>Coffee</td>
                <td><input  class="form-control"  id="coffee_qty" type="number" name="coffee_qty" value="0" oninput="calc('coffee')" min="0"></td>
                <td><input  class="form-control"  id="coffee_amt" type="text" name="coffee_amt" value = "0" readonly></td>
              </tr>
              <tr>
                <td>samosa</td>
                <td><input  class="form-control"  id="samosa_qty" type="number" value = "0" name="samosa_qty" oninput="calc('samosa')" min="0"></td>
                <td><input  class="form-control"  id="samosa_amt" type="text" value = "0" name="samosa_amt" readonly></td>
              </tr>

              <tr>
                <td>cake</td>
                <td><input  class="form-control"  id="cake_qty" type="number" name="cake_qty" value = "0" oninput="calc('cake')" min="0" ></td>
                <td><input  class="form-control"  id="cake_amt" type="text" name="cake_amt" value = "0" readonly></td>
              </tr>
              <tr>
                <td>pizza</td>
                <td><input  class="form-control"  id="pizza_qty" type="number" name="pizza_qty" value="0" oninput="calc('pizza')" min="0"></td>
                <td><input  class="form-control"  id="pizza_amt" type="text" name="pizza_amt" value = "0" readonly></td>
              </tr>
              
              <tr>
                <td>burger</td>
                <td><input  class="form-control"  id="burger_qty" type="number" name="burger_qty" value = "0" oninput="calc('burger')" min="0"></td>
                <td><input  class="form-control"  id="burger_amt" type="text" name="burger_amt"  value = "0" readonly></td>
              </tr>


              <tr>
                <td>Total</td>
                <td><input  class="form-control"  id="total" type="number" name="total" readonly></td>
                <td> <button class="btn btn-success" type="submit">Confirm order</button></td>
              </tr>
            </tbody>

          </table>
    </div>
  </form>
      </div>

    </div>

    <div>
    </div>

</body>
</html>