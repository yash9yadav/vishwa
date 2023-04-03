<?php
$phone_n = "+91 7410128888";
$email_id = "contact@vishwatech.com";
$addrs = "India";
$conn = mysqli_connect("localhost","hackuliv_hack2","hackathon@123","hackuliv_hack2");
include("./includes/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vishwa Tech </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="./img/vishwa.png" rel="icon">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i> <?php echo $addrs?></small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>
<?php echo $phone_n?></small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i> <?php echo $email_id?></small>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0">
                    <!--<i class="fa fa-chart-line me-2"></i>-->
                <span>Vishwa</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                
                    <div class="nav-item dropdown">
                        <a href="services.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                                                                                 <?php
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $sql="SELECT * from 5g_services";
  
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
           <a href="service.php?url='.$griditem['url'].'" class="dropdown-item">'.$griditem['s_name'].'</a>
               ';
      }
  }

                            ?>
                           
                            
                        </div>
                    </div>
                    <a href="blog.php" class="nav-item nav-link">Blog</a>
                   <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                          
            
                            <a href="terms.php" class="dropdown-item">Terms & Conditions</a>
                            <a href="privacy.php" class="dropdown-item">Privacy Policy</a>
                            
                            
                        </div>
                    </div>
                     <a href="contact.php" class="nav-item nav-link">Contact</a>
                    
                   
                </div>
                
                
                
                <a href="https://hacku.live/admin" class="btn btn-primary py-2 px-4 ms-3">Admin Panel</a>
            </div>
        </nav>

       
    <!-- Navbar & Carousel End -->
