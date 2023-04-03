
				
		<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  }
?>
<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>


		<?php

    
    
 include("includes/db-con.php");
		if($_POST){
		    
    $partner_name = $_POST['name'];
	$partner_img=$_FILES['partner_img']['name'];
	
	move_uploaded_file($_FILES['partner_img']['tmp_name'],'../img/portfolio/'.$partner_img);
	 $sql = "INSERT INTO 5g_portfolio (partner_name, partner_img) VALUES ('$partner_name', '$partner_img')";
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
                            <h4 class="card-title">Add New Portfolio</h4>
                                <div class="basic-form">
                            <form action="" method="post" name="add-partner" enctype="multipart/form-data">
                           
                           <div class="form-group">
                          <label>Portfolio Name</label>
                          <input type="text" name="name" class="form-control">
                      </div>
                     
						      <div class="form-group">
                          <label>Portfolio Image Image (name of the image should be in image-01.png/image-01.jpg format) </label>
       <input type="file" name="partner_img" class="form-control">
                      </div>
					<input type="submit" name="submit" value="Add Portfolio" class="btn-info btn-md btn">
					<?php if($run) { echo '<div class="alert alert-success mt-3" role="alert">Portfolio added successfully</div>'; } ?>
                            
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