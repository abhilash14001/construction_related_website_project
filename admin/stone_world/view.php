<?php
include "../include/header.php";
 $fetch = $marble->fetchData("*", "stone_category");
  $fetchs = $marble->fetchData("*", "stone_category where parent_id = 0");
$i=0;

?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">
View Category</h4>
<div class = "btn-group">
<button type = "button" data-toggle="modal" data-target="#addCategory" class = "pull-right btn btn-primary">Add Category</button>
&nbsp;<a id = "delall" href="javascript:void()" class = "btn btn-danger"><i class = "fas fa-trash"></i></a>

</div>
<br>
<br>

<div class="table-responsive">

<table id="file_export" class="table table-striped table-bordered display">
<div id = "msg"></div>
<?php if(isset($_SESSION['msg']) || isset($msg))
{
echo $_SESSION['msg'];
unset($_SESSION['msg']);
if(isset($msg))
echo $msg;
}
?>
<thead>
<tr>
<th><input type = "checkbox" id = "delcheck"></th>
<th>No</th>
<th>Category Name / Sub Category Name</th>
<th align = "center">Category View Image</th>
<th>Main Category Name</th>
<th>Action</th>

</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($fetch)){
$i++;
extract($row); 

?>
<tr>
<td>
<input type= "checkbox" id = "check" value = "<?php echo $id; ?>">		

	</td>
<?php  echo '<td align = "center">'.$i.'</td>
<td align = "center">'.$category_name.'</td>
<td align = "center"><button data-toggle="modal" data-target="#viewimage" class = "btn btn-primary showimage" id='.$id.'><i class = "fas fa-eye" style ="color:#fff"></i>&nbsp;View Images</button> 
</td>
<td align = "center">';
echo !empty($marble->getCategoryName($row['parent_id'])) ? $marble->getCategoryName($row['parent_id']) : '-'; echo '</td>';
?>
<td><button id = "<?php echo $id; ?>" type = "button" class="editbtn btn btn-success" data-toggle="modal" data-target="#editModal" ><span class = "fas fa-pencil-alt"></span>&nbsp;Edit</button>
<a type = "button" onclick = "confirmDelete(<?php echo $id;?>, this);" href = "#"   class="btn btn-danger confirmdelete"><span class = "fas fa-trash"></span>&nbsp;<font color="white">Del</font></a>
 
</td>

</tr>
<?php
 
} 
?>	
</tbody>
<tfoot>
<tr>
<th><input type = "checkbox" id = "delcheck"></th>
<th>No</th>

<th>Category Name / Sub Category Name</th>
<th align = "center">Category View Image</th>
<th>Main Category Name</th>
<th>Action</th>


</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
<!-- Edit Department Modal -->
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel1">Edit Category</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form method = "POST" enctype="multipart/form-data" action= "update_category.php">    
<div class="modal-body edit">
<div style = "margin-left:120px" id = "loader">
<img width="200px" height="200px" src = "<?php echo BASE_URL; ?>images/giphy.gif">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button onclick = "submitFun(this)" type = "submit" name = "update_category" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div>
<!-- Add project Modal-->

<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
<!-- Edit Department Modal -->
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel1">Add Category or Sub Category Here</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form method = "POST" action= "add_category.php" enctype="multipart/form-data">    
<div class="modal-body">
	<div class="form-group">
<label for="recipient-name" class="control-label">Select Parent Category</label>
<select required autocomplete="off" class="form-control" name = "parent">
<option value = "Select">Select
</option>
<?php
while($row = mysqli_fetch_assoc($fetchs)){
	extract($row);
echo '<a type = "button" value = "<?php echo $id;?>" href = "#"   class="btn btn-danger confirmdelete"><span class = "fas fa-trash"></span>&nbsp;<font color="white">Del</font></a>	
<option value = '.$id.'>'.$category_name.'
</option>';
} ?>
</select>
<label for="recipient-name" class="control-label">Category Name</label>
<input type="text" autocomplete="off" class="form-control" name = "category_name"  id="recipient-name1" autofocus>
	

<label for="recipient-name" class="control-label">Add Images</label>
<input multiple type="file" autocomplete="off" class="form-control" name = "images[]" id="recipient-name1">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button onclick = "submitFun(this)" type = "submit" name = "add_category" class="btn btn-primary">Save</button>

</form>
</div>
</div>
</div>
</div>

<!--View Image Modal-->
<div class="modal fade" id="viewimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
<!-- Edit Department Modal -->
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel1">View Image</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body view">
<div style = "margin-left:120px" id = "loader">
<img width="200px" height="200px" src = "<?php echo BASE_URL; ?>images/giphy.gif">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button onclick = "submitFun(this)" type = "submit" name = "update_department" class="btn btn-primary">Save</button>

</div>
</div>
</div>
</div>



<?php
include "../include/footer.php";
?>
<script>
$('.editbtn').click(function(){
var editmodal = $(this).attr("id");
$.ajax({
method:"POST",
data:{editmodal:editmodal},
dataType:"html",
url:"editmodal.php",
beforeSend:function(){
$('#loader').show();	
},
success:function(data){
$('.edit').html(data);
}
});
});

$('.showimage').click(function(){
var id = $(this).attr("id");
$.ajax({
method:"POST",
data:{id:id},
dataType:"html",
url:"viewimage.php",
beforeSend:function(){
$('#loader').show();	
},
success:function(data){
$('.view').html(data);
}
});
});
$('.modal').on('shown.bs.modal', function() {
  $(this).find('[autofocus]').focus();
});

$('#delall').hide();

$(document).ready(function(){
	$('input[type="checkbox"]').click(function (){
	
	$('#delall').show();
		
});
$('#delcheck').click(function(){
	$('input[type="checkbox"]').prop('checked', this.checked);
	$('#delall').show();
	});		

$('#delall').click(function(){
	var del = [];
$('#check:checked').each(function(i){
    del[i] = $(this).val();

  });
  if(confirm("Are you sure You want to delete?")){
  $("input[id='check']:checked").closest('tr').remove();
  $.ajax({
	  method:"GET",
	  data:{del:del},
	  url:"delete.php",
	  dataType:"html",
success:function(data){
$('#msg').html(data);

}
	  
	  
  });
}
  
  
});
});



</script>