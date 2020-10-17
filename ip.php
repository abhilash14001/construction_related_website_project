<?php
include "admin/include/header.php";
 $fetch = $marble->fetchData("*", "ipaddress");

$i=0;

?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">
IP Detail</h4>
<br>
<br>

<div class="table-responsive">

<table id="file_export" class="table table-striped table-bordered display">
<thead>
<tr>

<th>No</th>
<th>IP</th>
<th>Time</th>

</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($fetch)){
$i++;
extract($row); 


?>
<tr>

<?php  echo '<td>'.$i.'</td>
<td>'.$ip.'</td>
';
echo '
<td>'.$time.'</td>';
?>
</tr>
<?php
 
} 
?>	
</tbody>
<tfoot>
<tr>
<th>No</th>
<th>IP</th>
<th>Time</th>

</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>


<?php
include "admin/include/footer.php";
?>
