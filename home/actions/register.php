<?php
if(isset($_POST['register']))
{
include "../include/config.php";	
	extract($_POST);
$name = $fname . " " . $lname;
$password  = md5($password);
$check = $marble->fetchData('email', "customer where email = '$email'");
if(!mysqli_num_rows($check)>0)
{
$marble->insertData('customer', "NULL, '$name', '$email', '$mobile', '$password'");
$_SESSION['msg'] = "<script>alert('Registration Successfull');</script>";
}
else
{
$_SESSION['msg'] = "<script>alert('You have already registered');</script>";	
	
}
header("location:../index.php");	
	
}