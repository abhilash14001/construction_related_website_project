<?php error_reporting($level=null);
include "include/header.php";
$fetch = $marble->fetchData("username, email", "admin where id = '1'");
$admin = mysqli_fetch_assoc($fetch);


if(isset($_POST['submit'])){
	extract($_POST);
if($cpassword != $password)
{
	
$error ='<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
<span class="badge badge-pill badge-danger">Failed</span>
Password Does Not Match!!!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
	
}
else
{
$error ='<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
<span class="badge badge-pill badge-danger">Success</span>
Updated Successfully
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

if(!empty($password) && !empty($cpassword)){
	$password = md5($password);
$marble->updateData("admin", "password = '$password', username = '$name', email = '$email' where id= '1'");
}
else
{
$marble->updateData("admin", "username = '$name', email= '$email' where id= '1'");	
}
$marble->redirect("index.php");
}
}

	
?>
<br>
<div class="abhilash">
<div class="card abhi col-md-8">
	
<div class="card-header">
<center><h3><strong>Admin</strong> Profile</h3></center>

</div>
<?php 
	if(isset($error)){
		echo $error;
		}
			if(isset($success)){
			echo $success;
			}
			extract($admin);
	?>
<div class="card-body card-block">
<form action="#" method="post">
<div class="form-group"><label for="nf-email" class=" form-control-label">Username</label><input type="text" id="nf-email" name="name" placeholder="Update Username" value="<?php echo $username; ?>" class="form-control"></div>
<div class="form-group"><label for="nf-email" class=" form-control-label">Email Id</label><input type="text" id="nf-email" name = "email"  value="<?php echo $email; ?>" class="form-control"></div>
<div class="form-group"><label for="nf-password" class=" form-control-label">Password</label><input type="password" id="nf-password" name="password" placeholder="Enter Password.." class="form-control"></div>
<div class="form-group"><label for="nf-password" class=" form-control-label">Confirm Password</label><input type="password" id="nf-password" name="cpassword"   placeholder="Enter Confirm Password.." class="form-control"></div>

</div>
<div class="modal-footer">
<button type="submit" name = "submit" class="btn btn-primary btn-sm">
<i class="fa fa-dot-circle-o"></i> Submit
</button>
<button type="reset"  class="btn btn-danger btn-sm">
<i class="fa fa-ban"></i> Reset
</button>
</div>

</div>
</div>
</div>

<?php include "include/footer.php"; ?>
