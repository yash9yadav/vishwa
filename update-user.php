<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  }
                  $id = $_GET['id'];

?>

<?php include("functions/file-function.php") ?>

<?php get_header() ?>
   
<?php get_navbar() ?>
<?php get_sidebar() ?>

                 <?php
include("includes/header.php");
include("includes/db-con.php");
          if(isset($_POST['update'])){
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $pass = mysqli_real_escape_string($con, $_POST['password']);
         
           
            $sql = "UPDATE users SET email= '$email', password= '$pass' WHERE id = '".$_GET['id']."'";
               $myqry = mysqli_query($con, $sql);
               if($myqry) {
                echo '<script>alert("Done")</script>';
               echo '<meta http-equiv="refresh" content="0.1;url=view-users.php" />';
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
                            <h4 class="card-title">Update User</h4>
                                <div class="basic-form">
                                <?php
                include("includes/db-con.php");

                 $sql = "SELECT * FROM users where id = '".$_GET['id']."'";
                  $result = mysqli_query($con, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                
                 <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
                      </div>
                                    
                                                          <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" value="<?php echo $row['password']?>">
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
     
        <!--**********************************
            Content body end
        ***********************************-->
        
<?php get_footer() ?>
