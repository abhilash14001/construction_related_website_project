
<?php 
include "../include/header.php";
$fetchdesign = $marble->fetchData("*", "architecture_design");


?>
   
  <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
.abhicustom    
{
	text-transform:none;
	font-weight: 500;
	
}
</style>
    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/ionicons.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">Architecture</h1>
			<h5 class = "abhicustom">Innovation for fulfill your dreams </h5>	
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
									<li><a href="<?php echo HOME_URL;?>architecture/">Architecture</a></li>				
									<i class="ion-ios-arrow-forward"></i>
								<li><a href="<?php echo HOME_URL;?>architecture/">Architecture Designing and Planning</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</section>
	

	
    <section id="work" class="p-top-100 p-bottom-70">
        <div class="container">
            <!-- Section Title -->
            <div class="row m-bottom-60">
                <div class="col-md-12">
                    <center><h3>Architecture Design & Planning</h3></center>
					
                    
                </div>
                          </div>
            <!-- End Section Title -->
            <div class="row">
                <!-- Project Grid -->
                <div id="grid-items" data-columns="">
                    <!-- work item -->
					<?php while($row = mysqli_fetch_assoc($fetchdesign))
					{ extract($row); 
						$image= explode(", ", $images);
						
						?>
                    <a href="single-work.html">
                        <div class="work-item">
						<?php  foreach($image as $img)
						{  ?>
                            <img src="<?php echo ADMIN_URL;?>architecture\images\<?php echo $img;?>" alt="">
						<?php  }  ?>
							 <div class="caption">
                                <p class="extra"><?php echo $title ?></p> 
                                <div class="titles">
                                    <h4 class="title"><?php echo $description ?></h4> 
                                    <div class="divider"></div>
                                </div>
                            </div>
                          
                        </div>
                    </a>
					<?php } ?>
                    <!-- end work item -->
                    <!-- work item -->
                   
                    <!-- end work item -->
                </div>
                <!-- End Project Grid -->
            </div>
        </div>
    </section>
    <!-- End Works -->
	
    
	<?php 
include "../include/footer.php";
?>
     
    <script src="js/salvattore.min.js"></script>
	
    
       
  
  