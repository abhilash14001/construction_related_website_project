	<div class="mobile_menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="mobile_mean_logo">
							<a href="<?php echo HOME_URL;?>">
								<img src="<?php echo HOME_URL;?>images/logo.png" alt="logo">
							</a>
						</div>
						<div class="mobile_mean_menu">
							<ul>
								<li>
									<a href="<?php echo HOME_URL;?>">Home</a>
									
								</li>
								
								<li>
									<a href="#">Construction</a>
									<ul>
										<li><a href="<?php echo HOME_URL;?>construction/ongoing.php">Ongoing Projects</a></li>
													<li><a href="<?php echo HOME_URL;?>construction/upcoming.php">Upcoming Projects</a></li>
													<li><a href="<?php echo HOME_URL;?>construction/completed.php">Completed Projects and Tenders</a></li>
													<li><a href="<?php echo HOME_URL;?>import01.html">Purchase</a></li>
													<li><a href="<?php echo HOME_URL;?>construction/contact.php">Enquiry or Contact US</a></li>
													</ul>
								
								</li>
									<li>
										<a href="#">Stone World</a>
									<ul>
										<li id = "showcategory"><a href="#">Categories</a></li>
													<?php while($catall = mysqli_fetch_assoc($fetchcatallmobile))
													{ extract($catall); ?>
													<li class = "category"><a href="<?php echo HOME_URL;?>category/category.php?category=<?php echo $category_name; ?>&id=<?php echo $id;?>"><?php echo $category_name;?></a></li>
													<?php } ?>
													<li><a href="<?php echo HOME_URL;?>export01.html">Enquiry or Contact US</a></li>
													<li><a href="<?php echo HOME_URL;?>export01.html">Our Customers</a></li>
													<li><a href="<?php echo HOME_URL;?>export01.html">Exports</a></li>
													<li><a href="<?php echo HOME_URL;?>export01.html">Our Services</a></li>
													
												</ul>
								</li>
								<li>
									<a href="#">Architecture</a>
									<ul>
										<li>
											<a href="<?php echo HOME_URL;?>argentina_buyer.html">South America</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>armenia_buyer.html">Europe</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>egypt_buyer.html">Middle East</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>cambodia_buyer.html">Southeast Asia</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Supplier</a>
									<ul>
										<li>
											<a href="<?php echo HOME_URL;?>argentina_supplier.html">South America</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>armenia_supplier.html">Europe</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>egypt_supplier.html">Middle East</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>cambodia_supplier.html">Southeast Asia</a>
										</li>
									</ul>
								</li>										
								<li>
									<a href="<?php echo HOME_URL;?>contact.php">Contact</a>
								</li>
								<li>
									<a href="<?php echo HOME_URL;?>">Blog</a>
									<ul>
										<li>
											<a href="<?php echo HOME_URL;?>blog.html">Blog One</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>blog2.html">Blog Two</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>blogDetails.html">Blog Details</a>
										</li>									
									</ul>
								</li>
								<li><a href="<?php echo HOME_URL;?>contact.php">Contact</a></li>
									<li><a href="<?php echo HOME_URL;?>about_us.html">About</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
	