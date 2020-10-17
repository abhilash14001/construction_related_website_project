<?php
include "../include/header.php";

$fetchsubcatall = $marble->fetchdata("*", "stone_category where parent_id = '$_GET[id]'");
if(isset($_GET['category']))
{
?>

	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->
	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY"><?php echo $_GET['category'];?></h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
								<li><a href="#">Sub Categories of <?php echo $_GET['category'];?></a></li>
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
						<h1><?php echo $_GET['category'];?></h1>
					</div>
				</div>
			</div>
			<div class="row">
			<?php while($mm = mysqli_fetch_assoc($fetchsubcatall)) :
			extract($mm);
			$image = explode(", ", $category_image);
			?>
			<a href="<?php echo HOME_URL;?>products/products.php?name=<?php echo $category_name;?>&id=<?php echo $id;?>">
				<div class="col-sm-4 col-xs-12">
					<div class="export_item">
						<img src="<?php echo ADMIN_URL;?>stone_world/images/<?php echo $image[0];?>" alt="export">
						<h2><?php echo $category_name; ?></h2>
						<!-- <div class="export_desc">
							<p>Duis autem vel eum iriure dolor in drerit in vulputate velit essc.</p>
						</div> -->
					</div>
				</div>
			</a>
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
	<footer>
		<section class="contact_area">
			<div class="container">
				<div class="row">
					<div class="contact_box">
						<div class="col-sm-4 col-xs-12">
							<div class="contact">
								<div class="contact_title">
									<h1>Emergency Contact</h1>
								</div>
								<div class="contact_desc">
									<div class="contact_image">
										<i class="ion-android-call"></i>
									</div>
									<div class="contact_info">
										<a href="#">+001 (1234) 5647</a>								
										<a href="#">+001 (1234) 5647</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="contact">
								<div class="contact_title">
									<h1>Location</h1>
								</div>
								<div class="contact_desc">
									<div class="contact_image">
										<i class="ion-ios-location-outline"></i>
									</div>
									<div class="contact_info">
										<p>203, Envato Labs, Behind Alis Steet,Melbourne, Australia.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="contact">
								<div class="contact_title">
									<h1>Emergency Contact</h1>
								</div>
								<div class="contact_desc">
									<div class="contact_image">
										<i class="ion-ios-email-outline"></i>
									</div>
									<div class="contact_info">
										<a href="mailto:infonews@gmail.com">infonews@gmail.com</a>
										<a href="mailto:youremailname.net?subject=feedback">youremailname.net</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- footer top -->
		<?php
include "../include/footer.php";
}
?>