<?php
include "../include/config.php";	
if(isset($_POST['login']))
{

extract($_POST);
$passwordse = md5($passwords);
$fetch = $marble->fetchData('*', "customer where email = '$emails' and password = '$passwordse'");
while($row = mysqli_fetch_assoc($fetch)){
extract($row);
if($email == $emails && $password == $passwordse){
$name = explode(" ", $name);
$_SESSION['user'] = $name[0];	
$_SESSION['user1'] = $name[1];	
header("Location:../index.php");

}
else
{
	$_SESSION['msg'] = "<script>alert('Invalid Login credentials');</script>";	
	header("Location:../login.php");
}
}



}
