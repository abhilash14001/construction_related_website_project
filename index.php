<?php
	
$file = "install/index.php";


if(file_exists($file)){
	header("location:install/");
	exit;
}
include "home/include/header.php";
$fetchcategory = $marble->fetchData("*", "stone_category where parent_id = 0");
?>
	<!-- ======================================
	        ==   Start Main Slider area  ==
	====================================== -->
	<section class="main_slider">
		<div class="main_slider_area owl-carousel">
			<div class="main_slide" style="background-image:url(images/marble1.jpg);">	
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="main_slider_table">
								<div class="main_slider_cell">
									<div class="main_slider_info">
										<h5>Hi Guys  , I’m Raymond Arnold</h5>
										<h1>An International Buyer</h1>
										<h2>Build Your Business With Me</h2>						
										<div class="slider_contact_me btn1">
											<div class="btn1_main">			
												<a href="home/contact.html">contact me<i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="btn1_hover">				
												<div class="slider_contact_me btn1_info">
													<a href="home/contact.html"><i class="ion-ios-arrow-right"></i>contact me</a>
												</div>										
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="header_social_icons">
								<ul>
									<li><a href="home/#" class="ion-social-facebook active"></a></li>
									<li><a href="home/#" class="ion-social-skype"></a></li>
									<li><a href="home/#" class="ion-social-twitter active"></a></li>
									<li><a href="home/#" class="ion-social-googleplus-outline"></a></li>
								</ul>
							</div>
						</div>					
					</div>
				</div>			
			</div>
			<div class="main_slide " style="background-image:url(images/marble2.jpg);">			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="main_slider_table">
								<div class="main_slider_cell">
									<div class="main_slider_info">
										<h5>Hi Guys  , I’m Raymond Arnold</h5>
										<h1>An International Buyer</h1>
										<h2 class="fade_effect" >Build Your Business With Me</h2>
										<div class="slider_contact_me btn1">
											<div class="btn1_main">			
												<a href="home/contact.html">contact me<i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="btn1_hover">				
												<div class="slider_contact_me btn1_info">
													<a href="home/contact.html"><i class="ion-ios-arrow-right"></i>contact me</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="header_social_icons">
								<ul>
									<li><a href="home/#" class="ion-social-facebook active"></a></li>
									<li><a href="home/#" class="ion-social-skype"></a></li>
									<li><a href="home/#" class="ion-social-twitter active"></a></li>
									<li><a href="home/#" class="ion-social-googleplus-outline"></a></li>
								</ul>
							</div>
						</div>					
					</div>
				</div>			
			</div>
		</div>		
	</section>
	<!-- ======================================
	        ==   End Main Slider area  ==
	====================================== -->
	<!-- ======================================
	        ==   Start Search area  ==
	====================================== -->
	

	<!-- ======================================
	        ==  End Search area  ==
	====================================== -->
	<!-- ======================================
	        ==  Start About Me area  ==
	====================================== -->
	<section class="about_me">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>About US</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 col-sm-6">
					<figure class="photo" data-wow-duration="2s">
						<img src="home/images/experience1.png" alt="photo1">
						
					</figure>
				</div>
				<div class="col-sm-5">
					<div class="exp_info">
						<article class="experience_info">
							<h3>Hi Guys  , I’m Raymond Arnold.</h3>
							<h2>I  Have  15 Years Experience in World Wide Business.</h2>
							<div class="experience_desc">
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velitesse molestie consequat vel illum dolore eu feugiat nulla facilisis avero eros et accumsan et iusto odio dignissim qui blandit praesentatum zzril delenit augue duis dolore te feugait nulla facilisi. Namtempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat.</p>
							</div>
							<div class="read_more btn1">
								<div class="btn1_main">						
									<a href="home/#">read more<i class="ion-ios-arrow-right"></i></a>	
								</div>
								<div class="btn1_hover">					
									<a href="home/#"><i class="ion-ios-arrow-right"></i>read more</a>	
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- ======================================
	        ==  End About Me area  ==
	====================================== -->
	<!-- ======================================
	        ==  Start What I do area  ==
	====================================== -->
	<section class="do">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>what  i  do</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 ">
					<div class="services">
						<div class="service_area1  wow rotateInDownRight">
							<div class="single_services">
								<div class="service_info">
									<h2>Import</h2>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
								</div>
								<div class="service_image">
									<img src="home/images/import.svg" alt="import" class="svg">
								</div>
							</div>
							<div class="single_services">
								<div class="service_info">
									<h2>Export</h2>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
								</div>
								<div class="service_image">
									<img src="home/images/export.svg" alt="export" class="svg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-sm-offset-4">
					<div class="services">
						<div class="service_area2 wow rotateInDownLeft">
							<div class="single_services current_page_item">
								<div class="service_image">
										<img src="home/images/cart.svg" alt="cart" class="svg">
									</div>
								<div class="service_info">
									<h2>buy</h2>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
								</div>							
							</div>
							<div class="single_services">
								<div class="service_image">
										<img src="home/images/sales.svg" alt="sales" class="svg">
									</div>
								<div class="service_info">
									<h2>sales</h2>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================================
	        == End What I do area  ==
	====================================== -->

	<!-- ======================================
	        == Start Featured Categories area  ==
	====================================== 
	<section class="featured_categories">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>Featured Categories</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="categories_slider owl-carousel" data-wow-duration="2s">
						<figure class="single_category">
							<a class="veno" href="home/images/hood.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="home/images/hood.png" alt="hood">
								<div class="icon">									
									<i class="ion-android-expand"></i>	
								</div>
							</a>	
							<figcaption class="category_hover">
								<div class="category_info">									
									<h3>Style Women Dress</h3>
									<div class="category_desc">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
									</div>
								</div>
							</figcaption>							
						</figure>
						<figure class="single_category">
							<a class="veno" href="home/images/dress.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="home/images/dress.png" alt="dress">
								<div class="icon">									
									<i class="ion-android-expand"></i>	
								</div>
							</a>	
							<figcaption class="category_hover">
								<div class="category_info">									
									<h3>Style Women Dress</h3>
									<div class="category_desc">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
									</div>
								</div>
							</figcaption>							
						</figure>
						<figure class="single_category">
							<a class="veno" href="home/images/shirt.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="home/images/shirt.png" alt="shirt">
								<div class="icon">									
									<i class="ion-android-expand"></i>	
								</div>
							</a>	
							<figcaption class="category_hover">
								<div class="category_info">									
									<h3>Style Women Dress</h3>
									<div class="category_desc">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
									</div>
								</div>
							</figcaption>							
						</figure>
						<figure class="single_category">
							<a class="veno" href="home/images/dress.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="home/images/dress.png" alt="dress">
								<div class="icon">									
									<i class="ion-android-expand"></i>	
								</div>
							</a>	
							<figcaption class="category_hover">
								<div class="category_info">									
									<h3>Style Women Dress</h3>
									<div class="category_desc">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p>
									</div>
								</div>
							</figcaption>							
						</figure>
					</div>
				</div>
			</div>			
		</div>
	</section> -->
	<!-- ======================================
	        == End Featured Categories area  ==
	====================================== -->
	<!-- ======================================
	        == Start Popular Categories area  ==
	====================================== -->
	<section class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>Our Categories</h1>
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12">
					<div class="categories_slider owl-carousel" data-wow-duration="2s">
					<?php while($rowcat = mysqli_fetch_assoc($fetchcategory))
					{
					extract($rowcat); 
					$image  = explode(", ", $category_image);
					
					?>
						<figure class="single_category">
						
							<a class="veno" href="<?php echo ADMIN_URL;?>stone_world/images/<?php echo $image[0];?>" data-gall="myGallery" data-title="Featured Categories">
								<img width = "200px" height = "200px" src="<?php echo ADMIN_URL;?>stone_world/images/<?php echo $image[0];?>">
						
								<div class="icon">									
									<i class="ion-android-expand"></i>	
								</div>
							</a>	
							<figcaption class="category_hover">
								<div class="category_info">									
									<h3><?php echo $category_name; ?></h3>
									<div class="category_desc">
									<!-- <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit.</p> -->
									</div>
								</div>
							</figcaption>							
						</figure>
						<?php } ?>
						
					</div>
				</div>
			</div>			
		</div>
	</section>
	<!-- ======================================
	        == End Popular Categories area  ==
	====================================== -->
	<!-- ======================================
	        == Start Trusted Partners area  ==
	====================================== -->
	<!-- <section class="trusted_partners">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>trusted Partners</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="home/images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="home/images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="home/partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- ======================================
	        == End Trusted Partners area  ==
	====================================== -->
	<!-- ======================================
	        == Start Questions area  ==
	====================================== -->
	<!-- <section class="question_consultation">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-0 col-sm-8">
					<div class="question_accordion wow slideInLeft">
						<div class="title_style">
							<h1>f . a . question</h1>
						</div>
						<div class="accordian_area">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<a class="active" role="button" data-toggle="collapse" data-parent="#accordion" href="home/#collapseOne">
										<div class="panel-title">
											<p>01. How Do I Become a Distributor?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel_info">
											<div class="panel_image">
												<img src="home/images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div> 
			    					</div>
			      				</div>
			      				<div class="panel panel-default">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="home/#collapseTwo">
										<div class="panel-title">
											<p>02. Where Can I Buy Your Products?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel_info">
											<div class="panel_image">
												<img src="home/images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div> 
			    					</div>
			      				</div>
			      				<div class="panel panel-default">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="home/#collapseThree">
										<div class="panel-title">
											<p>03. Why You Can Business With Us?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseThree" class="panel-collapse collapse ">
										<div class="panel_info">
											<div class="panel_image">
												<img src="home/images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div>  
			    					</div>
			      				</div>
			      				<div class="panel panel-default">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="home/#collapseFour">
										<div class="panel-title">
											<p>04. Placerat Facer Possim Assum Bepn habent?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel_info">
											<div class="panel_image">
												<img src="home/images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div>   
			    					</div>
			      				</div>      					
							</div>
						</div>				
					</div>
				</div>
				<div class="col-md-5 col-md-offset-1 col-sm-7">
					<div class="consultation_area wow slideInRight">					
						<div class="title_style">
							<h1>free consultation</h1>
						</div>
						<div class="consultation">
							<form action="#" method="post">
								<div class="consultation_form">
									<label for="services_option">I Would Like To Discuss</label><br>
									<div class="select">
										<select name="services_option" id="services_option" class="options">	 
										    <option value="export">Export</option>
										    <option value="import" selected>Import</option>
										    <option value="buy">Buy</option>
										    <option value="sales">Sales</option>
		  								</select>
									</div>
									<label for="name">Your Name</label><br>
									<input type="text" placeholder="Name" id="name">
									<label for="email">Your Email</label><br>
									<input type="email" placeholder="Email" id="email">
									<button type="button" class="btn_submit btn3">submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- ======================================
	        == End Questions area  ==
	====================================== -->
	<!-- ======================================
	        == Start Feedback area  ==
	====================================== -->
	<section class="feedback">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>our buyer/supplier feedback</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="feedback_slider owl-carousel">
						<div class="single_feedback">
							<div class="feedback_info">
								<blockquote>
									Duis autem vel eum iriure dolor in hendrerit in vultate velit esse molestie consequat vel illum dolore eu fgiat nulla facilisis at vero eros et accumsan et iusto.
								</blockquote>
								<p>Md. Masud , DIT  Manager</p>
							</div>
							<div class="feed_image">
								<img src="home/images/feedback1.png" alt="feedback" class="feedback_image">
							</div>
						</div>
						<div class="single_feedback">
							<div class="feedback_info">
								<blockquote>
								Duis autem vel eum iriure dolor in hendrerit in vultate velit esse molestie consequat vel illum dolore eu fgiat nulla facilisis at vero eros et accumsan et iusto.
								</blockquote>
								<p>Keith Hawkins , DIT  Manager</p>
							</div>
							<div class="feed_image">
								<img src="home/images/feedback2.png" alt="feedback" class="feedback_image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- ======================================
	        == End Feedback area  ==
	====================================== -->
	<!-- ======================================
	        == Start Latest News area  ==
	====================================== -->
	<!-- <section class="news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h1>latest news</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="news_slider owl-carousel">
						<article class="single_news">					
							<figure class="news_image">
								<a href="home/blogDetails.html"><img src="home/images/news1.png" alt="news"></a>
							</figure>
							<div class="news_desc">
								<div class="news_info">
									<ul>
										<li>
											<div class="info_image">
												<i class="ion-ios-calendar-outline"></i>
											</div>
											<div class="info_desc">
												<p>25 Feb 17</p>
											</div>
										</li>
										<li>
											<div class="info_image">
												<i class="ion-ios-person-outline"></i>
											</div>
											<div class="info_desc">
												<p>By Jhonathan</p>
											</div>
										</li>
										<li>
											<div class="info_image">
												<i class="ion-ios-pricetags-outline"></i>
											</div>
											<div class="info_desc">
												<p>Comments (10)</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="news_details">
									<a href="home/blogDetails.html">
										<h3>Augue duis dolore te feugait nulla facilisi Nam liber tempor cum soluta nobis</h3>
									</a>
									<a href="home/blogDetails.html">Continue Reading....</a>
								</div>
							</div>
						</article>
						<article class="single_news">					
							<figure class="news_image">
								<a href="home/blogDetails.html"><img src="home/images/news2.png" alt="news"></a>
							</figure>
							<div class="news_desc">
								<div class="news_info">
									<ul>
										<li>
											<div class="info_image">
												<i class="ion-ios-calendar-outline"></i>
											</div>
											<div class="info_desc">
												<p>25 Feb 17</p>
											</div>
										</li>
										<li>
											<div class="info_image">
												<i class="ion-ios-person-outline"></i>
											</div>
											<div class="info_desc">
												<p>By Jhonathan</p>
											</div>
										</li>
										<li>
											<div class="info_image">
												<i class="ion-ios-pricetags-outline"></i>
											</div>
											<div class="info_desc">
												<p>Comments (10)</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="news_details">
									<a href="home/blogDetails.html">
										<h3>Augue duis dolore te feugait nulla facilisi Nam liber tempor cum soluta nobis</h3>
									</a>
									<a href="home/blogDetails.html">Continue Reading....</a>
								</div>
							</div>
						</article>
						<article class="single_news">					
							<figure class="news_image">
								<a href="home/blogDetails.html"><img src="home/images/news1.png" alt="news"></a>
							</figure>
							<div class="news_desc">
								<div class="news_info">
									<ul>
										<li>
											<div class="info_image">
												<i class="ion-ios-calendar-outline"></i>
											</div>
											<div class="info_desc">
												<p>25 Feb 17</p>
											</div>
										</li>
										<li>
											<div class="info_image">
												<i class="ion-ios-person-outline"></i>
											</div>
											<div class="info_desc">
												<p>By Jhonathan</p>
											</div>
										</li>
										<li>
											<div class="info_image">
												<i class="ion-ios-pricetags-outline"></i>
											</div>
											<div class="info_desc">
												<p>Comments (10)</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="news_details">
									<a href="home/blogDetails.html">
										<h3>Augue duis dolore te feugait nulla facilisi Nam liber tempor cum soluta nobis</h3>
									</a>
									<a href="home/blogDetails.html">Continue Reading....</a>
								</div>
							</div>
						</article>			
					</div>
				</div>
			</div>					
		</div>
	</section> -->
	<!-- ======================================
	        == End Latest News area  ==
	====================================== -->
<?php include "home/include/footer.php"; ?>
