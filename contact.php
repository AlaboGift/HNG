<?php
require_once('alert.php');
require_once('mail.php');
$alert = new alert();
$mail = new mail();
$burl = 'http://localhost/hngi8/';
$error = 1;
$error_msg = 0;
if($_POST['name']==""){
	$error_msg.="Please input name";
	$error = 0;
}else{
	$name = $_POST['name'];
}
if($_POST['email']==""){
	$error_msg.="Please input email";
	$error = 0;
}else{
	$email = $_POST['email'];
}

if($_POST['message']==""){
	$error_msg.="Please input message";
	$error = 0;
}else{
	$message = $_POST['message'];
}

if($error==1){
	$mine = 'gift.alabo93@gmail.com';
	$subject = "Message From My Resume";
	$body = '<h3>'.ucwords($name).'('.$email.')</h1><br><br>'.$message;
	$mail->send ($subject,$body,$mine);
	$alert->set("Message Sent to Alabo Gift Thomson",'success');
	header('location:'.$burl.'#contact');
}else{
	$alert->set($error_msg,'danger');
	header('location:'.$burl.'#contact');
}

?>