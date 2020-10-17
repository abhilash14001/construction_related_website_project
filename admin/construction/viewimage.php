
<?php
include "../include/config.php";

$fetchimage = $marble->fetchData("title, images", "construction where id = '$_POST[id]'");

  foreach($fetchimage as $fet){
		  $image =  $fet['images'];
		  
		  }
		  $image = explode(", ", $image);
	echo '<h4><p><center>'.$fet['title'].'</center></p></h4>';
	echo '<div class="row"  style = "margin-left:30px">';
	if(!empty($fetchimage)){
foreach($image as $bm){
	
echo '

  <div class="column">
           
 <img src = "images/'.$bm.'" width="100%" height="100px"> 

</div>

';  }
	}
echo '</div>'; 

?>