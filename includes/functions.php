<?php


function get_blogpost() {
    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $sql="SELECT cat.id, cat.name, blog.id, blog.title, blog.category, blog.post_date, blog.post_img,  blog.expect, blog.url FROM 5g_blog as blog INNER JOIN 5g_category as cat ON cat.id = blog.category";
  
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
             <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="./img/blog/'.$griditem['post_img'].'" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">'.$griditem['name'].'</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3"><a href="blog-details.php?url='.$griditem['url'].'">'.$griditem['title'].'</a></h4>
                                    <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                    <a class="text-uppercase" href="blog-details.php?url='.$griditem['url'].'">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
               ';
      }
  }

}
?>


