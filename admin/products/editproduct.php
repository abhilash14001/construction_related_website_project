<?php
include "../include/header.php"; 
$fetchcategory = $marble->fetchData("id, category_name", "stone_category where parent_id = 0");
$fetchproduct = $marble->fetchData("*", "products where id = '$_GET[id]'");
$showproduct = mysqli_fetch_assoc($fetchproduct);
extract($showproduct);
if($_GET['id'])
{


?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Edit Product</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="actions/update_products.php?id=<?php echo $id;?>" method = "POST" enctype = "multipart/form-data">
                                    <div class="form-body">
                                        <h5 class="card-title">About Product</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" value = "<?php echo $product_name; ?>" name = "pname" id="firstName" class="form-control" placeholder="Enter Product Name"> </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select id = "onchange" name ="catid" class="form-control" data-placeholder="Choose a Category" tabindex="1">
													 <option value="<?php echo $category_id; ?>"><?php echo $marble->getCategoryName($category_id);?></option>
													<?php while($row = mysqli_fetch_assoc($fetchcategory)) {
													extract($row);
													if($category_id != $id && $category_name != $marble->getCategoryName($category_id))
													{
													?>
													
                                                        <option id = "selectcat" value="<?php echo $id; ?>"><?php echo $category_name; ?></option>
													<?php } 
													}
													?>  
                                                    </select>
                                                </div>
                                            </div>
											<div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sub Category</label>
                                                    <select  name ="subcatid" class="form-control subcategoryoption" data-placeholder="Choose a Category" tabindex="1">
													<option value ="<?php echo $sub_category_id;?>"><?php echo $marble->getCategoryName($sub_category_id);?>	</option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                                                                        <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">₹</span>
                                                        </div>
                                                        <input type="text" class="form-control" value = "<?php echo $price; ?>" name = "price" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Volume</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            
                                                        </div>
														<select name = "volume" class="form-control" >
														<option class="form-control" value = "<?php echo $volume;?>"><?php echo $volume;?>
                                                        </option> 
														
														<option class="form-control" value = "sqft">Sqft.
                                                        </option> 
														<option class="form-control" value ="mtr">
														Meter
                                                        </option> 
														<option class="form-control" value = "feet">
														Feet
                                                        </option> 
														</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <h5 class="card-title m-t-40">Product Description</h5>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <textarea value = "<?php echo $description;?>" name = "desc" class="form-control" rows="4"><?php echo $description; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                                   <!--/span-->
                                            <div class="col-md-3">
											<div class="gallerys"  style = "margin-left:30px">
											<div class = "gallery">
											
												</div>		
											</div>											
                                                <h5 class="card-title m-t-20">Upload Image</h5>
                                               
                                                <div class="btn btn-info waves-effect waves-light"><span>Upload Image</span>
                                                    <input multiple type="file" name = "images[]" class="upload"> </div>
                                            </div>
                                        </div>
                                       
                                        <hr> </div>
                                    <div class="form-actions m-t-40">
                                        <button type="submit" onclick = "submitFun(this)" name = "submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <a href = "view.php" class="btn btn-dark">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
			<div id = "show"></div>
			
            <!-- ============================================================== -->
<?php
include "../include/footer.php"; ?>
<script>$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img style = "width:200px; height:200px">&nbsp;')).attr('src', event.target.result).appendTo(placeToInsertImagePreview).prepend('<div class = "row"></div>');
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $('.upload').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
$(document).ready(function()
{
$("#onchange").change(function(){
	var id = $('#selectcat').val();
	
	$.ajax({
		data:{id:id},
		dataType:"html",
		method:"POST",
		url:"fetchsubcat.php",
		
		success:function(data)
		{
		
		$('.subcategoryoption').html(data);
		
		},
		});
	
});	
});

</script>
<?php }
?>