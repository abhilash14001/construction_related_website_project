<?php 
	
include "../include/header.php"; ?>
	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->
	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">contact us</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
								<li><a href="#">Enquiry Related to Architecture Design</a></li>
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
	        ==   Start Contact Me area  ==
	====================================== -->
	<section class="contact_me">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="single_contact">
						<div class="contact_cell">
							<div class="contact_information">
								<div class="contactpage_image">
									<img src="<?php echo HOME_URL;?>images/contact1.png" alt="contact">
								</div>
								<div class="single_contact_desc">
									<h3>Visit My Place</h3>
									<p>7791 Woodland Avenue</p>
									<p>10 000 Zagreb, Croatia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single_contact">
						<div class="contact_cell">
							<div class="contact_information">
								<div class="contactpage_image">
									<img src="<?php echo HOME_URL;?>images/contact2.png" alt="contact">
								</div>
								<div class="single_contact_desc">
									<h3>Office Schedule</h3>
									<p>Monday to Saturday: 09.00am to 18.00pm</p>
									<p>Sunday: Closed</p>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="single_contact">
						<div class="contact_cell">
							<div class="contact_information">
								<div class="contactpage_image">
									<img src="<?php echo HOME_URL;?>images/contact3.png" alt="contact">
								</div>
								<div class="single_contact_desc">
									<h3>Quick Contact</h3>
									<p>Phone: +000 111 222 333</p>
									<p>Email: youremailname@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="msg_area">
						<div class="title_style">
							<h1>Send Your Message</h1>
						</div>
						<form action="actions/contact.php" method="post">
							<input type="text"  placeholder="Name :" title="Alphabets allowed only" required name = "name">
				 <input type="text" placeholder="Phone Number (Optional) :" title="Enter number only" name = "phno"> 
							<input type="email" name = "email"  placeholder="Email :" required>
							<input type="text"  placeholder="Subject :" name = "subject">
							<textarea placeholder="Message" name = "message"></textarea>
							<button class="btn3" name = "sendme" onclick = "submitFun(this)" type="submit">Send Me</button>
						</form>
					</div>
				</div>
				<div class="col-md-5 col-md-offset-1 col-sm-6">
					<div class="news_main wow slideInRight">
						<div class="news_letter">
							<h2>News Letter</h2>
							<p>Subscribe to Our NewsLetter and get Regular updates</p>
							
							<input type="email" id = "emailsub" placeholder="Your Email:">
								<button type = "submit"  id ="newssubmit" name = "newsletteremail" onclick = "newsLettersub(this);"  class="btn3">subscribe</button>
							
						</div>
						<div class="social_media">					
							<ul>
								<li>
									<a href="#">
										<i class="ion-social-facebook"></i>
										<i class="ion-social-facebook hover_effect"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ion-social-twitter"></i>
										<i class="ion-social-twitter hover_effect"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ion-social-instagram"></i>
										<i class="ion-social-instagram-outline hover_effect"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ion-social-skype"></i>
										<i class="ion-social-skype-outline hover_effect"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================================
	        ==   End Contact Me area  ==
	====================================== -->
	<!-- ======================================
	        == Start Google Map area  ==
	====================================== -->
	<section class="map_area">	
		<div id="contactgoogleMap"></div>	
	</section>
	<!-- ======================================
	        == End Google Map area  ==
	====================================== -->

	<!-- ======================================
	        == Start Footer area  ==
	====================================== -->
	<?php include "../include/footer.php"; ?>