<?php
include '../include/header.php';
$getid = $_GET['id'];
if(isset($user))
{
?>
	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->
	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">Address</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
									<li><a href="#">Products</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
									
								<li><a href="#">Address</a></li>
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
	        ==   Start Log in  area  ==
	====================================== -->
	<section class="log_in_form">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-1 col-sm-6" >
					<div class="login_form wow slideInLeft" >
						<div id ="registerform" >
						<h1>Enter Delivery Address to Continue</h1>
						<form action="actions/purchase.php?id=<?php echo $getid;?>" method="POST" >
						
							<div class="login_name" >
								<label for="login_name">
								Enter Pincode<span>*</span>
								</label>
								<input type="text" name = "pincode" id="login_name" required>
							</div>
							
							<div class="login_pwd">
								<label for="login_password">
								Address<span>*</span>
								</label>
								<input type="text" name = "address" id="login_password" required>
							</div><div class="login_pwd">
								<label for="login_password">
								Landmark (optional)<span></span>
								</label>
								<input type="text" name = "landmark" id="login_password">
							</div>
							<button class="btn3" type = "submit" onclick = "submitFun(this)" name = "submit">Submit</button>
						</form>
						</div>
						
                
						
					</div>
				</div>
				
				
				<div class="col-md-5 col-sm-6">
					<figure class="log_image wow slideInRight">
						<img src="<?php echo HOME_URL;?>images/login.png" alt="log in">
					</figure>
				</div>
			</div>
			
		</div>
		
	</section>
	<!-- ======================================
	        ==   End Log in area  ==
	====================================== -->
	<!-- ======================================
	        == Start Footer area  ==
	====================================== -->
	<?php include '../include/footer.php';
}
else
{
	header("location:../");
	
}
		?>
