
<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>

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
                            <h4 class="card-title">Add New Post</h4>
                                <div class="basic-form">
                                <?php
                        
                                
                    if( isset($_POST['save']) ){
                        // database configuration
                        include("includes/db-con.php");
                        //  $image = $FILES['image']['name'];
                        //  move_uploaded_file($_FILES['image']['tmp_name'],'../img/blog/'.$image);
                        $title = $_POST['title'];
                        $expect = $_POST['expect'];
                        $category = $_POST['category'];
                        $description = $_POST['description'];
                        $url = $_POST['url'];
                        	$image=$_FILES['image']['name'];
                        
	
	move_uploaded_file($_FILES['image']['tmp_name'], '../img/blog/'.$image);
	


                             $sql = "INSERT INTO 5g_blog (`title`, `description`, `category`, `post_img`, `expect`, `url`) VALUES
                              ('$title','$description','$category', '$image','$expect','$url')";
                            $myqry = mysqli_query($con, $sql);


                       if($myqry) {
                           echo '<script>alert("Done")</script>';
                       }
                       else {
                        echo '<script>alert("fail")</script>';
                       }
                    }
                    
                ?>
                
                                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="title" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Category</label>
                          <select name="category" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php
                                          include("includes/db-con.php");
                                        $result = mysqli_query($con, "SELECT * FROM 5g_category");
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row["name"]; ?></option>
                                            <?php } ?>
                                    </select>
                      </div>
                      <div class="form-group">
                          <label>Expect</label>
                          <input type="text" name="expect" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Description</label>
                          <textarea type="text" name="description" class="form-control"></textarea>
                      </div>
                     
                      <div class="form-group">
                          <label>Permalink</label>
                          <input type="text" name="url" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Image</label>
                          <input type="file" name="image" class="form-control">
                      </div>

                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
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
