<?php
if(isset($_POST['msg']) and $_POST['fromuser'])
{
	include "../include/config.php";
	extract($_POST);
$time = time();
if($msg != "" && !(empty($msg)) && (trim($msg) != ""))
{
$marble->insertData("chat_message", "NULL, '$_SESSION[fromuser]', '$adminid', '$msg', '$time', '1', 'Unread'");
}
}
?>