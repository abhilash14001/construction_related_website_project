<?php
session_start();
ob_start();
date_default_timezone_set('Asia/Kolkata');
define('ADMIN_URL', 'http://localhost/tanu/marble/admin/');	
define('BASE_URL', 'http://localhost/tanu/marble/');	
define('HOME_URL', 'http://localhost/tanu/marble/home/');	
include $_SERVER["DOCUMENT_ROOT"] . '/tanu/marble/include/functions.php';
$con=mysqli_connect('localhost','root','','marble');	
$marble= new Marble();
error_reporting($level=null);
$adminuser = $_SESSION["admin"];
$adminid = $_SESSION["adminid"];
?>