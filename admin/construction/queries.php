<?php
include "../include/header.php";
 $fetch = $marble->fetchData("*", "construction_query");

$i=0;

?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">
Construction Query Details</h4>
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

<th>Customer Name</th>
<th>Customer Email</th>
<th>Customer Mobile</th>
<th>Date Query Placed</th>
<th>Query</th>

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
<td>'.$name.'
</td>
<td>'.$email.'</td>

<td>'.$phno.'
</td>
<td>'.$date.'
</td><td>'.$query.'
</td>
</tr>';

} 
?>
</tbody>
<tfoot>
<tr>
<th>No</th>
<th>Customer Name</th>
<th>Customer Email</th>
<th>Customer Mobile</th>
<th>Date Query Placed</th>
<th>Query</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
<?php
include "../include/footer.php";
?>
