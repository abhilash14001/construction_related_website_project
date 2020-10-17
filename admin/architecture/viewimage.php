
<?php
include "../include/config.php";

$fetchimage = $marble->fetchData("category_image", "stone_category where id = '$_POST[id]'");

  foreach($fetchimage as $fet){
		  $images =  $fet['category_image'];
		  
		  }
		  $image = explode(", ", $images);

	echo '<div class="row"  style = "margin-left:30px">';
	
if(!empty($image[0])){
foreach($image as $bm){
	
echo '

  <div class="column">
           
 <img src = "images/'.$bm.'" width="100%" height="100px"> 

</div>

';  }
	}
	else
	{
 echo '<div class="column">
        
</div>';
	
	}
echo '</div>'; 

?>