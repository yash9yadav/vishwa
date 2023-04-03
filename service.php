
	
    <?php
include("./includes/header.php");
    ?>
    
     <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">	<?php
						$sel="SELECT * from 5g_services where url='".$_GET['url']."' ";
						$qry=mysqli_query($conn,$sel);
						while($rows=mysqli_fetch_array($qry)){
						echo $rows['s_name'];
						}
						?></h1>
                   
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
                        <?php
						$sel="SELECT * from 5g_services where url='".$_GET['url']."' ";
						$qry=mysqli_query($conn,$sel);
						while($rows=mysqli_fetch_array($qry)){
							$title1=$rows['s_title1'];
							$desc1=$rows['s_desc1'];
							$img1=$rows['s_img1'];
								$title2=$rows['s_title2'];
							$desc2=$rows['s_desc2'];
							$img2=$rows['s_img2'];
									$title3=$rows['s_title3'];
							$desc3=$rows['s_desc3'];
							$img3 = $rows['s_img3'];
						?>
                        <h1 class="mb-0"><?php echo $title1 ?></h1>
                    </div>
                   <?php echo $desc1 ?>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="./img/services/<?php echo $img1 ?>" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
  

        <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
            
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="./img/services/<?php echo $img2 ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
           <div class="section-title position-relative pb-3 mb-5">
                        
                        <h1 class="mb-0"><?php echo $title2 ?></h1>
                    </div>
                   <?php echo $desc2 ?>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    
           <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
              
                        <h1 class="mb-0"><?php echo $title3 ?></h1>
                    </div>
                   <?php echo $desc3 ?>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="./img/services/<?php echo $img3 ?>" style="object-fit: cover;">
                    </div>
                                   <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Delivering Innovative IT Solutions to Meet Your Business  </h1>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Cyber Security</h4>
                        <p class="m-0">Cyber analytics is the practice of using data analysis techniques to detect and prevent cyber attacks.
</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Apps Development</h4>
                        <p class="m-0">App development is the process of creating software applications that run on mobile devices such as smartphones and tablets. </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">Web development involves various tasks such as web design, coding, and testing to ensure that the website is functional, responsive, and user-friendly.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Data Analytics</h4>
                        <p class="m-0">Data analytics is the process of examining and interpreting data to draw insights and conclusions.
</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO </h4>
                        <p class="m-0">SEO, or Search Engine Optimization, is the practice of improving a website's visibility and ranking on search engine results pages.  </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Contact Us For Queries</h3>
                        <p class="text-white mb-3">Vishwa is an IT website that is committed to providing innovative solutions to businesses in a variety of industries.</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


  

	
    <?php
include("./includes/footer.php");
    ?>

