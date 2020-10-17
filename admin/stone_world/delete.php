<?php error_reporting($level = null);
include "../include/config.php";
if(isset($_GET['id']))
{
 $image  = $marble->fetchData("category_image", "stone_category where id = '$_GET[id]'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['category_image'];
$img = explode(", ", $delete);
foreach($img as $imgs){
unlink("images/$imgs");	
}
}
$query = "id = '$_GET[id]'";
$marble->deleteData("stone_category", $query); 
}

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
}

	?>