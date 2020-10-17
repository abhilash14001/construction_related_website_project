<?php
include '../include/config.php';
//print_r($_SESSION);
 if(isset($_POST['fromuser']))
 {
$_SESSION['fromuser'] = $_POST['fromuser'];
 }
?> 

<ul class="chat-list"> 
	<?php

	

	
chatHistory(); 

?>



<li class="odd chat-item" id="current-chats">


</ul>
</div>
<?php

function chatHistory()
{
global $con, $marble, $timestamp;
$fetch = $marble->fetchData("*", "chat_message order by date_time asc");
$marble->updateData("chat_message", "read_status = 'Red' where from_user_id = '$_POST[fromuser]' || to_user_id = '$_SESSION[adminid]'");
while($row = mysqli_fetch_assoc($fetch)){
	extract($row);
$date_times= date("d-m-Y h:i a", $date_time);
if($from_user_id != $_POST['fromuser'] && $to_user_id == $_POST['fromuser'] && $from_user_id == $_SESSION['adminid'])
{
echo '<li class="odd chat-item"><div class="chat-content"><div class="box bg-light-inverse">'.$chat_message.'</div><br><div class = "chat-time">'.$date_times.'</div></div></li>';	
}
elseif($from_user_id != $_SESSION['adminid'] and $from_user_id == $_POST['fromuser'])
{
echo getChatUser($date_time);
}
}

}

function getChatUser($time)
{
global $con, $marble, $admin_url;
 $query = "chat_message inner join customer on chat_message.from_user_id = customer.id where from_user_id != '$_SESSION[adminid]' and from_user_id = '$_POST[fromuser]' and date_time = '$time'";	
$fetchs = $marble->fetchData("*", $query);
$rows = mysqli_fetch_assoc($fetchs);
extract($rows);
$date_times= date("d-m-Y h:i a", $date_time);
return $echo = '<li class="chat-item"><div class="chat-img"><img src="'.$admin_url.'assets/images/users/1.jpg" alt="user"></div><div class="chat-content"><h6 class="font-medium">'.$name.'</h6><div class="box bg-light-info">'.$chat_message.'</div></div><div class="chat-time">'.$date_times.'</div></li>';	
}

?>
