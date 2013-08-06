<?php 
include 'BrownUtil.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$subject= $_POST["subject"];
$msg = $_POST["message"];
     
BrownUtil::sendEmail($fname, $lname, $email, $subject, $msg); 

?>