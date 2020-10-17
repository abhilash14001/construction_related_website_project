<?php include '../include/header.php'; 
	function adminId($from)
{
	global $con, $marble;
	$fetch = $marble->fetchData("id", "admin where username= '$from'");
	while($row = mysqli_fetch_assoc($fetch)){
	extract($row);
	
	return $id;
	
	}
	
}
	function customerId($from)
{
	global $con, $marble;
	$fetch = $marble->fetchData("id", "customer where name= '$from'");
	while($row = mysqli_fetch_assoc($fetch)){
	extract($row);
	
	return $id;
	
	}
	
}


function toUserId($name)
{
	global $con, $marble;
	$fetch = $marble->fetchData("to_user_id", "chat_message inner join customer on chat_message.to_user_id=admin.id where username= '$name'");
	while($row = mysqli_fetch_assoc($fetch)){
	extract($row);

	return $touserid   = $to_user_id;
	
}
}
function fromUserId($name)
{
	global $con, $marble;
	$fetch = $marble->fetchData("from_user_id", "chat_message inner join customer on chat_message.from_user_id=customer.id where name= '$name'");
	while($row = mysqli_fetch_assoc($fetch)){
	extract($row);

	return $fromuserid  = $from_user_id;
	
}
}


function getdateTimemsg($id)
{
	global $con, $marble;
	$fetch = $marble->fetchData("date_time, chat_message", "chat_message where to_user_id= '$id' order by date_time desc");
	while($row = mysqli_fetch_assoc($fetch)){
	extract($row);
	
	
	$ee = array($date_time, $chat_message);
	return $ee;
	
}
}

function fetchUser()
{
global $admin_url, $con, $adminid, $dates, $marble;
$fetch = $marble->fetchData("name", "customer");

while($row = mysqli_fetch_assoc($fetch))
{
extract($row);
$fetdch = $marble->fetchData("username", "admin");
while($rows = mysqli_fetch_assoc($fetdch))
{
extract($rows);
$adminid = adminId($username);
$touser = adminId($username);
}
$customerid = customerId($name);

$fromuser = fromUserId($name);
print_r($date_time = getdateTimemsg($touser)[0])	;
$date_times= date("d-m-Y h:i a", $date_time);
if($touser == $adminid || $fromuser == $customerid){
echo '
	
<a href="#" value = "'.$customerid.'" from-id = "fromuser" class="message-item" id="chat_user_1" data-user-id="1">
<span class="user-img" > <img src  = "https://www.pngfind.com/pngs/m/93-938050_png-file-transparent-white-user-icon-png-download.png" class="rounded-circle"> <span class="profile-status online pull-right"></span></span>
<div class="mail-contnet">
'.$name.'
<h5 class="message-title"></h5> <span class="mail-desc">'.getdateTimemsg($touser)[1].' </span> <span class="time">'.$date_times.'</span> </div>
</a>';
	 }
 
}
}
	?>
<!-- ============================================================== -->
<!-- Left Part  -->
<!-- ============================================================== -->
<div class="left-part bg-white fixed-left-part">
<!-- Mobile toggle button -->
<a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
<!-- Mobile toggle button -->
<div class="p-15">
<h4>Chat Sidebar</h4>
</div>
<div class="scrollable position-relative" style="height:100%;">
<div class="p-15">
<h5 class="card-title">Search Contact</h5>
<form>
<input class="form-control" type="text" placeholder="Search Contact">
</form>
</div>
<hr>
<ul class="mailbox list-style-none">
<li>
<div class="message-center chat-scroll">
	
<?php  
/* $query = "customer inner join chat_message on customer.id = chat_message.from_user_id";
$fetch = $marble->fetchData("*", $query);	
if(mysqli_num_rows($fetch) >0)
{ */
	fetchUser(); 
/* } */	?>
<div class="col-3">
	<div class = "abhi-circle">
<a class="btn-circle  btn-lg btn-cyan float-right pull-right text-white" href ="#"><i class="fas fa-envelope"></i></a>
</div>
</div>
</div>

</li>
</ul>

</div>

</div>

<!-- ============================================================== -->
<!-- End Left Part  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right Part  Mail Compose -->
<!-- ============================================================== -->

<div class="right-part">

<div class="p-20" >
<div class="card">
<div class="card-body" id = "chat">
<h4 class="card-title">Chat Messages</h4>
<div class="chat-box scrollable" id = "openchat" style="height:calc(100vh - 300px);">
<!--chat Row -->

</div>

<div class="card-body border-top" >
<div class="row">
<div class="col-9">
<div class="input-field m-t-0 m-b-0">
<input id="textarea1" placeholder="Type and enter" class="form-control border-0" type="text">
</div>
</div>
<div class="col-3">
<a onclick = "submitChat()" class="btn-circle btn-lg btn-cyan float-right text-white" href ="#"><i class="fas fa-paper-plane"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<?php include '../include/footer.php'; ?>
<script>
function submitChat(){
	var msg= $("#textarea1").val();
	var time = "<?php echo $dates; ?>";
	var fromuser = $('a[from-id = "fromuser"]').attr("value");
	
	if(msg != '' && msg.trim() != '')
	{
	var newdiv = $('<div class="chat-content"><div class="box bg-light-inverse">'+msg+'</div><br><div class = "chat-time">'+time+'</div></div>');
	$('#current-chats').append(newdiv);
	$("#textarea1").val('');
}

$.ajax({
	url:"currentuserchat.php",
	data:{msg:msg, fromuser:fromuser, time:time},
	method:"POST",
	dataType:"html",
	
});
}


</script>
<script>
	$(document).ready(function(){
	$('a[from-id = "fromuser"]').click(function(){
	var fromuser = $(this).attr("value");

	
 $('#openchat').show();
	//setInterval(() => {	
	$.ajax({
		url: "showchat.php",
		method:"POST",
		dataType:"html",
		data : {fromuser:fromuser},
	success : function(data)
	{
	//alert(fromuser);
	$('#openchat').html(data);
	}
		});

	//}, 1000);
	});

});
</script>