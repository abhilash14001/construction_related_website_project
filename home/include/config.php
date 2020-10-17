<?php error_reporting($level = null);
session_start();
ob_start();

date_default_timezone_set('Asia/Kolkata');
define('ADMIN_URL', 'http://localhost/tanu/marble/admin/');	
define('BASE_URL', 'http://localhost/tanu/marble/');	
define('HOME_URL', 'http://localhost/tanu/marble/home/');	

$con=mysqli_connect('localhost','root','','marble');	
include $_SERVER["DOCUMENT_ROOT"]. '/tanu/marble/include/functions.php';
$marble= new Marble();

$user = $_SESSION["user"];
?>