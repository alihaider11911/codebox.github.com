<?php
if(isset($_POST['contact_btn'])){
   $name=$_POST['user_name'];
   $lastname=$_POST['user_lastname'];
   $country=$_POST['user_country'];
   $plan=$_POST['contact_plan'];
   $msg=$_POST['contact_msg'];
   $to="mrajput11911@gmail.com";
   $header="from:$email";

  if ( mail($to,$subject,$msg,$header)){
	$msg="message submitted successfully";
  }


}?>

