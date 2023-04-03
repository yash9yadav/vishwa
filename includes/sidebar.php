                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                                                                                   <?php
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $sql="SELECT * from 5g_category";
  
  if ($result=mysqli_query($conn,$sql))
  {
        //count number of rows in query result
      $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
      if ($rowcount==0) {
            # code...
          echo 'No Posts To Fetch';
      }
        //if there are rows available display all the results
      foreach ($result as $bloggrid => $griditem) {
          
        # code...
          echo '
                                      <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>'.$griditem['name'].'</a>
               ';
      }
  }

                            ?>
                        </div>
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                                                                               <?php
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $sql="SELECT cat.cat_id, cat.name, blog.id, blog.title, blog.category, blog.post_date, blog.post_img,  blog.expect, blog.url FROM 5g_blog as blog INNER JOIN 5g_category as cat ON cat.cat_id = blog.category LIMIT 5";
  
  if ($result=mysqli_query($conn,$sql))
  {
        //count number of rows in query result
      $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
      if ($rowcount==0) {
            # code...
          echo 'No Posts To Fetch';
      }
        //if there are rows available display all the results
      foreach ($result as $bloggrid => $griditem) {
          
        # code...
          echo '
           <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="./img/blog/'.$griditem['post_img'].'" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="blog-details.php?url='.$griditem['url'].'" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">'.$griditem['title'].'
                            </a>
                        </div>
               ';
      }
  }

                            ?>
                   
                    <!-- Recent Post End -->
    
                  
    
                </div>
                <!-- Sidebar End -->