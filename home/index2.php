<?php

$file = "../install/index.php";
include "include/config.php";
if(file_exists($file)){
	header("location:../install/");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title-->
	<title>International Buyer HTML5 Template</title>

	<!--Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/lato.css">

	<!-- Favicon  -->
	<link rel="apple-touch-icon-precomposed" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="icon" href="images/favicon.png" type="image/png">

	<!-- Bootstrap -->	
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">

	<!-- Venobox -->
	<link rel="stylesheet" href="css/venobox.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Mean menu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">

	<!-- Main style sheet -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- ======================================
	        ==   Start Header area  ==
	====================================== -->
	<header>
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="toolbar">
							<ul class="header_menu">
								<li>
									<a href="#"><i class="ion-flash active"></i>English<i class="ion-chevron-down icon_down"></i></a>
									<ul class=lang_menu>				
										<li>French</li>
										<li>German</li>
										<li>Chinese</li>
									</ul>
								</li>
								<li><a href="tel:+001(1234)6457"><i class="ion-android-call active"></i>+001 (1234) 6457</a></li>
								<li><a href="mailto:youremail@gmail.com"><i class="ion-email"></i>youremail@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="log_in">
							<div class="log_in_info">
								<a href="login.php"><i class="ion-unlocked"></i>Log In</a>		
								 <span>OR</span>
								 <a href="register.html">Register</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="header_logo">
							<a href="<?php echo HOME_URL;?>"><img src="images/header_logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-sm-10">
						<div class="main_nav">
							<nav class="header_nav">
								<ul class="main_menu">
									<li>
										<a href="<?php echo HOME_URL;?>">Home</a>
										<ul class="homes">
											<li>
												<div class="style_div">
													<div class="div1"></div>
													<div class="div2"></div>
												</div>
												<a href="<?php echo HOME_URL;?>">Home One</a>	
											</li>
											<li>
												<div class="style_div">
													<div class="div1"></div>
													<div class="div2"></div>
												</div>
												<a href="home2.html">Home Two</a>	
											</li>
										</ul>
									</li>
									<li><a href="about_us.html">About</a></li>
									<li class="mega">
										<a href="#">Import<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="food catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Food products</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Beverages</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Fish & Fish Products</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Grains, Fruits</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Animal Products</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Coconut Shell Products</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Fish & Fish Products</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Fertilizers & Pesticides</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Tea & Coffee</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Processed Food</a></li>
													<li><a href="import01.html"><i class="ion-arrow-right-c"></i>Vegetables</a></li>
												</ul>
											</div>
											<div class="electronics catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Electronics</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Notebooks & Laptops</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Network Engineering</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Printers & Scanners</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Amplifiers</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Software & Hardware</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Radio & Television</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Refrigerators</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Circuit Boards</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>CD , DVD Players</a></li>
													<li><a href="import02.html"><i class="ion-arrow-right-c"></i>Insulation</a></li>
												</ul>
											</div>
											<div class="industrial catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Industrial</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Motor Parts</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Brakes , Chemicals</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Metal products</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Engine Parts</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Tyres</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Nuts & Bolts</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Plastic Products</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Rubber Products</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Motor Parts</a></li>
													<li><a href="import03.html"><i class="ion-arrow-right-c"></i>Minerals & Ores</a></li>
												</ul>
											</div>										
											<div class="household catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Household</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Air Conditioning</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Furniture</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Glass & Ceramics</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Towels & Handkerchiefs</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Household Utensils</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Flooring</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Cushions & Pillows</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Kitchenware</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Mattresses</a></li>
													<li><a href="import04.html"><i class="ion-arrow-right-c"></i>Hand Bags</a></li>
												</ul>
											</div>								
										</div>
									</li>
									<li class="mega">
										<a href="#">Export<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="food catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Food products</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Beverages</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Fish & Fish Products</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Grains, Fruits</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Animal Products</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Coconut Shell Products</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Fish & Fish Products</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Fertilizers & Pesticides</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Tea & Coffee</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Processed Food</a></li>
													<li><a href="export01.html"><i class="ion-arrow-right-c"></i>Vegetables</a></li>
												</ul>
											</div>
											<div class="electronics catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Electronics</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Notebooks & Laptops</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Network Engineering</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Printers & Scanners</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Amplifiers</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Software & Hardware</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Radio & Television</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Refrigerators</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Circuit Boards</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>CD , DVD Players</a></li>
													<li><a href="export02.html"><i class="ion-arrow-right-c"></i>Insulation</a></li>
												</ul>
											</div>
											<div class="industrial catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Industrial</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Motor Parts</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Brakes , Chemicals</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Metal products</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Engine Parts</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Tyres</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Nuts & Bolts</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Plastic Products</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Rubber Products</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Motor Parts</a></li>
													<li><a href="export03.html"><i class="ion-arrow-right-c"></i>Minerals & Ores</a></li>
												</ul>
											</div>										
											<div class="household catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Household</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Air Conditioning</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Furniture</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Glass & Ceramics</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Towels & Handkerchiefs</a></li>
													<li><a href="export.html"><i class="ion-arrow-right-c"></i>Household Utensils</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Flooring</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Cushions & Pillows</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Kitchenware</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Mattresses</a></li>
													<li><a href="export04.html"><i class="ion-arrow-right-c"></i>Hand Bags</a></li>
												</ul>
											</div>								
										</div>
									</li>
									<li class="mega mega_menu3">
										<a href="#">Buyer<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="supplier_1 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>South America</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>Argentina</a></li>
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>Ecuador</a></li>
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>Suriname</a></li>
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>Bolivia</a></li>
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>Colombia</a></li>
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>Paraguay</a></li>
												</ul>
											</div>
											<div class="supplier_2 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Europe</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Armenia</a></li>
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Ireland</a></li>
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Romania</a></li>
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Bulgaria</a></li>
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Switzerland</a></li>
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Montenegro</a></li>
												</ul>
											</div>
											<div class="supplier_3 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Middle east</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="egypt_buyer.html"><i class="ion-arrow-right-c"></i>Egypt</a></li>
													<li><a href="egypt_buyer.html"><i class="ion-arrow-right-c"></i>Turkey</a></li>
													<li><a href="egypt_buyer.html"><i class="ion-arrow-right-c"></i>Jordan</a></li>
													<li><a href="egypt_buyer.html"><i class="ion-arrow-right-c"></i>Lebanon</a></li>
													<li><a href="egypt_buyer.html"><i class="ion-arrow-right-c"></i>Oman</a></li>
													<li><a href="egypt_buyer.html"><i class="ion-arrow-right-c"></i>Bahrain</a></li>
												</ul>
											</div>										
											<div class="supplier_4 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Southeast asia</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="cambodia_buyer.html"><i class="ion-arrow-right-c"></i>Cambodia</a></li>
													<li><a href="cambodia_buyer.html"><i class="ion-arrow-right-c"></i>Indonesia</a></li>
													<li><a href="cambodia_buyer.html"><i class="ion-arrow-right-c"></i>Malaysia</a></li>
													<li><a href="cambodia_buyer.html"><i class="ion-arrow-right-c"></i>Philippines</a></li>
													<li><a href="cambodia_buyer.html"><i class="ion-arrow-right-c"></i>Thailand</a></li>
													<li><a href="cambodia_buyer.html"><i class="ion-arrow-right-c"></i>Vietnam</a></li>
												</ul>
											</div>										
										</div>
									</li>
									<li class="mega mega_menu4">
										<a href="#">Supplier<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="supplier_1 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>South America</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="argentina_supplier.html"><i class="ion-arrow-right-c"></i>Argentina</a></li>
													<li><a href="argentina_supplier.html"><i class="ion-arrow-right-c"></i>Ecuador</a></li>
													<li><a href="argentina_supplier.html"><i class="ion-arrow-right-c"></i>Suriname</a></li>
													<li><a href="argentina_supplier.html"><i class="ion-arrow-right-c"></i>Bolivia</a></li>
													<li><a href="argentina_supplier.html"><i class="ion-arrow-right-c"></i>Colombia</a></li>
													<li><a href="argentina_supplier.html"><i class="ion-arrow-right-c"></i>Paraguay</a></li>
												</ul>
											</div>
											<div class="supplier_2 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Europe</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="armenia_supplier.html"><i class="ion-arrow-right-c"></i>Armenia</a></li>
													<li><a href="armenia_supplier.html"><i class="ion-arrow-right-c"></i>Ireland</a></li>
													<li><a href="armenia_supplier.html"><i class="ion-arrow-right-c"></i>Romania</a></li>
													<li><a href="armenia_supplier.html"><i class="ion-arrow-right-c"></i>Bulgaria</a></li>
													<li><a href="armenia_supplier.html"><i class="ion-arrow-right-c"></i>Switzerland</a></li>
													<li><a href="armenia_supplier.html"><i class="ion-arrow-right-c"></i>Montenegro</a></li>
												</ul>
											</div>
											<div class="supplier_3 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Middle east</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Egypt</a></li>
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Turkey</a></li>
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Jordan</a></li>
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Lebanon</a></li>
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Oman</a></li>
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Bahrain</a></li>
												</ul>
											</div>										
											<div class="supplier_4 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Southeast asia</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Cambodia</a></li>
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Indonesia</a></li>
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Malaysia</a></li>
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Philippines</a></li>
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Thailand</a></li>
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Vietnam</a></li>
												</ul>
											</div>										
										</div>
									</li>
									<li class="mega">
										<a href="#">Pages<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Home</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="<?php echo HOME_URL;?>"><i class="ion-arrow-right-c"></i>Home One</a></li>
													<li><a href="home2.html"><i class="ion-arrow-right-c"></i>Home Two</a></li>
												</ul>
											</div>
											<div class="catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Buyer & Supplier</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="argentina_buyer.html"><i class="ion-arrow-right-c"></i>South America</a></li>
													<li><a href="armenia_buyer.html"><i class="ion-arrow-right-c"></i>Europe</a></li>
													<li><a href="egypt_supplier.html"><i class="ion-arrow-right-c"></i>Middle East</a></li>
													<li><a href="cambodia_supplier.html"><i class="ion-arrow-right-c"></i>Southeast Asia</a></li>
												</ul>
											</div>										
											<div class="catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Blog</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="blog.html"><i class="ion-arrow-right-c"></i>Blog One</a></li>
													<li><a href="blog2.html"><i class="ion-arrow-right-c"></i>Blog Two</a></li>
													<li><a href="blogDetails.html"><i class="ion-arrow-right-c"></i>Blog Details</a></li>
												</ul>
											</div>
											<div class="catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Misc</h5>
													</div>
												</div>
												<ul class="category_menu">	
													<li><a href="partner.html"><i class="ion-arrow-right-c"></i>Partners</a></li>
													<li><a href="partnerDetails.html"><i class="ion-arrow-right-c"></i>Partner Details</a></li>
													<li><a href="shop.html"><i class="ion-arrow-right-c"></i>Shop</a></li>
													<li><a href="shoppingCart.html"><i class="ion-arrow-right-c"></i>Shopping Cart</a></li>
													<li><a href="login.php"><i class="ion-arrow-right-c"></i>Login</a></li>
													<li><a href="register.html"><i class="ion-arrow-right-c"></i>Register</a></li>
													<li><a href="error.html"><i class="ion-arrow-right-c"></i>Error</a></li>
												</ul>
											</div>								
										</div>
									</li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							
							<div class="main_search">
								<a href="#"><i class="ion-ios-search-strong"></i></a>
								<div class="search_all">
									<form action="#" method="post">
										<input type="text" placeholder="Search here...............">
										<button><i class="ion-ios-search-strong"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>				
				</div>			
			</div>		
		</div>
		<div class="mobile_menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="mobile_mean_logo">
							<a href="<?php echo HOME_URL;?>">
								<img src="images/logo.png" alt="logo">
							</a>
						</div>
						<div class="mobile_mean_menu">
							<ul>
								<li>
									<a href="<?php echo HOME_URL;?>">Home</a>
									<ul>
										<li>
											<a href="<?php echo HOME_URL;?>">Home One</a>
										</li>
										<li>
											<a href="home2.html">Home Two</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="about_us.html">About</a>
								</li>
								<li>
									<a href="#">Import</a>
									<ul>
										<li>
											<a href="import01.html">Food Products</a>
										</li>
										<li>
											<a href="import02.html">Electronics</a>
										</li>
										<li>
											<a href="import03.html">Industrial</a>
										</li>
										<li>
											<a href="import04.html">Household</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Export</a>
									<ul>
										<li>
											<a href="export01.html">Food Products</a>
										</li>
										<li>
											<a href="export02.html">Electronics</a>
										</li>
										<li>
											<a href="export03.html">Industrial</a>
										</li>
										<li>
											<a href="export04.html">Household</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Buyer</a>
									<ul>
										<li>
											<a href="argentina_buyer.html">South America</a>
										</li>
										<li>
											<a href="armenia_buyer.html">Europe</a>
										</li>
										<li>
											<a href="egypt_buyer.html">Middle East</a>
										</li>
										<li>
											<a href="cambodia_buyer.html">Southeast Asia</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Supplier</a>
									<ul>
										<li>
											<a href="argentina_supplier.html">South America</a>
										</li>
										<li>
											<a href="armenia_supplier.html">Europe</a>
										</li>
										<li>
											<a href="egypt_supplier.html">Middle East</a>
										</li>
										<li>
											<a href="cambodia_supplier.html">Southeast Asia</a>
										</li>
									</ul>
								</li>										
								<li>
									<a href="contact.php">Contact</a>
								</li>
								<li>
									<a href="<?php echo HOME_URL;?>">Blog</a>
									<ul>
										<li>
											<a href="blog.html">Blog One</a>
										</li>
										<li>
											<a href="blog2.html">Blog Two</a>
										</li>
										<li>
											<a href="blogDetails.html">Blog Details</a>
										</li>									
									</ul>
								</li>
								<li>
									<a href="<?php echo HOME_URL;?>">Pages</a>
									<ul>									
										<li>
											<a href="partner.html">Partners</a>
										</li>
										<li>
											<a href="partnerDetails.html">Partner Details</a>
										</li>
										<li>
											<a href="shop.html">Shop</a>
										</li>
										<li>
											<a href="shoppingCart.html">Shopping Cart</a>
										</li>
										<li>
											<a href="register.html">Register</a>
										</li>
										<li>
											<a href="login.php">Login</a>
										</li>
										<li>
											<a href="error.html">Error</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</header>
	<!-- ======================================
	        ==   End Header area  ==
	====================================== -->
	<!-- preloader -->
	<div id="preloader">
	    <div class="preloader-content">
	        <img src="images/preloader.gif" alt="preloader"> 
		</div>
	</div>
	<!-- ======================================
	        ==   Start Main Slider area  ==
	====================================== -->
	<section class="main_slider">
		<div class="main_slider_area owl-carousel">
			<div class="main_slide" style="background-image:url(images/main_slide1.jpg);">	
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
												<a href="contact.php">contact me<i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="btn1_hover">				
												<div class="slider_contact_me btn1_info">
													<a href="contact.php"><i class="ion-ios-arrow-right"></i>contact me</a>
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
									<li><a href="#" class="ion-social-facebook active"></a></li>
									<li><a href="#" class="ion-social-skype"></a></li>
									<li><a href="#" class="ion-social-twitter active"></a></li>
									<li><a href="#" class="ion-social-googleplus-outline"></a></li>
								</ul>
							</div>
						</div>					
					</div>
				</div>			
			</div>
			<div class="main_slide " style="background-image:url(images/main_slide2.jpg);">			
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
												<a href="contact.php">contact me<i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="btn1_hover">				
												<div class="slider_contact_me btn1_info">
													<a href="contact.php"><i class="ion-ios-arrow-right"></i>contact me</a>
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
									<li><a href="#" class="ion-social-facebook active"></a></li>
									<li><a href="#" class="ion-social-skype"></a></li>
									<li><a href="#" class="ion-social-twitter active"></a></li>
									<li><a href="#" class="ion-social-googleplus-outline"></a></li>
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
	<section class="search_area">
		<div class="container">
			<div class="row">			
				<div class="col-md-12">
					<div class="search_info">
						<h1 class="txt_search" data-in-effect="bounceInUp"  data-out-effect="bounceOutDown">Search for latest trade leads from buyers & importers from all over the world</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="search_form">					
						<form action="#" method="post">
							<div class="search_bar">
								<input type="text" placeholder="keywords">
								<i class="icon ion-edit"></i>
							</div>
							<div class="search_btn">
								<button class="srch_btn btn3">search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

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
						<h1>About me</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 col-sm-6">
					<figure class="photo" data-wow-duration="2s">
						<img src="images/experience1.png" alt="photo1">
						<img src="images/experience2.png" alt="photo2">
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
									<a href="#">read more<i class="ion-ios-arrow-right"></i></a>	
								</div>
								<div class="btn1_hover">					
									<a href="#"><i class="ion-ios-arrow-right"></i>read more</a>	
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
									<img src="images/import.svg" alt="import" class="svg">
								</div>
							</div>
							<div class="single_services">
								<div class="service_info">
									<h2>Export</h2>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
								</div>
								<div class="service_image">
									<img src="images/export.svg" alt="export" class="svg">
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
										<img src="images/cart.svg" alt="cart" class="svg">
									</div>
								<div class="service_info">
									<h2>buy</h2>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
								</div>							
							</div>
							<div class="single_services">
								<div class="service_image">
										<img src="images/sales.svg" alt="sales" class="svg">
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
	====================================== -->
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
							<a class="veno" href="images/hood.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/hood.png" alt="hood">
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
							<a class="veno" href="images/dress.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/dress.png" alt="dress">
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
							<a class="veno" href="images/shirt.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/shirt.png" alt="shirt">
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
							<a class="veno" href="images/dress.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/dress.png" alt="dress">
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
	</section>
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
						<h1>Popular Categories</h1>
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12">
					<div class="categories_slider owl-carousel" data-wow-duration="2s">
						<figure class="single_category">
							<a class="veno" href="images/bag.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/bag.png" alt="bag">
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
							<a class="veno" href="images/shoes.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/shoes.png" alt="shoes">
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
							<a class="veno" href="images/watch.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/watch.png" alt="watch">
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
							<a class="veno" href="images/shoes.png" data-gall="myGallery" data-title="Featured Categories">
								<img src="images/shoes.png" alt="shoes">
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
	</section>
	<!-- ======================================
	        == End Popular Categories area  ==
	====================================== -->
	<!-- ======================================
	        == Start Trusted Partners area  ==
	====================================== -->
	<section class="trusted_partners">
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
							<a class="brand_veno" href="images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
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
							<a class="brand_veno" href="images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="images/brand11.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand11.png" alt="brand1.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="single_brand">
						<figure>
							<a class="brand_veno" href="images/brand22.png"  data-gall="myGallery" data-title="Trusted Partners">
								<img src="images/brand22.png" alt="brand2.png">
								<div class="icon1">
									<i class="ion-android-expand"></i>	
								</div>
							</a>							
							<div class="brand_hover">							
								<div class="icon2">
									<a href="partnerDetails.html"><i class="ion-link"></i></a>
								</div>
							</div>						
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================================
	        == End Trusted Partners area  ==
	====================================== -->
	<!-- ======================================
	        == Start Questions area  ==
	====================================== -->
	<section class="question_consultation">
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
									<a class="active" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										<div class="panel-title">
											<p>01. How Do I Become a Distributor?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel_info">
											<div class="panel_image">
												<img src="images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div> 
			    					</div>
			      				</div>
			      				<div class="panel panel-default">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										<div class="panel-title">
											<p>02. Where Can I Buy Your Products?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel_info">
											<div class="panel_image">
												<img src="images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div> 
			    					</div>
			      				</div>
			      				<div class="panel panel-default">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										<div class="panel-title">
											<p>03. Why You Can Business With Us?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseThree" class="panel-collapse collapse ">
										<div class="panel_info">
											<div class="panel_image">
												<img src="images/accordion.png" alt="panel">
											</div>
											<div class="panel-body">
											Mirum est notare quam littera gothica, quam nunc putamus parum ant litterarum formas humanitatis per seacula quarta decima et quinta deceo.
										</div> 
										</div>  
			    					</div>
			      				</div>
			      				<div class="panel panel-default">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
										<div class="panel-title">
											<p>04. Placerat Facer Possim Assum Bepn habent?</p>
											<i class="ion-chevron-down open-accordion"></i>
											<i class="ion-chevron-right close-accordion"></i>
										</div>
				          			</a>	    
			      					<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel_info">
											<div class="panel_image">
												<img src="images/accordion.png" alt="panel">
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
	</section>
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
								<img src="images/feedback1.png" alt="feedback" class="feedback_image">
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
								<img src="images/feedback2.png" alt="feedback" class="feedback_image">
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
	<section class="news">
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
								<a href="blogDetails.html"><img src="images/news1.png" alt="news"></a>
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
									<a href="blogDetails.html">
										<h3>Augue duis dolore te feugait nulla facilisi Nam liber tempor cum soluta nobis</h3>
									</a>
									<a href="blogDetails.html">Continue Reading....</a>
								</div>
							</div>
						</article>
						<article class="single_news">					
							<figure class="news_image">
								<a href="blogDetails.html"><img src="images/news2.png" alt="news"></a>
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
									<a href="blogDetails.html">
										<h3>Augue duis dolore te feugait nulla facilisi Nam liber tempor cum soluta nobis</h3>
									</a>
									<a href="blogDetails.html">Continue Reading....</a>
								</div>
							</div>
						</article>
						<article class="single_news">					
							<figure class="news_image">
								<a href="blogDetails.html"><img src="images/news1.png" alt="news"></a>
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
									<a href="blogDetails.html">
										<h3>Augue duis dolore te feugait nulla facilisi Nam liber tempor cum soluta nobis</h3>
									</a>
									<a href="blogDetails.html">Continue Reading....</a>
								</div>
							</div>
						</article>			
					</div>
				</div>
			</div>					
		</div>
	</section>
	<!-- ======================================
	        == End Latest News area  ==
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
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="footer_logo wow slideInLeft" >
							<div class="footer_logo_image">
								<a href="<?php echo HOME_URL;?>"><img src="images/logo.png" alt="logo"></a>
							</div>
							<div class="footer_logo_info">
								<p>Duis autem vel eum iriure dolor in hendr vulputatec velit esse molestie consequat vel illum dolofeu nulla facilisis at vero eros et accumsan et iusto dignissim qui blandit praesent luptatum zzril delenit .</p>
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
					<div class="col-md-2 col-sm-6">
						<div class="footer_list_link wow slideInLeft" >
							<div class="widget_title">
								<h1>quick link</h1>
							</div>
							<div class="links">
								<ul>
									<li><a href="<?php echo HOME_URL;?>"><i class="ion-arrow-right-c"></i>Home</a></li>
									<li><a href="about_us.html"><i class="ion-arrow-right-c"></i>About Us</a></li>
									<li><a href="#"><i class="ion-arrow-right-c"></i>Services</a></li>
									<li><a href="#"><i class="ion-arrow-right-c"></i>Latest Work</a></li>
									<li><a href="#"><i class="ion-arrow-right-c"></i>Our Partners</a></li>
									<li><a href="#"><i class="ion-arrow-right-c"></i>Testimonials</a></li>
									<li><a href="#"><i class="ion-arrow-right-c"></i>Latest News</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer_newsletter wow slideInRight">
							<div class="widget_title">
								<h1>News Subscription</h1>
							</div>
							<div class="subscribe_info">
								<p>Subscribe to our newsletter to get all our news in your inbox.</p>
							</div>
							<div class="subscribe_form">
								
									<input type="email" autocomplete id = "emailed" class="subscribe" placeholder="Enter your email address">
									<button class="btn_subscribe btn3" type="submit" onclick = "newsLetter();">subscribe</button>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="footer_insta wow slideInRight">
							<div class="widget_title">
								<h1>instagram</h1>
							</div>
							<div class="insta_pictures">
								<ul>
									<li>
										<img src="images/insta1.png" alt="instagram">
										<div class="insta_hover">
											<a class="ion-android-add" href="#"></a>
										</div>
									</li>
									<li>
										<img src="images/insta2.png" alt="instagram">
										<div class="insta_hover">
											<a class="ion-android-add" href="#"></a>
										</div>
									</li>
									<li>
										<img src="images/insta3.png" alt="instagram">
										<div class="insta_hover">
											<a class="ion-android-add" href="#"></a>
										</div>
									</li>
									<li>
										<img src="images/insta4.png" alt="instagram">
										<div class="insta_hover">
											<a class="ion-android-add" href="#"></a>
										</div>
									</li>
									<li>
										<img src="images/insta5.png" alt="instagram">
										<div class="insta_hover">
											<a class="ion-android-add" href="#"></a>
										</div>
									</li>
									<li>
										<img src="images/insta6.png" alt="instagram">
										<div class="insta_hover">
											<a class="ion-android-add" href="#"></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer bootom -->
		<div class="footer_bottom">		
			<div class="container">
				<div class="copyright">
				<p data-hover="Copyright © 2017, Design  by ThemeeBiT">Copyright © 2017, Design  by ThemeeBiT</p>
			</div>					
			<div class="scroll btn2">
				<i class="ion-arrow-up-c"></i>
			</div>
			</div>					
		</div>
	</footer>
	<!-- ======================================
	        == End Footer area  ==
	====================================== -->
	<!-- Scripts -->

	<!-- Jquery -->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!--Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Wow Js -->
	<script src="js/wow.min.js"></script>

	<!-- Venobox-->
	<script src="js/venobox.min.js"></script>

	<!-- lettering js -->
	<script src="js/jquery.lettering.js"></script>

	<!-- Textillate js -->
	<script src="js/jquery.textillate.js"></script>

	<!-- Mean Menu js -->
	<script src="js/jquery.meanmenu.min.js"></script>

	<!--google map js -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Main js -->
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from buyer.themeebit.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Apr 2020 07:54:16 GMT -->
</html>
