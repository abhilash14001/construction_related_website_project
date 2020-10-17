<?php
include "../include/header.php";
?>
<div class="page-breadcrumb">
                <div class="row">
				
				
                    <div class="col-5 align-self-center">
					<div id = "msg"></div>
	<?php if(isset($_SESSION['msg']) || isset($msg))
								{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
								}
					?>
                        <h4 class="page-title">Architecture Designs</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Architecture</li>
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
                <div class="row el-element-overlay">
				<?php
				$fetch = $marble->fetchData('*', "architecture_design");
				while($row = mysqli_fetch_assoc($fetch))
				{
				extract($row);
				?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>architecture/images/<?php echo $images; ?>" alt="user" style = "width :200px; height : 200px"/>
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" target = "_blank" href="<?php echo ADMIN_URL;?>architecture/images/<?php echo $images; ?>"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void()" onclick = "confirmDeleteDesign(<?php echo $id;?>);"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0"><?php echo $title; ?></h4>
                                        <span class="text-muted"><?php echo $description; ?></span>
                                    </div>
                                    <!-- <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-dark btn-circle">$15</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
				<?php } ?>
          <!--     <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-success btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair3.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-dark btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-info btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-success btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair3.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-info btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-warning btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-secondary btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-dark btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair3.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair3.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-danger btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-success btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		  <div class="col-lg-3 col-md-6"> 
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo ADMIN_URL;?>assets/images/gallery/chair2.jpg" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo ADMIN_URL;?>assets/images/gallery/chair4.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void();"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">Rounded Chair</h4>
                                        <span class="text-muted">globe type chair for rest</span>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-dark btn-circle">$15</button>
                                    </div>
                                </div>
                            </div>
		  </div>-->
                    </div>
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
            <?php
include "../include/footer.php";
?>