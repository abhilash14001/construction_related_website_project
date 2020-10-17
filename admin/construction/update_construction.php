<?php
include "../include/config.php"; 
if(isset($_POST['update_construction']))
{
extract($_POST);
$i=0;
if(!(empty($_FILES['images']['name'][$i])))
{
$image  = $marble->fetchData("images", "construction where id = '$id'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
unlink("images/$imgs");	
}
}	
	
$dir = "images/";
$countfiles = count($_FILES['images']['name']);

for($i=0; $i < $countfiles; $i++){
$filename = $_FILES['images']['name'][$i];
	$filenames[] = $_FILES['images']['name'][$i];
	$targetFilePath = $dir . $filename;
	move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath);	
	$pp = implode(", ", $filenames);
$querys = "title = '$title', images = '$pp', status = '$status' where id = '$id'";	
}	
$marble->updateData("construction", $querys);
}
else{
$_SESSION['msg'] = $query = "title = '$title', status = '$status' where id = '$id'";
$marble->updateData("construction", $query);


}

$_SESSION['msg'] = $marble->bAlert("Data Updated Successfully");
$marble->header("view.php");
}
		
?>