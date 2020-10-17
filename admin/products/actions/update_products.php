<?php
include "../../include/config.php"; 
if(isset($_POST['submit']))
{
extract($_POST);
$i=0;
if(!(empty($_FILES['images']['name'][$i])))
{
$image  = $marble->fetchData("product_images", "products where id = '$_GET[id]'");
while($del = mysqli_fetch_assoc($image))
{
$delete = $del['product_images'];
$img = explode(", ", $delete);
foreach($img as $imgs){
unlink("../images/$imgs");	
}
}	
	
$dir = "../images/";
$countfiles = count($_FILES['images']['name']);

for($i=0; $i < $countfiles; $i++){
$filename = $_FILES['images']['name'][$i];
	$filenames[] = $_FILES['images']['name'][$i];
	$targetFilePath = $dir . $filename;
	move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath);	
	$pp = implode(", ", $filenames);

}	
$marble->updateData("products", "product_name = '$pname', product_images = '$pp', category_id = '$catid', sub_category_id = '$subcatid', description = '$desc', price= '$price', volume = '$volume'  where id = '$_GET[id]'");
}
else{
$marble->updateData("products", "product_name = '$pname', category_id = '$catid', sub_category_id = '$subcatid', description = '$desc', price= '$price', volume = '$volume'  where id = '$_GET[id]'");
}
$_SESSION['msg'] = $marble->bAlert("Data Updated Successfully");
$marble->header("../view.php");
}
		
?>
