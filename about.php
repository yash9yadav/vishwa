
	
    <?php
include("./includes/header.php");
    ?>
    
     <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                   
                </div>
            </div>
        </div>
    </div> 

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


   <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Empowering Businesses with Innovative IT Solutions - Vishwa</h1>
                    </div>
                    <p class="mb-4">Vishwa is an IT website that is committed to providing innovative solutions to businesses in a variety of industries. Our team of experienced professionals specializes in software development, web design and development, mobile application development, and digital marketing. We understand that every business has unique needs, and we work closely with our clients to deliver personalized solutions that meet those needs. At Vishwa, we are dedicated to excellence and customer satisfaction. We believe in using the latest technologies and best practices to deliver high-quality solutions that help our clients achieve their goals. Our mission is to be a trusted partner to our clients, and we achieve this by delivering reliable and efficient services. We are constantly learning and evolving to stay ahead of the curve and provide our clients with the best possible results.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Best Staff</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Great Ambiance</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Quality Work</h5>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/34.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

 <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Meet Our Talented Team  at Vishwa</h1>
            </div>

                            
            <div class="row g-5">
                                                                                   <?php
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $sql="SELECT * from 5g_team LIMIT 3";
  
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
                     <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="./img/team/'.$griditem['img'].'" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="'.$griditem['twitter'].'"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="'.$griditem['fb'].'"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="'.$griditem['instagram'].'"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="'.$griditem['linkedin'].'"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">'.$griditem['name'].'</h4>
                            <p class="text-uppercase m-0">'.$griditem['des'].'</p>
                        </div>
                    </div>
                </div>
           
               ';
      }
  }

                            ?>
                            
              
            </div>
        </div>
    </div>
    <!-- Team End -->


	
    <?php
include("./includes/footer.php");
    ?>

