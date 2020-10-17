<?php
session_start();
if(isset($_POST['qty'])){
$_SESSION['qty'] = $_POST['qty'];
$total = $_POST['price'] * $_POST['qty'];

$_SESSION['totalprice'] = $total;
}
?>