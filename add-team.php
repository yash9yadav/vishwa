

<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>


		<?php

    
    
 include("includes/db-con.php");
		if($_POST){
		    
    $name = $_POST['name'];
    $des = $_POST['des'];
    $fb = $_POST['fb'];
    $insta = $_POST['insta'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
	$team_img=$_FILES['team_img']['name'];
	
	move_uploaded_file($_FILES['team_img']['tmp_name'],'../img/team/'.$team_img);
	 $sql = "INSERT INTO 5g_team (`name`, `des`, `img`, `fb`, `twiiter`, `instagram`, `linkedin`) VALUES ('$name', '$des', '$team_img', '$fb', '$insta', '$twitter', '$linkedin')";
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
                            <h4 class="card-title">Add New Team Memeber</h4>
                                <div class="basic-form">
                            <form action="" method="post" name="add-partner" enctype="multipart/form-data">
                           
                           <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control">
                      </div>
                        
                           <div class="form-group">
                          <label>Designation</label>
                          <input type="text" name="des" class="form-control">
                      </div>
                        
                           <div class="form-group">
                          <label>FB Profile Link</label>
                          <input type="text" name="fb" class="form-control">
                      </div>
                        
                           <div class="form-group">
                          <label>Instagram Profile Link</label>
                          <input type="text" name="insta" class="form-control">
                      </div>
                        
                           <div class="form-group">
                          <label>Twitter Profile Link</label>
                          <input type="text" name="twitter" class="form-control">
                      </div>
                        
                           <div class="form-group">
                          <label>LinkedIn Profile Link</label>
                          <input type="text" name="linkedin" class="form-control">
                      </div>
                     
						      <div class="form-group">
                          <label>Team Image (name of the image should be in image-01.png/image-01.jpg format) </label>
       <input type="file" name="team_img" class="form-control">
                      </div>
					<input type="submit" name="submit" value="Add Team" class="btn-info btn-md btn">
					<?php if($run) { echo '<div class="alert alert-success mt-3" role="alert">Team added successfully</div>'; } ?>
                            
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