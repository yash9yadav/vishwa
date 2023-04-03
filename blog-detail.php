<?php
include("./includes/header.php");
?>
  <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">    	<?php
						$sel="SELECT * from 5g_blog where url='".$_GET['url']."' ";
						$qry=mysqli_query($conn,$sel);
						while($rows=mysqli_fetch_array($qry)){
						echo $rows['title'];
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


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    	<?php
						$sel="SELECT * from 5g_blog where url='".$_GET['url']."' ";
						$qry=mysqli_query($conn,$sel);
						while($rows=mysqli_fetch_array($qry)){
							$title=$rows['title'];
							$desc=$rows['description'];
							$img=$rows['post_img'];
							$expect=$rows['expect'];
						?>
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="./img/blog/<?php echo $img;?>" alt="">
                        <h1 class="mb-4"><?php echo $title;?></h1>
                       <?php echo $desc;?>
                    </div>
                    <?php } ?>
                    <!-- Blog Detail End -->
    
                
                </div>
                
    
              <?php include("./includes/sidebar.php"); ?>
            </div>
        </div>
        </div>
    </div>
    <!-- Blog End -->


    
<?php
include("./includes/footer.php");
?>