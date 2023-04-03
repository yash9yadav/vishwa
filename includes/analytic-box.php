<?php 
                        include("includes/db-con.php");
                        ?>
            <div class="container-fluid mt-3">
                <div class="row">
                <?php
                $sel="select * from 5g_blog";
                $qry=mysqli_query($con,$sel);
                $tcq=mysqli_num_rows($qry);
                ?>
                
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Blogs</h3>
                                <div class="d-inline-block">
                                  
                                <h2 class="text-white"><?php echo $tcq ?></h2>

                            </div>
                                
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                $sel="select * from 5g_category";
                $qry=mysqli_query($con,$sel);
                $tcdq=mysqli_num_rows($qry);
                
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                            <h3 class="card-title text-white">Total Category</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tcdq?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>

                    <?php
                $sel="select * from 5g_quote";
                $qry=mysqli_query($con,$sel);
                $tjua=mysqli_num_rows($qry);
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                            <h3 class="card-title text-white">Total Quotes</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tjua ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                $sel="select * from 5g_contact";
                $qry=mysqli_query($con,$sel);
                $tcdqs=mysqli_num_rows($qry);
                
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                            <h3 class="card-title text-white">Total Queries</h3>
                                <div class="d-inline-block">
                                <h2 class="text-white"><?php echo $tcdqs ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
                                <div class="row">
                <?php
                $sel="select * from 5g_users";
                $qry=mysqli_query($con,$sel);
                $tcq=mysqli_num_rows($qry);
                ?>
                
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Users</h3>
                                <div class="d-inline-block">
                                  
                                <h2 class="text-white"><?php echo $tcq ?></h2>

                            </div>
                                
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                $sel="select * from 5g_team";
                $qry=mysqli_query($con,$sel);
                $tcdq=mysqli_num_rows($qry);
                
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                            <h3 class="card-title text-white">Total Team</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tcdq?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>

                    <?php
                $sel="select * from 5g_subscribe";
                $qry=mysqli_query($con,$sel);
                $tjua=mysqli_num_rows($qry);
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                            <h3 class="card-title text-white">Total Subscribers</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $tjua ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                $sel="select * from 5g_testimonial";
                $qry=mysqli_query($con,$sel);
                $tcdqs=mysqli_num_rows($qry);
                
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                            <h3 class="card-title text-white">Total Testimonial</h3>
                                <div class="d-inline-block">
                                <h2 class="text-white"><?php echo $tcdqs ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
