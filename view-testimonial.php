
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">View Testimonial</h4>
                                <div class="table-responsive">
                                        
                            <?php
                        include("includes/db-con.php");

                 $sql = "SELECT * FROM 5g_testimonial";
                  $result = mysqli_query($con, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                 
                                    <table id="myTable" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        while($row = mysqli_fetch_assoc($result)) {?>
                         
                              <tr>        
                              <td><?php echo $row['test_name']; ?></td>
                              
                               <td><?php echo $row['test_des']; ?></td>
                               
                               <td><?php echo $row['test_desc']; ?></td>
                              
                               <!--<td><a href="../exam-detail.php?url=<?php echo $row['url']; ?>"><i class='fa fa-eye'></i></a></td>-->
                               
                              <td><img src="../img/testimonial/<?php echo $row['test_img']; ?>" width="100px"></td>
                    
                              <td class='delete'><a href='delete-testimonial.php?test_id=<?php echo $row['test_id']; ?>'><i class='fa fa-trash'></i></a></td>  
                                          
                              </tr>                             
                              <?php } } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
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
