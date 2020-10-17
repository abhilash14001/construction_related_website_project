<?php
include "../../include/config.php";
if(isset($_GET['id']) && isset($_POST['submit']))
{
$date  = date("d-m-Y h:i:sa");
$fetchcat = $marble->fetchData("*", "products where id = '$_GET[id]'");
$cat = mysqli_fetch_assoc($fetchcat);
extract($cat);
$catname = $marble->getCategoryName($category_id);
$usersdfddf = $_SESSION['user']." ".$_SESSION['user1'];
$customerid = $marble->getCustomerId($usersdfddf);
$qty = $_SESSION['qty'];
$total = $_SESSION['totalprice'];
$addre = $_POST['address'];
$pincode =$_POST['pincode'];
$landmark = $_POST['landmark'];
$_SESSION['query'] = "NULL, '$catname', '$product_name', '$customerid', '$addre', '$pincode', '$date', '$qty', '$total', '$landmark'";
$goid = $_GET['id'];
header("location:../checkout.php?id=$goid");
}
?>