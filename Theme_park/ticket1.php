<!DOCTYPE html>
<html>
<head>
	<title>Theme Park</title>
	<?php include_once 'include/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/ticket.css">
	<style>
  .kll {
  border: 2px solid black;
  /*background-color: #ffd966;*/
  /*outline:solid black 4px;*/
    box-shadow: 1px 1px 10px 5px grey;
  width: 900px;
  /*padding: 30px;*/
 
}
.lk{
   text-shadow: 2px 2px 5px blue;
   font-style: italic;
  font-size: 30px;
  margin-left: 525px;
  margin-top: 85px;
}

.lk1{
   text-shadow: 2px 2px 5px red;
   font-style: italic;
  font-size: 30px;
  margin-left: 100px;
  margin-top: 85px;
}
</style>
</head>
<body>
	<br><div class="header" ><h1>Ticket Booking Form</h1><br></div>

	<div class="maincontent">
		<form  action="backend/ticket1.php" method="post" autocomplete="off" class="signupformholder" enctype="multipart/form-data">
		<div class="new">
			<div class="kll container"><br><br>
			  <div class="form-group row">
			    <label for="fullname" class="col-sm-2 col-form-label offset-1"><b>Full Name</b></label>
				  <div class="col-sm-7">
				    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
			      </div>
				  <div class="fnm" id="namefb"></div>
			  </div> <br>

			  <div class="form-group row">
			    <label for="coupon" class="col-sm-2 col-form-label offset-1"><b>Coupon Code</b></label>
				  <div class="col-sm-7">
				    <input type="text" class="form-control" id="coupon" name="coupon" placeholder="Coupon">
			      </div>
				  <div class="cpn" id="couponfb"></div>
			  </div> <br>

				<div class="form-group row">
				  <label for="voucher" class="col-sm-2 col-form-label offset-1"><b>Voucher Type</b></label>
				  <div class="col-sm-9">
				  	 <input  type="checkbox" name="voucher" class="tech col-md-1" id="voucher" value="Male">Male
					  		
				     <input type="checkbox" name="voucher" class="tech col-md-1" id="voucher" value="female">Female

				     <input type="checkbox" name="voucher"  class="tech col-md-1" id="voucher" value="children">Children

				     <input type="checkbox" name="voucher" class="tech col-md-1" id="voucher" value="adult">Adult
			      	</div>
				      <div class="vch" id="voucherfb"></div>
				</div>


			  <div class="form-group row">
			    <label for="date" class="col-sm-2 col-form-label offset-1"><b>Date</b></label>
				  <div class="col-sm-7">
				    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
			      </div>
				  <div class="dht" id="dtfb"></div>
			  </div> <br>

				<div class="form-group row" >
				  <label for="age" class="col-sm-2 col-form-label offset-1" ><b>Age</b></label>
				  <div class="col-sm-7">
				      <input type="number" class="form-control" id="age" name="age" placeholder="Age">
			      </div>
				    <div class="ag" id="agefb"></div>
				</div><br>
				
				<div class="form-group row" >
				  <label for="mobilenumber" class="col-sm-2 col-form-label offset-1" ><b>Mobile Number</b></label>
				  <div class="col-sm-7">
				      <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number">
			      </div>
				    <div class="mb" id="mbnfb"></div>
				</div><br>

				<div class="form-group row" >
				  <label for="email" class="col-sm-2 col-form-label offset-1" ><b>Email Id</b></label>
				  <div class="col-sm-7">
				      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
			      </div>
				    <div class="em" id="emnfb"></div>
				</div><br>

				<div class="form-group row" >
				  <label for="transport" class="col-sm-2 col-form-label offset-1" ><b>Transport Type</b></label>
				  <div class="col-sm-7">
				      <input type="text" class="form-control" id="transport" name="transport" placeholder="Transport">
			      </div>
				    <div class="trs" id="transportfb"></div>
				</div><br>

		   		<div class="form-group row">
            		<div class="col-sm-6 offset-sm-5">
              			<button type="submit" class="btn btn-primary" id="sign">Sign in</button>
            		</div>
        		</div>
			</div>
		  </div>
		</form>
	</div>
<script type="text/javascript" src="js/signup1.js"></script>

  <br><br><br><a class="lk" href="index.php"><b>HOME</b></a>

  <a class="lk1" href="ticket.php"><b>For Non Coupon Code Facility</b></a><br><br><br>
</body>
</html> 
