<?php
	include './auth.php';
    $sql = mysqli_query($conn,"SELECT * FROM booking ORDER BY booking_id DESC LIMIT 1");
    $current_row = mysqli_fetch_row($sql);
	
	$sql = "DELETE FROM booking WHERE booking_id='$current_row[0]'";
	$result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cancel Reservation</title>
<meta name="reservation hotel" >
<link rel="stylesheet" href="scss/normalize.css">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link rel="stylesheet" href="scss/datepicker.css">
<link href="scss/datepicker.css" rel="stylesheet" type="text/css"/>  
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<!--link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody" style="background-image : url(img/background.jpg); no-repeat center center fixed; background-size: cover;">
 
<div class="row foo" style="margin:30px auto 30px auto;"><br><br>
<!--div class="large-12 columns">
		<div class="large-3 columns centerdiv">
			<a href="index.php" class="button round fontslabo" style="background-color:#2ecc71;">1</a>
			<p class="fontgrey">Please select Date</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo" >2</a>
			<p class="fontgrey">Select Room</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo">3</a>
			<p class="fontgrey">Guest Details</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo">4</a>
			<p class="fontgrey">Reservation Complete</p>
		</div>
</div-->

</div>
</div>
 
<div class="row">
	<div class="large-4 columns blackblur fontcolor" style="padding-top:25px;">
	
	<div class="large-12 columns " >
	<p><b>Booking has been cancelled</b></p>
			<form name="form" action="index.php" method="post">
			<!-- <div class="row">
				
						<label class="fontcolor" for="checkin">Booking Cancelled
						</label>
			</div> -->
					
			
			  <div class="row">
				<div class="large-12 columns" >
					<button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Go back to Home</button>
				</div>
			  </div>
			</form>
	</div>
	


</div>
</div>
<script>

</script>

</body>
</html>