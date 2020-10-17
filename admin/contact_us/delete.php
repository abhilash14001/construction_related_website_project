<?php
include "../include/config.php";
if(isset($_GET['id']))
{
$marble->deleteData("contact_us", "id = '$_GET[id]'");
}
elseif(isset($_GET['del']))
{
	$del  =$_GET['del'];
foreach($del as $id){	
$marble->deleteData("contact_us", "id = '$id'"); 
}
}
?>