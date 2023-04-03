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
<style>
    table {
  counter-reset: rowNumber;
}

table #mytbl {
  counter-increment: rowNumber;
}

table #mytbl td:first-child::before {
  content: counter(rowNumber);
  min-width: 1em;
  margin-right: 0.5em;
}
</style>
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">




 <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">View Users</h4>
                                <div class="table-responsive">
                                        
                            <?php
                        include("includes/db-con.php");

                 $sql = "SELECT * FROM 5g_users";
                  $result = mysqli_query($con, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                 
                                    <table id="myTable" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        while($row = mysqli_fetch_assoc($result)) {?>
                         
                              <tr>        
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['password']; ?></td>
                                     <td class='edit'><a href='update-user.php?id=<?php echo $row['id']; ?>'><i class='fa fa-edit'></i></a></td>

                              <td class='delete'><a href='delete-user.php?id=<?php echo $row['id']; ?>'><i class='fa fa-trash'></i></a></td>  
                              </tr>                             
                              <?php  } } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



   </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
<?php get_footer() ?>
