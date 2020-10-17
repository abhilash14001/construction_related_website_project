<?php
if(isset($_POST['submit']))
{
include "../../include/config.php";	
extract($_POST);
$dir = "../images/";
$countfiles = count($_FILES['images']['name']);

for($i=0; $i < $countfiles; $i++){
$filename = $_FILES['images']['name'][$i];
	$filenames[] = $_FILES['images']['name'][$i];
	$targetFilePath = $dir . $filename;
	move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath);	
	$pp = implode(", ", $filenames);
	
}

$check = $marble->fetchData("product_name, description", "products where product_name = '$pname' and description = '$desc'");
if(!(mysqli_num_rows($check)>0))
{
$marble->insertData("products", "NULL, '$pname', '$pp', '$catid', '$subcatid', '$desc', '$price', '$volume'");
$_SESSION['msg'] = $marble->bAlert("Product Successfully added");
}
else
{
$_SESSION['msg'] = $marble->bAlert( "Product Already added", "danger");
}
$marble->header("../view.php");

}
?>