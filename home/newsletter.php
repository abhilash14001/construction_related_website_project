<?php
include "include/config.php";
if(isset($_POST['email'])){
$email = $_POST['email'];
$check = $marble->fetchData('email', "newsletter where email = '$email'");
if(!(mysqli_num_rows($check)>0))
{
$marble->insertData('newsletter', "NULL, '$email'");
}
}

?>