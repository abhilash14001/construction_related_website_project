
<?php
include "../include/config.php";

$fetchimage = $marble->fetchData("product_images", "products where id = '$_POST[id]'");

  foreach($fetchimage as $fet){
		  $images =  $fet['product_images'];
		  
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