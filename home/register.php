<?php include "include/header.php"; ?>
	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->

	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">Register</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="supplier_country">
						<div class="country">
							<ul>
								<li><a href="<?php echo HOME_URL;?>">Home</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
								<li><a href="<?php echo HOME_URL;?>">Pages</a>
								<i class="ion-ios-arrow-forward"></i>
								</li>
								<li><a href="#">Register</a></li>
							</ul>
						</div>
						<div class="search_supplier">					
							<form action="#" method="post">
								<input type="text" placeholder="Search here...............">
								<button><i class="ion-ios-search-strong"></i></button>
							</form>
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
	        ==   Start Register  area  ==
	====================================== -->
	<section class="register" >
	
		<div class="container">
			<div class="row">
				<div class="col-md-6" >
				
					<form action="actions/register.php" method="post">
						<div class="reg_form" id = "registerform">
							<div class="register_title">
								<h1>Welcome to Buyers.com</h1>
								<p>Join as a Free Member to get more update. It’s very easy & free.</p>
							</div>
							<div class="reg_form_title">
								<h1>Create a New  Account</h1>
							</div>
							<div class="name input_cmn">
								<label for="frst_name">First Name*</label>
								<input type="text" name = "fname" id="frst_name" title="Alphabets allowed only" required>
							</div>
							<div class="name input_cmn input_lst_style">
								<label for="lst_name">Last Name*</label>
								<input type="text" id="lst_name" name = "lname" title="Alphabets allowed only" required>
							</div>
							<div class="reg_email">
								<label for="regs_email">Enter your email*</label>
								<input type="email" id="regs_email" name = "email" required>
							</div>
							<div class="reg_email">
								<label for="regs_email">Enter your Mobile*</label>
								<input type="text" id="regs_email" name = "mobile" required>
							</div>
							<div class="reg_password">
								<label for="regs_pwd">Enter your password*</label>
								<input type="password" id="regs_pwd" name= "password" required>
							</div>
							<div class="btn_check">
								<button class="btn3" name = "register" onclick = "submitFun(this);" type = "submit">register</button>
							
							</div>
							<div class="click_list">
							<input type = "hidden" name = "reset">
								<a href="javascript:void()" id = "to-recover">Forgot password ?<span>Click Here</span></a>
							</div>	
						</div>	
						
					</form>
						<div id="recoverform" style="display: block;" class = "col-md-12 register_title">
                    <div class="logo">
                        <h1>Welcome to Buyers.com</h1>
                        <h3>Recover Password</h3>
                        <h5>Enter your Username and instructions will be sent to your Email!</h5>
                    </div>
					<form action="<?php echo BASE_URL;?>forgotpassword.php" method = "POST">
					<div class="reg_password">
								
								<input type="email" id="regs_pwd" name= "email" required placeholder="Username or Email">
							</div>
							<div class="btn_check">
								<button class="btn3 btn btn-lg btn btn-danger" onclick = "submitFun(this);" type="submit" name="reset">Reset</button>
								
							
							</div>
                    </form>
                    
                    </div>
                
					
						
					<!-- 	<div class="bsn_form">
							<div class="bsn_title">
								<h1>Enter Your Business Information</h1>
							</div>
							<div class="bsn_radio">
								<label>I am a</label>
								<div class="rd_btn">
									<input type="radio" name="designation" value="buyer" checked class="dsgn">Buyer
								</div>
								<div class="rd_btn">
									<input type="radio" name="designation" value="seller" class="dsgn">Supplier
								</div>
								<div class="rd_btn">
									<input type="radio" name="designation" value="both" class="dsgn">Both
								</div>
							</div>
							<div class="bsn_frm_input input_cmn ">
								<label for="country">add your country</label>
								<div class="select">
									<select name="country" id="country" class="options">
									 	<option value="" disabled selected>Select Your Country</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="India">India</option>
										<option value="Nepal">Nepal</option>
										<option value="Bhutan">Bhutan</option>
									</select>
								</div>
							</div>
							<div class="bsn_frm_input input_cmn input_lst_style">
								<label for="country_code">country code</label>
								<input type="text" id="country_code" placeholder="Type here">
							</div>
							<div class="bsn_frm_input input_cmn">
								<label for="company">company name</label>
								<input type="text" id="company" placeholder="Your Company">
							</div>
							<div class="bsn_frm_input input_cmn input_lst_style">
								<label for="company_type">company type</label>
								<div class="select">
									<select name="company_type" id="company_type" class="options">
									 	<option value="" disabled selected>Company Type</option>
										<option value="Bangladesh">Tech</option>
										<option value="India">Education</option>
										<option value="Nepal">Business</option>
										<option value="Bhutan">Services</option>
									</select>								
								</div>
							</div>
							<div class="bsn_frm_input input_cmn">
								<label for="cc">country code</label>
								<input type="text" id="cc" placeholder="Contact no">
							</div>
							<div class="bsn_frm_input input_cmn input_lst_style">
								<label for="office_contact">Office contact no</label>
								<input type="text" id="office_contact" placeholder="Contact no">
							</div>
							<div class="agree_check">
								<input type="checkbox"  id="agree_check" >
								<label for="agree_check">I agree with the buyers.com.<a href="#">Terms and services</a></label>
							</div>
							<div class="notification_check">
								<input type="checkbox"  id="notification_check">
								<label for="notification_check">I would like to recieve information related to my industry and service notification letters from buyers.com</label>
							</div>
							<div class="captcha">
								<img src="images/captcha.png" alt="captcha">
							</div>
							<button class="btn_style btn3">create account</button>
						</div> -->
					
					
				</div>
				
				
				<div class="col-md-6">
					<figure class="register_image">
						<img src="images/Register.png" alt="register">
					</figure>
				</div>
			</div>
			
			</div>
			
	</section>
	
		
	<?php include "include/footer.php"; ?>