<?php
include 'include/header.php';
?>
	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->
	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">log in</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
								<li><a href="#">Log In</a></li>
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
						<h1>Sign In To Your Account</h1>
						<form action="actions/login.php" method="post" >
						
							<div class="login_name" >
								<label for="login_name">
								Enter your email<span>*</span>
								</label>
								<input type="text" name = "emails" id="login_name" required>
							</div>
							<div class="login_pwd">
								<label for="login_password">
								Enter your password<span>*</span>
								</label>
								<input type="password" name = "passwords" id="login_password" required>
							</div>
							<button class="btn3" type = "submit" onclick = "submitFun(this)" name = "login">log in</button>
						</form>
						</div>
						<div id="recoverform" style="display: block;" class = "col-md-12 register_title">
						<div class="logo">
						<h1>Welcome to Buyers.com</h1>
                        <h3>Recover Password</h3>
                        <h5>Enter your Username and instructions will be sent to your Email!</h5>
                    </div>
					<form action="<?php echo BASE_URL;?>forgotpassword.php" method = "POST">
					<div class="login_name">
								
							<input type="text" id="login_name" name= "email" required placeholder="Username or Email">
							</div>
							
							<div class="btn_check">
								<button class="btn3 btn btn-sm btn btn-danger" onclick = "submitFun(this);" type="submit" name="reset">Reset</button>
								
							
							</div>
                    </form>
                    
                    </div>
                
						
						<div class="click_list">
							<a href="javascript:void()" id = "to-recover">Forgot password ?<span> Click Here</span></a>
							<a href="register.php">New User ?<span> Register Now</span></a>
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
	<?php include 'include/footer.php';?>