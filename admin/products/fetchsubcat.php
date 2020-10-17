<?php
include "../include/config.php";
if(isset($_POST['id']))
{
$fetchsubcat = $marble->fetchData("id, category_name", "stone_category where parent_id = '$_POST[id]'");
echo ' <option value="">Select</option>';
 while($row = mysqli_fetch_assoc($fetchsubcat)) {
extract($row);
echo '

<option value='.$id.'>'.$category_name.'</option>
	';
	}
}
	?>