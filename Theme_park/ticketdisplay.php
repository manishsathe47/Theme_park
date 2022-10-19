<?php 
	include_once 'database/data.php';
	$p_uid =@$_GET['p_uid'];
	 if ($p_uid == "" || $p_uid == null) {
	 	header("location:../ticket.php");
	 }
	 $dataquery =$conn->query("SELECT * FROM `themepark` WHERE `p_uid` = '$p_uid'");
	 while ($row = $dataquery->fetch(PDO::FETCH_ASSOC)) {	 
		$fullname = $row['fullname'];
		$voucher = $row['voucher'];
		$date = $row['date'];
		$age = $row['age'];
		$mobilenumber = $row['mobilenumber'];
		$email = $row['email'];
		$transport = $row['transport'];
		}
?>

<html>
 <head>
 	<title>display </title>
 	<link rel="stylesheet" type="text/css" href="css/ticket.css">
 	<link rel="stylesheet" type="text/css" href="css/display.css">
 	
  <?php  include_once 'include/head.php';?>
<style>
.kl{
	height: 50px;
	width: 100px;
	background-color:#f2f2f2;
   border: 3px solid black;
  outline: 4px solid blue;
  margin: auto;  
  padding: 2px;
  text-align: center;
  
}
</style>


 <html>
 <head>
 	<title>RECEIPT</title>
 	<link rel="stylesheet" type="text/css" href="css/display.css">
 </head>
 <body>	
 	<br><div class="header"><h1>Ticket Booking Form</h1></div>
 	<a class="lk" href="index.php"><b>HOME</b></a>
 	
 	<div class="maincontainer" style="border: 1px solid black; margin-top:5%; background-color:white;" >
 		<div class="row" style="display: flex;">
 		</div>
 				 <div class="row">
 				 	<div class="col-md-12" style="display :flex;">
 				 		<div class="col-md-6" style="display:flex;">
 				 		  <label class="col-md-1" class="date"><b>Date:</b></label>
 				 			<div class="col-md-9"><?php echo "$date"; ?></div>
 				 		</div>
 				 		<div class="col-md-6" style="display:flex;">
 				 			<label class="col-md-8" style="text-align:right;"><b>VOUCHER TYPE:</b></label>
 				 			<div class="col-md-2"><?php echo "$p_uid"; ?></div>
 				 		</div>
 				 	</div>		
 				 </div>
 				 <br>
	 			<div class="row">
 				 	<div class="col-md-12" style="display:flex;">
 				 		<label class="col-md-2"><b>Full Name:</b></label>
 				 		<div class="col-md-9" style="border-bottom:1px solid black;"><?php echo "$fullname"; ?>
 				 		</div>
 				 	</div>
 				</div>
 				<br><br>
 				<div class="row">
 				 	<div class="col-md-12" style="display:flex;">
 				 		<div class="col-md-6" style="display:flex;">
 				 		<label class="col-md-2"><b>Age:</b></label>
 				 		<div class="col-md-9" style="border-bottom:1px solid black; margin-top: 1px;"><?php echo "$age"; ?>
 				 		</div>
 				 		</div>
 				 		<div class="col-md-6" style="display:flex;">
 				 		<label class="col-md-3"><b>Mobile Number:</b></label>
 				 		<div class="col-md-8" style="border-bottom:1px solid black;"><?php echo "$mobilenumber"; ?>
 				 		</div>
 				 		</div>

 				 	</div>
 				</div><br><br>
 				
 				 	<div class="col-md-12" style="display:flex;">
 				 		<div class="col-md-6" style="display:flex;">
 				 		<label class="col-md-2"><b>Email Id:</b></label>
 				 		<div class="col-md-9" style="border-bottom:1px solid black;"><?php echo "$email"; ?>
 				 		</div>
 				 		</div>
 				 		<div class="col-md-6" style="display:flex;">
 				 		<label class="col-md-3"><b>Transport Type:</b></label>
 				 		<div class="col-md-8" style="border-bottom:1px solid black;"><?php echo "$transport"; ?>
 				 		</div>
 				 		</div>
 				 	</div>
 				</div>

 	<div class="row">
 		<div class="button col-md-12">
 			<button onclick="window.print();" class="btn btn-primary">Print </button><br>
 		</div>
 	</div>
  </div>
	
</body>
</html>