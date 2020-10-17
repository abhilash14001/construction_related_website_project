<?php
include "../include/header.php";

if(isset($_SESSION['user']) && isset($_SESSION['qty']))
{
$fetchdetails = $marble->fetchData("*", "products where id = '$_GET[id]'");
$row = mysqli_fetch_assoc($fetchdetails);


	$quantity = $_SESSION['qty'];
	$totalprice = $_SESSION['totalprice'];
	$price = $row['price'];
	$date = date("d-m-Y h:i:sa");
	$images = $row['product_images'];
	$productname = $row['product_name'];
	$desc = $row['description'];
?>
	<!-- ======================================
	        ==   Start Breadcrumb  area  ==
	====================================== -->
	<section class="breadcrumb">	
		<div class="container">
			<div class="supplier_title">
				<h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY">shopping  cart</h1>
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
								<li><a href="#">Shopping Cart</a></li>
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
	        ==   Start Shopping Cart area  ==
	====================================== -->
	<section class="shopping_cart">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="table_area">
						<div class="table_content table-responsive">
							<table class="table">
								<thead>
									<tr>
									 <th>product name</th>
									 <th>Price & quantity</th>
									 <th>order date</th>
									 <th>total price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									 <td>
									 	<div class="cart_item">
									 		<div class="cart_img">
										 		<img src="<?php echo ADMIN_URL;?>products/images/<?php echo $images;?>" alt="Cart Item">
										 	</div>
										 	<div class="cart_desc">
										 		<h2><?php echo $productname;?></h2>
										 		<p><?php echo $desc;?></p>
										 	</div>
									 	</div>
									 </td>
									 <td>₹<?php echo $price; ?> X <?php echo $quantity; ?></td>
									 <td><?php echo $date; ?></td>
									 <td>₹<?php echo $totalprice;?></td>
									</tr>						
								</tbody>
							</table>
						</div>
						<!-- <div class="cart_btns">
							<div class="row">
								<div class="col-sm-4">
									<input type="text" class="input_coupon" placeholder="Coupon Code Enter">		
								</div>
								<div class="col-sm-3">
									<button class="btn_coupon btn3">submit coupon</button>
								</div>
								<div class="col-sm-3 col-sm-offset-2">
									<div class="update_cart">
										<button class="btn3">update cart</button>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-offset-6 col-md-5 col-sm-6 col-sm-offset-5">
					<div class="cart_details">
						<h2>Product total</h2>
						<div class="cart_list">
							<ul>
								<li>Product Subtotal<span>₹<?php echo $totalprice;?></span></li>
								<li>Shipping And Handling<span>All the charges included</span></li>
							</ul>
						</div>
						<form method = "GET" action= "../payu/index.php">
						<input type = "hidden" value = "<?php echo $_GET['id'];?>" name = "productid">
						<button type = "submit" class="btn3">proceed to checkout</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================================
	        ==   End  Shopping Cart area  ==
	====================================== -->
	<!-- ======================================
	        == Start Footer area  ==
	====================================== -->
	<?php
include "../include/footer.php";
}
else
{
$home = HOME_URL;
header("Location:$home");	
}

?>
