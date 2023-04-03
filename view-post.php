
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
                                <h4 class="card-title">View Posts</h4>
                                <div class="table-responsive">
                                        
                            <?php
                        include("includes/db-con.php");

                 $sql = "SELECT blog.id, blog.title, blog.category, blog.post_date, cat.name, cat.cat_id FROM 5g_blog as blog INNER JOIN 5g_category as cat ON blog.category = cat.cat_id";
                  $result = mysqli_query($con, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                 
                                    <table id="myTable" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        while($row = mysqli_fetch_assoc($result)) {?>
                         
                              <tr>        
                              <td><?php echo $row['title']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['post_date']; ?></td>
                              <td class='edit'><a href='update-post.php?id=<?php echo $row['id']; ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?id=<?php echo $row['id']; ?>'><i class='fa fa-trash'></i></a></td>  

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
