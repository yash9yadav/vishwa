

<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>


		<?php
 include("includes/db-con.php");
		if($_POST){
	
	$cat_name=$_POST['name'];
	 $ins="INSERT into 5g_category (name) values('$cat_name')";
	$qry=mysqli_query($con,$ins);
	
	
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
                            <h4 class="card-title">Add New Category</h4>
                                <div class="basic-form">
                            <form action="" method="post" name="add-banner" enctype="multipart/form-data">
                           
                           <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="name" class="form-control">
                      </div>
                     
						 
					<input type="submit" name="submit" value="Add Category" class="btn-info btn-md btn">
                            <?php if($qry) { echo '<div class="alert alert-success mt-3" role="alert">Category added successfully</div>'; } ?>
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

		
	