
<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>

<?php
        include("includes/db-con.php");
            if($_POST){
           
           $test_desc = $_POST["description"];
           $test_name = $_POST["name"];
           $test_location = $_POST["design"];
           
           $ban_image=$_FILES['ban_image']['name'];
           move_uploaded_file($_FILES['ban_image']['tmp_name'],'../img/testimonial/'.$ban_image);
           
            $sql = "INSERT INTO 5g_testimonial (`test_desc`, `test_img`, `test_name`, `test_des`) VALUES ('$test_desc', '$ban_image', '$test_name', '$test_location')";
           
            $run = mysqli_query($con, $sql);
           
           
            }
       ?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">

                    <div class="row">
                <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Add New Testimonial</h4>
                                <div class="basic-form">
                            <form action="" method="post" name="add-testimonial" enctype="multipart/form-data">
                           
                           <div class="form-group">
                          <label>Testimonial Name</label>
                          <input type="text" name="name" class="form-control">
                      </div>
                      
                       <div class="form-group">
                          <label>Testimonial Designation</label>
                          <input type="text" name="design" class="form-control">
                      </div>
                      
                       <div class="form-group">
                          <label>Testimonial Description</label>
                          <textarea name="description" class="form-control"></textarea>
                      </div>
                     
						      <div class="form-group">
                          <label>Testimonial Image (name of the image should be in image-01.png/image-01.jpg format) </label>
       <input type="file" name="ban_image" class="form-control">
                      </div>
					<input type="submit" name="submit" value="Add Testimonial" class="btn-info btn-md btn">
                            <?php if($run) { echo '<div class="alert alert-success mt-3" role="alert">Testimonial added successfully</div>'; } ?>
                            </form>
                  <!-- /Form End -->
     
                                </div>                            </div>
                                
                        </div>
                    </div>
                       </div>
                       
                    </div>
            <!-- #/ container -->
        </div>
        
         
        
        <!--**********************************
            Content body end
        ***********************************-->

        
<?php get_footer() ?>
