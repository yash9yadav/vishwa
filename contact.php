<?php
include("./includes/header.php");
?>

  <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                   
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


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">Connect with Vishwa for Innovative IT Solutions and Expert Support</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Request A Call Back</h5>
                            <h4 class="text-primary mb-0">+91 7410128888</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email Us</h5>
                            <h4 class="text-primary mb-0"> contact@vishwatech.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit Us</h5>
                            <h4 class="text-primary mb-0">India </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
         
    
                                                             <?php
                             if($_POST['contact']) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$service = $_POST["subject"];
	$content = $_POST["message"];
	
         $to = "yvy30102002@gmail.com";
         $subject = "New Messasge From Contact Form";
         
         $message .= "<h1>Message Details</h1>
         <br> <p>Name : $name</p>
         <p>Email : $email</p>
         <p>Service : $service</p>
         <p>Message Body : $content</p>";

         
         $header = "From: no-reply@vishwatech.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
if ($retval) {
    echo '<script>alert("Done")</script>';
}
    $sql = "INSERT INTO 5g_contact (name, email,service,message) VALUES ('" . $name. "', '" . $email. "','" . $service. "','" . $content. "')";
	$insert =  mysqli_query($conn, $sql);
}
    ?>
    
    
                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-primary w-100 py-3" name="contact" type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                   
                        
                        <iframe src="https://maps.google.com/maps?q=india&t=&z=10&ie=UTF8&iwloc=&output=embed" width="650" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




<?php
include("./includes/footer.php");
?>