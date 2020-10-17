<?php
if(isset($_POST['add_project']))
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
$check = $marble->fetchData("title", "construction where title = '$title'");
if(!(mysqli_num_rows($check)>0))
{
$marble->insertData("construction", "NULL, '$title', '$pp', '$status'");
$_SESSION['msg'] = $marble->bAlert("Project Successfully added");
}
else
{
$_SESSION['msg'] = $marble->bAlert( "Project Already added", "danger");
}
$marble->header("view.php");

}
?>