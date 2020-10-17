<?php
include "include/header.php";

if(!(isset($_SESSION['admin'])))
{
	header("location:login/index.php");
	
}
$howmanyconst = $marble->fetchData("count(id)", "construction");
$countconst = mysqli_fetch_assoc($howmanyconst);
$howmanycat = $marble->fetchData("count(id)", "stone_category");
$countcat = mysqli_fetch_assoc($howmanycat);
$howmanyarc = $marble->fetchData("count(id)", "architecture_design");
$countarc = mysqli_fetch_assoc($howmanyarc);
$howmanyusers = $marble->fetchData("count(id)", "customer");
$countusers = mysqli_fetch_assoc($howmanyusers);
$howmanycontact = $marble->fetchData("count(id)", "contact_us");
$countcontact = mysqli_fetch_assoc($howmanycontact);
$howmanyproduct = $marble->fetchData("count(id)", "products");
$countproduct = mysqli_fetch_assoc($howmanyproduct);
$howmanynewsletter = $marble->fetchData("count(id)", "newsletter");
$countnewsletter = mysqli_fetch_assoc($howmanynewsletter);
?>

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
						<a href = "construction/view.php">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="fas fa-building font-20 text-info"></i>
                                        <p class="font-16 m-b-5">Construction</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countconst['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
							</a>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
						<a href = "stone_world/view.php">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="mdi mdi-image font-20 text-success"></i>
                                        <p class="font-16 m-b-5">Stone World</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countcat['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
								</a>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
						<a href = "architecture/">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="fas fa-paint-brush font-20 text-purple"></i>
                                        <p class="font-16 m-b-5">Architecture</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countarc['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
							</a>
                        </div>                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
						<a href = "users/">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="fas fa-user font 20 text-danger"></i>
                                        <p class="font-16 m-b-5">No. of Users</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countusers['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
							</a>
                        </div>                        
                    </div>
					<div class="col-lg-3 col-md-6">
                        <div class="card">
								<a href = "contact_us/">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="fas fa-phone text-danger"></i>
                                        <p class="font-16 m-b-5">Contact US Data</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countcontact['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
							
                        </div>                        
						</a>
                    </div>
					<div class="col-lg-3 col-md-6">
                        <div class="card">
								<a href = "products/">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="fas fa-shopping-bag text-danger"></i>
                                        <p class="font-16 m-b-5">Products Data</p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countproduct['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
							
                        </div>                        
						</a>
                    </div>
					<div class="col-lg-3 col-md-6">
                        <div class="card">
								<a href = "newsletter/">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <i class="fas fa-newspaper text-danger"></i>
                                        <p class="font-16 m-b-5">Newsletter </p>
                                    </div>
                                    <div class="col-5">
                                        <h1 class="font-light text-right mb-0"><?php echo $countnewsletter['count(id)'];?></h1>
                                    </div>
                                </div>
                            </div>
							
                        </div>                        
						</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                     <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and todo -->
                <!-- ============================================================== -->
                     <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
 		</div> 
<?php
include "include/footer.php"?>