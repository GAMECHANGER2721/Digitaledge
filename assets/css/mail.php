<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "digitaledge.contact@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: sales@digitaledges.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("/");
?>