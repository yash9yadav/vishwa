
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
                            <h4 class="card-title">Add New Service</h4>
                                <div class="basic-form">
                                <?php
                        
                                
                    if( isset($_POST['save']) ){
                        // database configuration
                        include("includes/db-con.php");
                        //  $image = $FILES['image']['name'];
                        //  move_uploaded_file($_FILES['image']['tmp_name'],'../img/blog/'.$image);
                        $name = $_POST['s_name'];
                        $url = $_POST['url'];
                        $title1 = $_POST['s_title1'];
                        $desc1 = $_POST['s_desc1'];
                        $img1 = $_FILES['s_img1']['name'];
                        $title2 = $_POST['s_title2'];
                        $desc2 = $_POST['s_desc2'];
                        $img2 = $_FILES['s_img2']['name'];
                        $title3 = $_POST['s_title3'];
                        $desc3 = $_POST['s_desc3'];
                        $img3 = $_FILES['s_img3']['name'];
                        
                        move_uploaded_file($_FILES['s_img1']['tmp_name'],'../img/services/'.$img1);
                        move_uploaded_file($_FILES['s_img2']['tmp_name'],'../img/services/'.$img2);
                        move_uploaded_file($_FILES['s_img3']['tmp_name'],'../img/services/'.$img3);
                        

                             $sql = "INSERT INTO 5g_services (`s_name`, `url`, `s_title1`, `s_desc1`, `s_img1`, `s_title2`, `s_desc2`, `s_img2`, `s_title3`, `s_desc3`, `s_img3`) VALUES
                              ('$name','$url','$title1', '$desc1','$img1','$title2','$desc2','$img2','$title3','$desc3','$img3')";
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
                          <label>Name</label>
                          <input type="text" name="s_name" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Permalink</label>
                          <input type="text" name="url" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Title 1</label>
                          <input type="text" name="s_title1" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Description 1</label>
                          <textarea type="text" name="s_desc1" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Image 1 </label>
                          <input type="file" name="s_img1" class="form-control">
                      </div>
                      
                       <div class="form-group">
                          <label>Title 2</label>
                          <input type="text" name="s_title2" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Description 2</label>
                          <textarea type="text" name="s_desc2" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Image 2 </label>
                          <input type="file" name="s_img2" class="form-control">
                      </div>
                       <div class="form-group">
                          <label>Title 3</label>
                          <input type="text" name="s_title3" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Description 3</label>
                          <textarea type="text" name="s_desc3" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Image 3</label>
                          <input type="file" name="s_img3" class="form-control">
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
            CKEDITOR.replace( 's_desc1' );
            CKEDITOR.replace( 's_desc2' );
            CKEDITOR.replace( 's_desc3' );
        </script>
        
        <!--**********************************
            Content body end
        ***********************************-->

        
<?php get_footer() ?>
