
<?php
include "../include/header.php";
$fetchproduct = $marble->fetchData("*", "products where sub_category_id = '$_GET[id]'");

if(isset($_GET['name']))
{
?>	


	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->
	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">Stone World</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>							
								</li>
								
								<li><a href="#"><?php echo $_GET['name']; ?></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- ======================================
	        ==   End Breadcrumb area  ==
	====================================== -->
	<!-- ======================================
	        ==   Start Export area  ==
	====================================== -->
	<section class="export">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1><?php echo $_GET['name']; ?></h1>
					</div>
				</div>
			</div>
			<div class="row">
			<?php while($product = mysqli_fetch_assoc($fetchproduct)) : 
				extract($product);
				$image = explode(", ", $product_images);
				?>
				<div class="col-sm-4 col-xs-12">
				
					<div class="export_item">
					
					<?php  foreach($image as $img) { ?>
					
					
						<img src="<?php echo ADMIN_URL;?>products/images/<?php echo $img; ?>" alt="export">
												
							
					<?php }  ?>

						<h2><?php echo $product_name; ?></h2>
						<div class="export_desc">
							<p><?php echo $description; ?></p>
							<p><?php echo "₹ &nbsp;" ?><span class = "price"></span><?php echo "/" . $volume; ?></p>
							<p>Enter Quantity<input type="number" id="quantity" name = "quantity" value= "1"></p>
							<br>	<br>
							<a class="add_cart btn3 class-right" id = "action" href="buy.php?id=<?php echo $id; ?>"><i class ="fas fa-shopping-basket"></i>&nbsp;Buy</a>
						</div>
					</div>
						
				</div>
				<?php endwhile; ?>
			</div>
			
		</div>
	</section>
	<!-- ======================================
	        ==   End Export area  ==
	====================================== -->
	<!-- ======================================
	        == Start Footer area  ==
	====================================== -->
	<?php
include "../include/footer.php"; 
}
?>
<script>			
	var pricessss = "<?php echo $price; ?>";	
	$('.price').html(pricessss);
$('#quantity').change(function(){
	var quantity = $(this).val();
	var prices = "<?php echo $price; ?>";	
	var total = quantity * prices;
	$('.price').html(total);


		});
		$('#action').click(function(){
		var qty = $('#quantity').val();
	var price = "<?php echo $price; ?>";
	$.ajax({
	
		data:{price:price, qty:qty},
		dataType:"html",
		method:"POST",
		url:"actions/setbuysession.php"
	});
});

</script>

