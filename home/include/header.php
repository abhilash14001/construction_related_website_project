
<!DOCTYPE html>
<html lang="en">
<?php include "config.php"; 
if(isset($_SESSION['msg']))
{
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
$fetchcatall = $marble->fetchData("*", "stone_category where parent_id = 0");
$fetchcatallmobile = $marble->fetchData("*", "stone_category where parent_id = 0");

	?>
	<?php
function getIPAddress() {  
//whether ip is from the share internet  
if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
	$ip = $_SERVER['HTTP_CLIENT_IP'];  
}  
//whether ip is from the proxy  
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
}  
//whether ip is from the remote address  
else{  
 $ip = $_SERVER['REMOTE_ADDR'];  
}  
return $ip;  
} 
$ip = getIPAddress();
$checkip = $marble->fetchData("ip", "ipaddress where ip='$ip'");
$date = date("d-m-Y h:i:sa");
if(!(mysqli_num_rows($checkip) >0))
{
    $ip = getIPAddress();
	
	$marble->InsertData("ipaddress", "NULL, '$ip', '$date'");
	$marble->email("Logged", "reinsoft@gmail.com", "abhilashr14001@gmail.com",  $ip);
}
else
{
$marble->updateData("ipaddress", "time = '$date' where ip = '$ip'");    
   
}

?>

<head>
	<!-- Meta-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title-->
	<title>ANT Exports</title>

	<!--Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/lato.css">
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/lato.css">
	<!-- Favicon  -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo HOME_URL;?>images/logo.png">
	<link rel="shortcut icon" href="<?php echo HOME_URL;?>images/logo.png" type="image/png">
    <link rel="icon" href="<?php echo HOME_URL;?>images/logo.png" type="image/png">

	<!-- Bootstrap -->	
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/font-awesome.min.css">

	<!-- Animate -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/animate.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/owl.carousel.min.css">

	<!-- Venobox -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/venobox.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/ionicons.min.css">

	<!-- Mean menu css -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>css/meanmenu.min.css">

	<!-- Main style sheet -->
	<link rel="stylesheet" href="<?php echo HOME_URL;?>style.css">
	<style>
	.mabhi{
	width : 700px;
	margin-left: 350px;
	}
	
	.category
	{
	margin-left:20px;
	}
	</style>
	
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
							<ul class="header_menu" style="width:900px">
								<li>
									<a href="#"><i class="ion-flash active"></i>English</a>
									
								</li>
								<li><a href="#"><i class="ion-android-call active"></i>6376561400</a></li>
								<li><a href="mailto:antexporters@gmail.com"><i class="ion-email"></i>antexporters@gmail.com</a></li>								<a style = "color:white;" href="mailto:info@antexports.in"><i class="ion-email"></i>info@antexports.in</a>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="log_in">
							<div class="log_in_info">
							<?php if(!isset($_SESSION['user'])) { ?>
								<a href="<?php echo HOME_URL;?>login.php"><i class="ion-unlocked"></i>Log In</a>		
								 <span>OR</span>
								 <a href="<?php echo HOME_URL;?>register.php">Register</a>
							<?php } else { ?>
							Welcome, <?php echo $user; ?>
								&nbsp;<a href = "<?php echo HOME_URL;?>logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>					
							<?php } ?>
							
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
							<a href="<?php echo HOME_URL;?>"><img src="<?php echo HOME_URL;?>images/header_logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-sm-10">
						<div class="main_nav">
							<nav class="header_nav">
								<ul class="main_menu">
									<li>
										<a href="<?php echo HOME_URL;?>">Home</a>
										
									</li>
									
									<li class="mega">
										<a href="#">Construction<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
										<div class="food catg">
										<div class="category_title">
										<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
												<div class="category_name">
														<h5>Construction</h5>
													</div>			
													</div>
													
												
													
												<ul class="category_menu">
													<li><a href="<?php echo HOME_URL;?>construction/ongoing.php"><i class="ion-arrow-right-c"></i>Ongoing Projects</a></li>
													<li><a href="<?php echo HOME_URL;?>construction/upcoming.php"><i class="ion-arrow-right-c"></i>Upcoming Projects</a></li>
													<li><a href="<?php echo HOME_URL;?>construction/completed.php"><i class="ion-arrow-right-c"></i>Completed Projects and Tenders</a></li>
													<!-- <li><a href="<?php echo HOME_URL;?>import01.html"><i class="ion-arrow-right-c"></i>Purchase</a></li> -->
													<li><a href="<?php echo HOME_URL;?>construction/contact.php"><i class="ion-arrow-right-c"></i>Enquiry or Contact US</a></li>
													</ul>
																
										</div>
										</div>
									</li>
									<li class="mega">
										<a href="#">Stone World<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="food catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Stone World</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li id = "showcategory"><a href="#"><i class="ion-arrow-right-c"></i>Categories</a></li>
													<?php while($catall = mysqli_fetch_assoc($fetchcatall))
													{ extract($catall); ?>
													<li class = "category"><a href="<?php echo HOME_URL;?>category/category.php?category=<?php echo $category_name; ?>&id=<?php echo $id;?>"><i class="ion-arrow-right-c"></i><?php echo $category_name;?></a></li>
													<?php } ?>
													<li><a href="<?php echo HOME_URL;?>category/contact.php"><i class="ion-arrow-right-c"></i>Enquiry or Contact US</a></li>
													<li><a href="#"><i class="ion-arrow-right-c"></i>Our Customers</a></li>
													<li><a href="#"><i class="ion-arrow-right-c"></i>Exports</a></li>
													<li><a href="#"><i class="ion-arrow-right-c"></i>Our Services</a></li>
													
												</ul>
											</div>
											
									</li>
									<li class="mega">
										<a href="#">Architecture<i class="ion-chevron-down icon_down"></i></a>
										<div class="mega_menu">
											<div class="supplier_1 catg">
												<div class="category_title">
													<div class="style_div">
														<div class="div1"></div>
														<div class="div2"></div>
													</div>
													<div class="category_name">
														<h5>Architecture</h5>
													</div>
												</div>
												<ul class="category_menu">
													<li><a href="<?php echo HOME_URL;?>architecture/"><i class="ion-arrow-right-c"></i>Architecture Design and Planning</a></li>
													<li><a href="#"><i class="ion-arrow-right-c"></i>Making Drawings</a></li>
													<li><a href="#"><i class="ion-arrow-right-c"></i>Services</a></li>
													<li><a href="<?php echo HOME_URL;?>architecture/contact.php"><i class="ion-arrow-right-c"></i>Enquiry or Contact US</a></li>
													
												</ul>
											</div>
																		
									
									<li><a href="<?php echo HOME_URL;?>contact.php">Contact</a></li>
									<li><a href="<?php echo HOME_URL;?>about_us.html">About</a></li>
								</ul>
							</nav>
							
							<!-- <div class="main_search">
								<a href="#"><i class="ion-ios-search-strong"></i></a>
								<div class="search_all">
									<form action="#" method="post">
										<input type="text" placeholder="Search here...............">
										<button><i class="ion-ios-search-strong"></i></button>
									</form>
								</div>
							</div> -->
						</div>
					</div>				
				</div>			
			</div>		
		</div>
		<!-- <div class="mobile_menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="mobile_mean_logo">
							<a href="<?php echo HOME_URL;?>">
								<img src="<?php echo HOME_URL;?>images/logo.png" alt="logo">
							</a>
						</div>
						<div class="mobilemobilemobile_mean_menu">
							<ul>
								<li>
									<a href="<?php echo HOME_URL;?>">Home</a>
									<ul>
										<li>
											<a href="<?php echo HOME_URL;?>">Home One</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>2.html">Home Two</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="<?php echo HOME_URL;?>about_us.html">About</a>
								</li>
								<li>
									<a href="#">Import</a>
									<ul>
										<li>
											<a href="<?php echo HOME_URL;?>import01.html">Food Products</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>import02.html">Electronics</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>import03.html">Industrial</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>import04.html">Household</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Export</a>
									<ul>
										<li>
											<a href="#">Food Products</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>export02.html">Electronics</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>export03.html">Industrial</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>export04.html">Household</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Buyer</a>
									<ul>
										<li>
											<a href="#">South America</a>
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
								<li>
									<a href="<?php echo HOME_URL;?>">Pages</a>
									<ul>									
										<li>
											<a href="<?php echo HOME_URL;?>partner.html">Partners</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>partnerDetails.html">Partner Details</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>shop.html">Shop</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>shoppingCart.html">Shopping Cart</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>register.html">Register</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>login.php">Login</a>
										</li>
										<li>
											<a href="<?php echo HOME_URL;?>error.html">Error</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	 -->
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
													<li><a href="#">Enquiry or Contact US</a></li>
													<li><a href="#">Our Customers</a></li>
													<li><a href="#">Exports</a></li>
													<li><a href="#">Our Services</a></li>
													
												</ul>
								</li>
								<li>
									<a href="#">Architecture</a>
									
								</li>
																
								<li><a href="<?php echo HOME_URL;?>contact.php">Contact</a></li>
									<li><a href="<?php echo HOME_URL;?>about_us.html">About</a></li>
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
	        <img src="<?php echo HOME_URL;?>images/preloader.gif" alt="preloader"> 
		</div>
	</div>
	