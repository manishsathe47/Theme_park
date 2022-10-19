<?php
include_once '../database/data.php';

$fullname = strip_tags(@$_POST['fullname']);
$coupon = strip_tags(@$_POST['coupon']);
$voucher = strip_tags(@$_POST['voucher']);
$date = strip_tags(@$_POST['date']);
$age = strip_tags(@$_POST['age']);
$mobilenumber = strip_tags(@$_POST['mobilenumber']);
$email = strip_tags(@$_POST['email']);
$transport = strip_tags(@$_POST['transport']);

echo "fullname is $fullname <br> coupon is $coupon <br> voucher is $voucher <br> date is $date <br> age is $age <br> mobilenumber is $mobilenumber <br> email is $email <br> transport is $transport <br>";


	$queryCheck =$conn->query("SELECT *FROM `themepark_1`")->rowCount();
    $queryCheck =$queryCheck+1;

    switch ($voucher) {
     case 'male':
        $vch = "MP";
        break;

     case 'female':
        $vch = "FP";
        break;

     case 'children':
        $vch = "CP";
        break;
      
     case 'adult':
        $vch = "AP";
        break;

      default:
        $vch = "";
        break;
    }
  	$p_uid = $vch.$queryCheck;


$query=$conn->query("INSERT INTO `themepark_1` (`id`, `p_uid`, `fullname`, `coupon`, `voucher`, `date`, `age`, `mobilenumber`, `email`, `transport`, `timestamp`) VALUES (NULL, '$p_uid', '$fullname', '$coupon', '$voucher', '$date', '$age', '$mobilenumber', '$email', '$transport', '$currentDate')");
	
	if($query){
	   	header("location:../ticket1display.php?p_uid=$p_uid");
	     die();
	}else{
	    header("location:../ticket1.php");
	     die();
	}
 ?>