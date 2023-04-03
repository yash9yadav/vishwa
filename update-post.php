
<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>

                 <?php
include("includes/header.php");
include("./includes/db-con.php");
          if(isset($_POST['update'])){
            $title = mysqli_real_escape_string($con, $_POST['title']);
            $description = mysqli_real_escape_string($con, $_POST['description']);
            $expect = mysqli_real_escape_string($con, $_POST['expect']);
            $url = mysqli_real_escape_string($con, $_POST['url']);
         
  
            $sql="UPDATE `5g_blog` SET title = '$title', description = '$description', expect='$expect', url='$url' WHERE id='".$_GET['id']."'";
         
           
               $myqry = mysqli_query($con, $sql);
               if($myqry) {
                echo '<script>alert("Done")</script>';
               echo '<meta http-equiv="refresh" content="0.1;url=view-post.php" />';
            }
            else {
             echo '<script>alert("fail")</script>';
            }
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
                            <h4 class="card-title">Update Blog</h4>
                                <div class="basic-form">
                                <?php
                //   $con=mysqli_conect("localhost","root","","certificate");
                include("includes/db-con.php");

                 $sql = "SELECT * FROM 5g_blog where id = '".$_GET['id']."'";
                  $result = mysqli_query($con, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                
                 <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="title" class="form-control" value="<?php echo $row['title']?>">
                          
                        
                           <label>Description</label>
                          <textarea type="text" name="description" class="form-control" value=""><?php echo $row['description']?></textarea>
                          
                          <label>Except</label>
                          <input type="text" name="expect" class="form-control" value="<?php echo $row['expect']?>">
                          
                          <label>Url</label>
                          <input type="text" name="url" class="form-control" value="<?php echo $row['url']?>">
                          
                          
                      </div>
                                                 
  <?php } } ?>
                      <input type="submit" name="update" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
                  
                  
                
                  <!-- /Form End -->

                                </div>                            </div>
                                
                        </div>
                    </div>
                       </div>
                       
                    </div>
            <!-- #/ container -->
        </div>
        
        <script>
            CKEDITOR.replace('description');
            CKEDITOR.replace('eligibility');
            CKEDITOR.replace('admission');
            CKEDITOR.replace('document');
            CKEDITOR.replace('cut_off');
            CKEDITOR.replace('ranking');
            CKEDITOR.replace('placement');
            CKEDITOR.replace('campus');
            CKEDITOR.replace('imp_dates');
           
        </script>
     
        <!--**********************************
            Content body end
        ***********************************-->
        
<?php get_footer() ?>
