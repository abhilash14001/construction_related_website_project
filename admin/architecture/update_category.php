<?php
include "../include/config.php"; 
if(isset($_POST['update_category']))
{
extract($_POST);
$i=0;
if(!(empty($_FILES['images']['name'][$i])))
{
$image  = $marble->fetchData("category_image", "stone_category where id = '$id'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['category_image'];
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
$querys = "category_name = '$category_name', category_image = '$pp', date_time = '$date' where id = '$id'";	
}	
$marble->updateData("stone_category", $querys);
}
else{
echo $query = "category_name = '$category_name', date_time = '$date' where id = '$id'";	
$marble->updateData("stone_category", $query);


}

$_SESSION['msg'] = $marble->bAlert("Data Updated Successfully");
$marble->header("view.php");
}
		
?>