<?php
$file  =
"<?php
session_start();

date_default_timezone_set('Asia/Kolkata');

define('ADMIN_URL', 'http://localhost/tanu/payroll/admin/');	
define('BASE_URL', 'http://localhost/tanu/payroll/');	
define('HR_URL', 'http://localhost/tanu/payroll/HR/');	
include $_SERVER['DOCUMENT_ROOT'] . '/tanu/payroll/include/functions.php';
$con=mysqli_connect('localhost','root','','payroll');
$payroll = new PayRoll();
	?>";
file_put_contents("config.php", $file);	
	?>