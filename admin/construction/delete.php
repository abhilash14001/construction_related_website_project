<?php
include "../include/config.php";
if(isset($_GET['id']))
{
$image  = $marble->fetchData("images", "construction where id = '$_GET[id]'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
unlink("images/$imgs");	
}
}
$marble->deleteData("construction", "id = '$_GET[id]'");
}
elseif(isset($_GET['del']))
{
	$del  =$_GET['del'];
foreach($del as $id){	
$image  = $marble->fetchData("images", "construction where id = '$id'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
if(file_exists("images/$imgs")){
unlink("images/$imgs");	
}
}
}
$query = "id = '$id'";
$marble->deleteData("construction", $query); 

}
echo $marble->bAlert("Deleted Successfully");
}

?>