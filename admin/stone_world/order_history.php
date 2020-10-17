<?php
include "../include/header.php";
 $fetch = $marble->fetchData("*", "stone_category_order_history inner join customer on stone_category_order_history.customer_id=customer.id");

$i=0;

?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">
Order History</h4>
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
<th>Category Name</th>
<th>Product Name</th>
<th>Customer Name</th>
<th>Customer Email</th>
<th>Customer Mobile</th>
<th>Customer Address</th>
<th>Date Order Placed</th>

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
<td>'.$stone_category_name.'</td>
<td>'.$product_name.'</td>
<td>'.$name.'
</td>
<td>'.$email.'</td>

<td>'.$mobile.'
</td>
<td>'.$address.'
</td>
<td>'.$date.'
</td>
</tr>';

} 
?>
</tbody>
<tfoot>
<tr>
<th>No</th>
<th>Project Title</th>
<th>Customer Name</th>
<th>Customer Email</th>
<th>Customer Mobile</th>
<th>Customer Address</th>
<th>Date Order Placed</th>

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
