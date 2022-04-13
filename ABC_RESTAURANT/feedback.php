<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feedback!</title>

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

</head>
<body>


<!--Modal Launch Button-->
<button type="button" class="btn btn-info btn-lg openmodal" data-toggle="modal" data-target="#myModal" class="center">feedback please!</button>
<!--Division for Modal-->
<div id="myModal" class="modal fade" role="dialog">
    <!--Modal-->
    <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
            <!-- Modal Header-->
            <div class="modal-header">
                <h3>LOVE TO HEAR ABOUT OUR CUSTOMER!</h3>
                <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div> <!-- Modal Body-->


            <div class="modal-body text-center"> <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                <h3>Your opinion matters</h3>
                <h5>It Will Help us improve our services? <strong>Tell us !.</strong></h5>
                <hr>
                <h6>Type of customer?</h6>
            </div> <!-- Radio Buttons for Rating-->
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Family</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Friends</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Office Collegue</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Couples</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Indiviual</label> </div>


            <!--Text Message-->
            <div class="text-center">
                <h4>Did you noticed something?</h4>
            </div> <textarea type="textarea" placeholder="Your Message" rows="3"></textarea> <!-- Modal Footer-->


            <!-- mail to akshatabedarkar@gmail.com -->
            <div class="modal-footer"> <a href="mailto:akshata@gmail.com"href="" class="btn btn-primary">Send <i class="fa fa-paper-plane"></i> </a> <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>

</body>
</html>