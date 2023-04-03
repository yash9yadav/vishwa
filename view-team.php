
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
                                <h4 class="card-title">View Team</h4>
                                <div class="table-responsive">
                                        
                            <?php
                        include("includes/db-con.php");

                 $sql = "SELECT * FROM 5g_team";
                  $result = mysqli_query($con, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                 
                                    <table id="myTable" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Image</th>
                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        while($row = mysqli_fetch_assoc($result)) {?>
                         
                              <tr>        
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['des']; ?></td>
                              <td><img src="../img/team/<?php echo $row['img']; ?>" width="100px"></td>
                              <td class='delete'><a href='delete-team.php?id=<?php echo $row['id']; ?>'><i class='fa fa-trash'></i></a></td>  
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
