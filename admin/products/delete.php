<?php error_reporting($level = null);
include "../include/config.php";
if(isset($_GET['id']))
{
 $image  = $marble->fetchData("product_images", "products where id = '$_GET[id]'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['product_images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
unlink("images/$imgs");	
}
}

$marble->deleteData("products", "id = '$_GET[id]'"); 
$_SESSION['msg'] = $marble->bAlert("<i class = 'fas fa-trash'></i>Deleted Successfully");
header('location:view.php');
}

elseif(isset($_GET['del']))
{
	$del  =$_GET['del'];
foreach($del as $id){	
$image  = $marble->fetchData("product_images", "products where id = '$id'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['product_images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
if(file_exists("images/$imgs")){
unlink("images/$imgs");	
}
}
}
$query = "id = '$id'";
$marble->deleteData("products", $query); 

}
echo $marble->bAlert("Deleted Successfully");
} 

	?>