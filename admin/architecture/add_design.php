<?php
if(isset($_POST['submit']))
{
include "../include/config.php";	
extract($_POST);
$dir = "images/";
$filename = $_FILES['images']['name'];
$targetFilePath = $dir . $filename;
move_uploaded_file($_FILES['images']['tmp_name'], $targetFilePath);	

$check = $marble->fetchData("title", "architecture_design where title = '$title'");
if(!(mysqli_num_rows($check)>0))
{
$marble->insertData("architecture_design", "NULL, '$filename', '$title',  '$desc'");
$_SESSION['msg'] = $marble->bAlert("Design Successfully added");
}
else
{
$_SESSION['msg'] = $marble->bAlert( "Design Already added", "danger");
}
$marble->header("view.php");

}
?>