<?php
	
include "../../include/config.php";	
if(isset($_POST['login']))
{
$getid = $_GET['id'];
extract($_POST);
$passwords = md5($passwords);
$fetch = $marble->fetchData('*', "customer where email = '$emails' and password = '$passwords'");
while($row = mysqli_fetch_assoc($fetch)){
print_r($row);
extract($row);
if($email == $emails && $password == $passwords){
	$name = explode(" ", $name);
$_SESSION['user'] = $name[0];	
$_SESSION['user1'] = $name[1];
header("location:../productbuy.php?id=$getid");
}
else
{
	$_SESSION['msg'] = "<script>alert('Invalid Login credentials');</script>";	
	header("Location:../buy.php?id=$getid");
}
}

}
