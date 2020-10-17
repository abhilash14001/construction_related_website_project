
<script>
function newsLetter(that){
	
	var email  = $('#emailed').val();
	var submit = that;
	if(email != '')
		{
	$.ajax({
		data:{email:email},
		method:'POST',
		dataType:'html',
		url:'<?php echo HOME_URL; ?>newsletter.php',
		
		
		beforeSend:function(data)
		{
			submitFun(submit);
			
		},
		 success:function(data)
		{
		
		$(submit).text(" Subscribed");	
		$(submit).prepend('<i class="fas fa-check"></i>');
		} 
		
	});
		}
	else
		{
			alert("Please Enter your Email");
		}
	
	
}
function newsLettersub(that){
	
	var email  = $('#emailsub').val();
	var submit = that;
	if(email != '')
		{
	$.ajax({
		data:{email:email},
		method:'POST',
		dataType:'html',
		url:'<?php echo HOME_URL; ?>newsletter.php',
		
		
		beforeSend:function(data)
		{
			submitFun(submit);
			
		},
		 success:function(data)
		{
		
		$(submit).text(" Subscribed");	
		$(submit).prepend('<i class="fas fa-check"></i>');
		} 
		
	});
		}
	else
		{
			alert("Please Enter your Email");
		}
	
	
}	

function submitFun(that)
{
	
	var submit = that;

	$(submit).text(" Processing..");	

	$(submit).prepend('<i class="fas fa-circle-notch fa-sm fa-spin"></i>');

}

function confirmDelete(id, that) 
{
 if (confirm('Are you sure?')) {
 
$.ajax({
	data:{id:id},
	dataType:"html",
	method:"GET",
	url:"delete.php",
	success : function(data){
$('#msg').html('<div class="alert alert-success alert-rounded">Deleted Successfully<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>');
$(that).closest('tr').remove();
}
});

      return true;
	}
	   else
	   {
		   return false;
		   }
		  
	
 }
 function confirmDeleteDesign(id)
 {
if (confirm('Are you sure?')) {
 
$.ajax({
	data:{id:id},
	dataType:"html",
	method:"GET",
	url:"delete.php",
	success : function(data){
$('#msg').html('<div class="alert alert-success alert-rounded">Deleted Successfully<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>');
window.location = "view.php";
}
});

      return true;
	}
	   else
	   {
		   return false;
		   }
		  
	
 }
 
</script>
<?php

class Marble{
public function redirect($url)
{
	echo '<meta http-equiv="refresh" content="0.1; URL='.$url.'">';	
}
public function header($url)
{
	
	header("Location:$url");
}
public function alert($alert)
{
	echo '<script>alert("'.$alert.'");</script>';
}
public function InsertData($table, $query){
	global $con;
return mysqli_query($con, "insert into $table values ($query)");
	
}

public function getCustomerId($user){
	global $con;
	
	
	$query13443 = "SELECT id FROM `customer` WHERE name='$user'";

	$rerre = mysqli_query($con, $query13443);

	$rdffdow = mysqli_fetch_array($rerre);

	return $rdffdow['id'];

}
	

public function fetchData($select, $table){
	global $con;  return mysqli_query($con, "select $select from $table");
	
}
public function updateData($table, $select){
	global $con;  return mysqli_query($con, "update $table set $select");
	
}
public function deleteData($table, $select){
	global $con;
mysqli_query($con, "delete from $table where $select");
	
}

public function bAlert($msg, $alert="success")
{
	
	return '<div class="alert alert-'.$alert.' alert-rounded"> '.$msg.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
</div>';
	
}
public function getCategoryName($id) {
	global $con;
	$query1 = "SELECT * FROM `stone_category` WHERE id=".$id;

	$result1 = mysqli_query($con, $query1);

	$row = mysqli_fetch_array($result1);

	return $row['category_name'];

}

public function getCatId($name) {
	global $con;
	$qq = "SELECT id FROM `stone_category` WHERE category_name = '$name'";

	$result3 = mysqli_query($con, $qq);

	$rowe = mysqli_fetch_array($result3);

	return $rowe['id'];

}

public function getId($name) {
	global $con;
	$qq = "SELECT parent_id FROM `stone_category` WHERE category_name = '$name'";

	$result3 = mysqli_query($con, $qq);

	$rowe = mysqli_fetch_array($result3);
 $parent= $rowe['parent_id'];
 $ll = $this->fetchData("id", "stone_category where id = '$parent'");
 $rows = mysqli_fetch_array($ll);
 return $parentid = $rows['id'];

}
public function email($subject, $from, $email, $pass)
{
$email_to = $email;
$email_subject = $subject;
$email_message = "Your passsword is $pass. Please reset the password once You Log In";
  $email_from = $from;
// create email headers
$headers = 'From: '.$email_from.''; 
'Reply-To: '.$email_from.' '.phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
}



}
?>
