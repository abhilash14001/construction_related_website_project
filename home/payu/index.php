


<?php
	
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
	//Request hash
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
	if(strcasecmp($contentType, 'application/json') == 0){
		$data = json_decode(file_get_contents('php://input'));
		$hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
		$json=array();
		$json['success'] = $hash;
    	echo json_encode($json);
	
	}
	exit(0);
}
 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	
	$ee = $_SERVER['REQUEST_URI'];
	$eee = explode("?", "$ee");
	$ldfj = $_GET['id'];
	$eee = explode("index.php?productid=$ldfj", "$ee");
	
	return $protocol . $_SERVER['HTTP_HOST'] . $eee[0] . 'response.php';
}
include "../include/header.php"; 


/*  if(isset($_GET['productid']) && isset($_SESSION['user']) && isset($_SESSION['qty']))
{  */
	$username = $_SESSION['user'] . " ". $_SESSION['user1'];
	$fetch = $marble->fetchData("email, mobile", "customer where name = '$username'");
	$row = mysqli_fetch_assoc($fetch);
	$usermail = $row['email'];
	$usermobile = $row['mobile'];
	
	$fetchprod = $marble->fetchData("product_name", "products where id = '$_GET[productid]'");
	$rows = mysqli_fetch_assoc($fetchprod);
	$pdodjlfjd = $rows['product_name'];
	
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="<?php echo HOME_URL;?>images/header_logo.png"></script>-->
<!-- BOLT Production/Live //-->
 <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="<?php echo HOME_URL;?>images/header_logo.png"></script> 

<!-- BOLT Sandbox/test //-->
<style type="text/css">
	.main {
	    max-width:475px;
		margin:5px;
		height:400px;
		padding:15px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	@media(max-width:900px)
	{
		.main{
		
		 height:900px;
		
		}
	
	}
	@media(max-width:900px)
	{
	#payment_form
	{
		margin-top:200px;
	}
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
	}
	</style>

<div class="main">
	<form action="#" id="payment_form">
	<div>
    	<img src="images/payumoney.png" />
    </div>
    <div>
    	<h3>Payment Form for your order <?php echo $pdodjlfjd ?></h3>
    </div>
	
    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
  <div class="dv">
 <!--    <span class="text"><label>Merchant Key:</label></span> -->
    <span><input type="hidden" id="key" name="key" placeholder="Merchant Key" value="BSJeyiBI" /></span>
    </div>
    <input type="hidden" name="productid"/>
    <div class="dv">
    <!-- <span class="text"><label>Merchant Salt:</label></span> -->
    <span><input type="hidden" id="salt" name="salt" placeholder="Merchant Salt" value="HkigLaBgHx" /></span>
    </div> 
    
    <div class="dv">
    <span class="text"><label>Transaction ID:</label></span>
    <span><input type="text" id="txnid" readonly name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
    <span><input type="text" id="amountpay" readonly name="amount" placeholder="Amount" value="<?php echo $_SESSION['totalprice'];?>" required /></span>    
    </div>
    
    <div class="dv">
    <span class="text"><label>Product Info:</label></span>
    <span><input type="text" id="pinfo" name="pinfo" placeholder="Product Info" required value="<?php echo $pdodjlfjd;?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Name:</label></span>
    <span><input type="text" id="fnamepay" name="fname" placeholder="Name" value="<?php echo $_SESSION['user'];?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span><input type="email" id="emailid" name="email" placeholder="Email ID" value="<?php echo $usermail?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Mobile/Cell Number:</label></span>
    <span><input type="text" required id="mobile" name="mobile" placeholder="Mobile/Cell Number" /></span>
    </div>
    
    <div class="dv">
    <!-- <span class="text"><label>Hash:</label></span> -->
    <span><input type="hidden" id="hash" name="hash" placeholder="Hash" value="" /></span>
    </div>
    
    
    <div><input type="submit" style = "margin-left:330px" class = "btn btn-primary btn btn-md" value="Pay" onclick="launchBOLT(); return false;" /></div>
	</form>
	
</div>
<script type = "text/javascript" src = "js/payment.js"></script>
<?php

 include "../include/footer.php"; 
//}
?>



