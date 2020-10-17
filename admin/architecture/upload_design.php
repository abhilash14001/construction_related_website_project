<?php
include "../include/header.php";
?>
<div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Upload Design Here</h4>
                            
                            <form class="form-horizontal m-t-30" method ="POST" enctype = "multipart/form-data" action = "add_design.php">
                                <div class="form-group">
                                    <label>Title </label>
                                    <input type="text" class="form-control" name = "title" placeholder = "Enter title here">
                                </div>
                               
                                <div class="form-group">
                                    <label>Enter Description Here</label>
                                    <textarea class="form-control" rows="5" name = "desc"></textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label>Upload Design Here</label>
                                    <input type="file" name = "images" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                	<button type="submit" name = "submit" onclick = "submitFun(this);" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                       <?php
include "../include/footer.php";
?>