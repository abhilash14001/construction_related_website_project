<?php
include "../include/config.php"; 
if(isset($_POST['editmodal']))
{
$fetch = $marble->fetchData("*", "stone_category where id = '$_POST[editmodal]'");
$row = mysqli_fetch_assoc($fetch);
extract($row);
$catname = $row['category_name'];
$fetchcat = $marble->fetchData("category_name", "stone_category where parent_id = 0");
?>
 
<div class="form-group">
	<input type="hidden"  class="form-control" name = "id" value = "<?php echo $id; ?>">
<!-- <label for="recipient-name" class="control-label">Select Category</label>

<select autocomplete="off" class="form-control" name = "parent">
<option value = "<?php echo !empty($marble->getCategoryName($row['parent_id'])) ? $marble->getId($row['category_name']) : "Select"; ?>"><?php echo !empty($marble->getCategoryName($row['parent_id'])) ? $marble->getCategoryName($row['parent_id']) : "Select"; 
		?>
</option>
<?php if(!empty($marble->getCategoryName($row['parent_id'])))
{
echo '<option value = "Select">Select
</option>';
}
	
?>
<?php

while($rows = mysqli_fetch_assoc($fetchcat)) {
if($marble->getCatId($rows['category_name']) != $marble->getId($row['category_name']))
{
echo '<option value = '.$marble->getCatId($rows['category_name']).'>'.$rows['category_name'].'
</option>';
}
} ?>
</select> -->
<label for="recipient-name" class="control-label">Enter Category Name</label>
<input value ="<?php echo $category_name; ?>" type="text" autocomplete="off" class="form-control" name = "category_name" id="recipient-name1">
<br>
<label for="recipient-name" class="control-label">Select Category Image</label>
<input type="file" multiple autocomplete="off" class="form-control" name = "images[]" id="recipient-name1">


 
                                           
<?php } ?>
