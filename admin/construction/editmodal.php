<?php
include "../include/config.php"; 
if(isset($_POST['editmodal']))
{
$fetch = $marble->fetchData("*", "construction where id = '$_POST[editmodal]'");
$row = mysqli_fetch_assoc($fetch);
extract($row);
?>
 
<div class="form-group">
<label for="recipient-name" class="control-label">Project Title</label>
<input type="hidden"  class="form-control" name = "id" value = "<?php echo $id; ?>">
<input type="text" autofocus autocomplete="off" class="form-control" name = "title" value = "<?php echo $title; ?>">
<input type="file" multiple autocomplete="off" class="form-control" name = "images[]" id="recipient-name1">
<select autocomplete="off" class="form-control" name = "status"  id="recipient-name1" value = "<?php echo $status; ?>">
	<option value ="ongoing">Ongoing</option>
	<option value ="upcoming">Upcoming</option>
	
	</select>

</div>

 
                                           
<?php } ?>
