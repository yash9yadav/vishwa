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
                            <h4 class="card-title">Add New User</h4>
                                <div class="basic-form">
                                <?php
                    if( isset($_POST['save']) ){
                        // database configuration
                        include("includes/db-con.php");
                    
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                       
                          
                             $sql = "INSERT INTO 5g_users (email, password, role) VALUES
                              ('$email', '$password', 'staff')";
                            $myqry = mysqli_query($con, $sql);
                            

                       if($myqry) {
                           echo '<script>alert("Done")</script>';
                       }
                       else {
                        echo '<script>alert("fail")</script>';
                       }
                    }
                    
                ?>
                
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                                     
                      
                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control">
                      </div>
                         <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control">
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
