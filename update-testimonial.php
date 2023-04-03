
<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>

<?php
		include("includes/db-con.php");
		
		$test_id=$_GET['test_id'];
		
		if($_POST){
		    
			$test_desc=$_POST['test_desc'];
        	$test_img=$_FILES['test_img']['name'];
        	$test_name=$_POST['test_name'];
        	$test_location=$_POST['test_location'];
       
            
            if($test_img!=''){
	
		        move_uploaded_file($_FILES['test_img']['tmp_name'], '../upload/testimonial/'.$test_img);
		    }
	
    		else{
    	
    			 $test_img= $_POST['old_image'];
    		}
        	
        	$upd="UPDATE 5g_testimonial SET test_desc='$test_desc', test_img='$test_img', test_name='$test_name', test_location='$test_location' WHERE test_id='$test_id'";
		 
	        $query=mysqli_query($con,$upd);
	        
	        echo '<script>window.location.href = "./view-testimonial.php"; </script>';
	
	        
	
		}
?>
<?php

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
                            <h4 class="card-title">Update Testimonial</h4>
                                <div class="basic-form">
                            <form action="" method="post" name="add-testimonial" enctype="multipart/form-data">
                                
                                <?php
                                $sel="select * from  5g_testimonial where test_id='$test_id'";
                            	$qry=mysqli_query($con,$sel);
                            	$rs=mysqli_fetch_array($qry);
                                ?>
                           
                           <div class="form-group">
                          <label>Testimonial Name</label>
                          <input type="text" name="test_name" class="form-control" value="<?php echo $rs['test_name'] ?>">
                      </div>
                      
                       <div class="form-group">
                          <label>Testimonial Location</label>
                          <input type="text" name="test_location" class="form-control" value="<?php echo $rs['test_location'] ?>">
                      </div>
                      
                       <div class="form-group">
                          <label>Testimonial Description</label>
                          <textarea name="test_desc" class="form-control"><?php echo $rs['test_desc'] ?></textarea>
                      </div>
                      <input type="hidden" name="old_image" value="<?php echo $rs['test_img'];?>"></div>
                     
						      <div class="form-group">
                                <label>Current Image</label><br>
                                <img src="../upload/testimonial/<?php echo $rs['test_img'];?>" width="200" />
                      </div>
                      
                       <div class="form-group">
                          <label>Testimonial Image (name of the image should be in image-01.png/image-01.jpg format) </label>
       <input type="file" name="test_img" class="form-control">
                      </div>
                      
					<input type="submit" name="submit" value="Update Testimonial" class="btn-info btn-md btn">
                            <?php if($query) { echo '<div class="alert alert-success mt-3" role="alert">Testimonial Updated successfully</div>'; } ?>
                            </form>
                  <!-- /Form End -->
     
                                </div>                            </div>
                                
                        </div>
                    </div>
                       </div>
                       
                    </div>
            <!-- #/ container -->
        </div>
        
                <script>
            CKEDITOR.replace( 'description' );
        </script>
        
        <!--**********************************
            Content body end
        ***********************************-->

        
<?php get_footer() ?>