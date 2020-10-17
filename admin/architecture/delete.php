<?php error_reporting($level = null);
include "../include/config.php";
if(isset($_GET['id']))
{
 $image  = $marble->fetchData("images", "architecture_design where id = '$_GET[id]'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
unlink("images/$imgs");	
}
}

$marble->deleteData("architecture_design", "id = '$_GET[id]'"); 
$_SESSION['msg'] = $marble->bAlert("Deleted Successfully");
header('location:view.php');
}
/* 
elseif(isset($_GET['del']))
{
	$del  =$_GET['del'];
foreach($del as $id){	
$image  = $marble->fetchData("category_image", "stone_category where id = '$id'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['category_image'];
$img = explode(", ", $delete);
foreach($img as $imgs){
if(file_exists("images/$imgs")){
unlink("images/$imgs");	
}
}
}
$query = "id = '$id'";
$marble->deleteData("stone_category", $query); 

}
echo $marble->bAlert("Deleted Successfully");
} */

	?>