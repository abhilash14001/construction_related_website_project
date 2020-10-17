<?php
include "include/config.php";
if(isset($_POST['reset']))
{
	
	$fetch = $marble->fetchData("email", "customer where email = '$_POST[email]'");

	if(mysqli_num_rows($fetch)>0)
	{
		while($query=mysqli_fetch_assoc($fetch)){
	$email = $query['email'];
	$pass = rand(100000, 999999);
	$passs = md5($pass);
	$marble->updateData("customer", "password = '$passs' where email = '$_POST[email]'");
	
	$marble->email("Reset Password", "Reset_Password", $email,  $pass);
	$_SESSION['msg'] = $marble->bAlert("success", "Your Password has been Reset and Sent to Your Mail Id");
	header("location:index.php");
	}
	}
	else
	{
	$_SESSION['msg'] = $marble->bAlert("danger", "Username Not exists");	
	header("location:index.php");
		}
	}


?>	
	