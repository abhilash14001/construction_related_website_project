<?php
if(isset($_POST['sendme']))
{
include "../include/config.php";	
	extract($_POST);
$check = $marble->fetchData('name, email, mobile, message', "contact_us where email = '$email' and name = '$name', mobile = '$phno', message = '$message'");
if(!mysqli_num_rows($check)>0)
{
$marble->insertData('contact_us', "NULL, '$name', '$email', '$phno', '$subject', '$message'");
$_SESSION['msg'] = "<script>alert('Thank You For Contacting Us.... We will get back with you soon');</script>";
}
else
{
$_SESSION['msg'] = "<script>alert('You have already contacted');</script>";	
	
}
header("location:../index.php");	
	
}