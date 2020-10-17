<?php
include_once('../include/dbconfig.php');
$select = mysqli_query($con, "SELECT * FROM wishlist WHERE user_id=".$_POST['user_id']." AND product_id=".$_POST['product_id']."");
if(mysqli_num_rows($select) > 0) {
	$query = mysqli_query($con, 'DELETE FROM wishlist WHERE user_id='.$_POST['user_id'].' AND product_id='.$_POST['product_id'].'');
	echo json_encode(array("status"=>"N", "msg" => "Removed from wishlist"));
} else {
	$query = mysqli_query($con, 'INSERT INTO wishlist(user_id,product_id,created_at) VALUES ('.$_POST['user_id'].', '.$_POST['product_id'].', "'.date('Y-m-d H:i:s').'")');
	echo json_encode(array("status"=>"Y", "msg" => "Added into wishlist"));
}
?>