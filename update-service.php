
<?php include("functions/file-function.php") ?>
<?php $id=$_GET['id']; ?>
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
                            <h4 class="card-title">Update Service</h4>
                                <div class="basic-form">
                                <?php
                        
                                
                    if( isset($_POST['save']) ){
                        // database configuration
                        include("includes/db-con.php");
                        
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
                        
                        if(empty($img1)){
                            $img1=$_POST['old_s_img1'];
                        }else{
                            move_uploaded_file($_FILES['s_img1']['tmp_name'],'../img/services/'.$img1);
                        }
                        
                        if(empty($img2)){
                            $img2=$_POST['old_s_img2'];
                        }else{
                            move_uploaded_file($_FILES['s_img2']['tmp_name'],'../img/services/'.$img2);
                        }
                        
                        if(empty($img3)){
                            $img3=$_POST['old_s_img3'];
                        }else{
                            move_uploaded_file($_FILES['s_img3']['tmp_name'],'../img/services/'.$img3);
                        }
                        
                        
                        
                        

                            $sql = "UPDATE `5g_services` SET `s_name`='$name',`url`='$url',`s_title1`='$title1',`s_desc1`='$desc1',`s_img1`='$img1',`s_title2`='$title2',`s_desc2`='$desc2',`s_img2`='$img2',`s_title3`='$title3',`s_desc3`='$desc3',`s_img3`='$img3' WHERE id='$id'";
                            $myqry = mysqli_query($con, $sql);


                       if($myqry) {
                           echo '<script>alert("Done")</script>';
                           echo '<script>window.location.href="view-service.php";</script>';
                       }
                       else {
                        echo '<script>alert("fail")</script>';
                       }
                    }
                    
                ?>
                
                                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                                    <?php
                                                            include("includes/db-con.php");

                                        $sql="select * from 5g_services where id='$id'";
                                        $run=mysqli_query($con,$sql);
                                        $row=mysqli_fetch_assoc($run);
                                        
                                    ?>
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="s_name" class="form-control" value="<?php echo $row['s_name']; ?>">
                      </div>
                      <div class="form-group">
                          <label>Permalink</label>
                          <input type="text" name="url" class="form-control" value="<?php echo $row['url']; ?>">
                      </div>
                      <div class="form-group">
                          <label>Title 1</label>
                          <input type="text" name="s_title1" class="form-control" value="<?php echo $row['s_title1']; ?>">
                      </div>
                      <div class="form-group">
                          <label>Description 1</label>
                          <textarea type="text" name="s_desc1" class="form-control" value=""><?php echo $row['s_desc1']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label>Image 1 </label>
                          <input type="file" name="s_img1" class="form-control">
                          
                      </div>
                      
                       <div class="form-group">
                          <label>Title 2</label>
                          <input type="text" name="s_title2" class="form-control" value="<?php echo $row['s_title2']; ?>">
                      </div>
                      <div class="form-group">
                          <label>Description 2</label>
                          <textarea type="text" name="s_desc2" class="form-control"><?php echo $row['s_desc2']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label>Image 2 </label>
                          <input type="file" name="s_img2" class="form-control">
                      </div>
                       <div class="form-group">
                          <label>Title 3</label>
                          <input type="text" name="s_title3" class="form-control" value="<?php echo $row['s_title3']; ?>">
                      </div>
                      <div class="form-group">
                          <label>Description 3</label>
                          <textarea type="text" name="s_desc3" class="form-control"><?php echo $row['s_desc3']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label>Image 3</label>
                          <input type="file" name="s_img3" class="form-control">
                      </div>
                      
                        <input type="hidden" name="old_s_img1" value="<?php echo $row['s_img1']; ?>">
                        <input type="hidden" name="old_s_img2" value="<?php echo $row['s_img2']; ?>">
                        <input type="hidden" name="old_s_img3" value="<?php echo $row['s_img3']; ?>">
                        
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
