<?php
session_start();
if(isset($_POST['mobile']))
$_SESSION['mobile']= $_POST['mobile'];

?>
	