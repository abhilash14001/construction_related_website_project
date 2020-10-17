<?php
if(isset($_POST['add_category']))
{
include "../include/config.php";	
extract($_POST);
$dir = "images/";
$countfiles = count($_FILES['images']['name']);

for($i=0; $i < $countfiles; $i++){
$filename = $_FILES['images']['name'][$i];
	$filenames[] = $_FILES['images']['name'][$i];
	$targetFilePath = $dir . $filename;
	move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath);	
	$pp = implode(", ", $filenames);
	
}
$check = $marble->fetchData("category_name", "stone_category where category_name = '$category_name'");
if(!(mysqli_num_rows($check)>0))
{
if($parent == "Select")
{
$marble->insertData("stone_category", "NULL, '$category_name', '$pp', '0', '$date'");
}else
{
$marble->insertData("stone_category", "NULL, '$category_name', '$pp', '$parent', '$date'");
}
}
else
{
$_SESSION['msg'] = $marble->bAlert("Category Already added", "danger");
$marble->header("view.php");	
exit;
}	
$_SESSION['msg'] = $marble->bAlert("Category Successfully added");
$marble->header("view.php");

}
?>