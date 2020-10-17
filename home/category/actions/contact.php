<?php
if(isset($_POST['sendme']))
{
	
include "../../include/config.php";	
$home = HOME_URL;
	extract($_POST);
	$date = date_default_timezone_set('Asia/Kolkata');
$check = $marble->fetchData('name, email, phno, query', "stone_category_query where email = '$email' and name = '$name', phno = '$phno', query = '$message'");
if(!mysqli_num_rows($check)>0)
{
$marble->insertData('stone_category_query', "NULL, '$name', '$email', '$phno', '$subject', '$date', '$message'");
$_SESSION['msg'] = "<script>alert('Thank You For Contacting Us.... We will get back with you soon');</script>";
}
else
{
$_SESSION['msg'] = "<script>alert('You have already contacted');</script>";	
	
}
header("location:$home");	
	
}