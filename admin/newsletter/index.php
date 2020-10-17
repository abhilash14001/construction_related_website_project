<?php
include "../include/header.php";
 $fetch = $marble->fetchData("*", "newsletter");

$i=0;

?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">
Customer Subscribed for Newsletter</h4>


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

<th>No</th>
<th style = "text-align:center">Email</th>

</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($fetch)){
$i++;
extract($row); 
$img = explode(", ", $images);

?>
<tr>
<?php  echo '<td>'.$i.'</td>
<td align = "center">'.$email.'</td>
</tr>';
?>
<?php
 
} 
?>	
</tbody>
<tfoot>
<tr>

<th>No</th>
<th style = "text-align:center">Email</th>



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
<h4 class="modal-title" id="exampleModalLabel1">Edit Project</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form method = "POST" enctype="multipart/form-data" action= "update_construction.php">    
<div class="modal-body edit">
<div style = "margin-left:120px" id = "loader">
<img width="200px" height="200px" src = "<?php echo BASE_URL; ?>images/giphy.gif">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type = "submit" name = "update_construction" class="btn btn-primary">Save</button>
</form>
</div>
</div>
</div>
</div>
<!-- Add project Modal-->

<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
<!-- Edit Department Modal -->
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel1">Add Project</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form method = "POST" action= "add_project.php" enctype="multipart/form-data">    
<div class="modal-body">
	<div class="form-group">
<label for="recipient-name" class="control-label">Project Title</label>
<input type="text" required autocomplete="off" class="form-control" name = "title" autofocus>
<label for="recipient-name" class="control-label">Add Images</label>
<input multiple type="file" autocomplete="off" class="form-control" name = "images[]" id="recipient-name1">
<label for="recipient-name" class="control-label">Status Of the Project</label>
<select autocomplete="off" class="form-control" name = "status"  id="recipient-name1">
	<option value ="ongoing">Ongoing</option>
	<option value ="upcoming">Upcoming</option>
	
	</select>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type = "submit" name = "add_project" class="btn btn-primary">Save</button>

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
<button type = "submit" name = "update_department" class="btn btn-primary">Save</button>

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