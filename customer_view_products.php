<?php include 'loggedinheader.php';

$q="SELECT * FROM `tbl_item` INNER JOIN `tbl_subcat` USING(`Subcat_Id`) INNER JOIN `tbl_purchild` USING(`Itm_Id`) WHERE Status='1' GROUP BY itm_Id";
$res=select($q);

if(isset($_GET['brand'])){
    extract($_GET);
    $q="SELECT * FROM `tbl_item` INNER JOIN `tbl_subcat` USING(`Subcat_Id`) INNER JOIN `tbl_purchild` USING(`Itm_Id`) WHERE `Subcat_Name`='$brand'";
    $res=select($q);
}
if(isset($_GET['view_more'])){
    extract($_GET);
    $q="SELECT * FROM `tbl_item` INNER JOIN `tbl_subcat` USING(`Subcat_Id`) INNER JOIN `tbl_purchild` USING(`Itm_Id`)";
    $res=select($q);
}

 ?>

<!--  <div style="margin-bottom: 1em; background:url('static/img/blog-1.jpg') ; height: 300px; width: 100%; background-size: cover;" >
    </div>
 -->
   
    <!-- home page service grids -->

    <div class="w3l-news py-5" id="homeblog">
        <div class="container py-lg-5 py-md-8 py-2" id="ss">
            <div class="row justify-content-">
                 

                <?php
    
                if(sizeof($res)>0){
                $i=1;
                foreach ($res as $row ) {  ?>
  
                <div class="col-lg-3 col-md-4 mt-lg-2 mt-4" >
                    <div class="grids5-info">
                        
                            
                                <?php
                    
                                    if($row['Stock']=='0')
                                    {  ?><a href="" class="blog-image d-block zoom" style="height:270px"><img src="<?php echo $row['Image']?>">
                                        <div class="image-overlay">
                                       <span>Out of Stock</span>
                                  <?php  }
                                    elseif ($row['Stock']<'4')
                                    {  ?>
                                        <a href="add_qty_cart.php?id=<?php echo $row['Itm_Id']?>&img=<?php echo $row['Image'] ?>&stock=<?php echo $row['Stock'] ?>" class="blog-image d-block zoom" style="height:270px"><img src="<?php echo $row['Image']?>">
                                            <div class="image-overlay">
                                       <span>Only <?php echo $row['Stock'] ?> left.</span>
                                   <?php }
                                    else
                                    {  ?>
                                        <a href="add_qty_cart.php?id=<?php echo $row['Itm_Id']?>&img=<?php echo $row['Image'] ?>&stock=<?php echo $row['Stock'] ?>" class="blog-image d-block zoom" style="height:270px"><img src="<?php echo $row['Image']?>">
                                            <div class="image-overlay">
                                       <span>In-Stock</span>
                                   <?php }
                                  
                                ?>
                                
                            </div>
                        </a>
                        <!-- <div class="blog-info card-body blog-details"> -->
                            <!-- <div class="d-flex align-items-center justify-content-between">
                                <a href="#author" class="post"><i class="fas fa-user"></i> Mauree</a>
                                <h6 class="date"><i class="fas fa-clock"></i> Nov 16, 2021.</h6>
                            </div> -->
<center>
    <!-- <span style="height:50px"></span> -->
    <div style="height:60px;padding-top: 10px">
                            <h4> <?php echo $row['Itm_name']?></h4>
                            </div>

                         <!-- <?php echo $row['Description']?>GB </p> -->

                        
                        <!-- <p>Camera</p> --> 
                        
                        <br>
                        <h5>Rs. <?php echo $row['Price']?></h5>
                        <br>
                        
                        <?php
                    
                                    if($row['Stock']=='0')
                                    {  ?>
                                       <a href="" class="btn btn-primary">View More</a>
                                  <?php  }
                                    else
                                    {  ?>
                                       <a href="add_qty_cart.php?id=<?php echo $row['Itm_Id']?>&img=<?php echo $row['Image'] ?>&stock=<?php echo $row['Stock'] ?>" class="btn btn-primary" >View More</a>
                                   <?php }
                                  
                                ?>

                          
                        </center>
                        <br>
                        <!-- <a href="#blog" class="read">Add to Cart</a> -->
                        <!-- </div> -->
                    </div>
                </div>

                    

                <?php } } 
                else{ ?>
                    <div class="col-lg-12 col-md-12">
         
                <div class="box-wrap my-4">
                    <center>
                    <div class="icon">
                        <!-- <i class="fas fa-user-tie"></i> -->
                    </div>
                            
                           
                           <h3>No Products Available.</h3>
                           </center> 
                          
                </div>
            

           </div>
                
               <?php }?>

             
            <!--     <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                        </div>
                        <h4 class="number">02</h4>
                        <h4><a href="#url">Trust</a></h4>
                        <p>We understand your needs better than anyone else. We help you not to just choose a product but complete package including warranty of the product.</p>
                    </div>
                </div>  -->
               <!--  <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                        </div>
                        <h4 class="number">03</h4>
                        <h4><a href="#url">Experience</a></h4>
                        <p>Immersive experience is key to our brand and we bring the products close to you to ensure the experience is long lasting. With various offers, we have something for all!</p>
                    </div>
                </div> -->
            </div>
        </div>
        </div>
    </section>
    <!-- //home page service grids -->

    <!-- about block -->
    <!-- <section class="w3l-about py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 section-width pe-xl-5">
                    <h3 class="title-style">25 <span>years</span> of experience</h3>
                    <p class="mt-4">At corrupti odit At iure facere,
                        porro repellat officia quas, dolores magnam assumenda soluta odit
                        harum maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo
                        officia.</p>
                    <p class="mt-4 pb-dm-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti
                        odit? At iure facere,
                        porro repellat officia quas, dolores magnam assumenda soluta odit
                        harum.</p>
                    <a href="about.html" class="btn btn-style mt-4"> Know more about us</a>
                </div>
                <div class="col-lg-6 history-info mt-lg-0 mt-5 pt-md-4 pt-2">
                    <div class="position-relative img-border">
                        <img src="assets/images/about.jpg" class="img-fluid video-popup-image" alt="video-popup">

                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a> -->

                        <!-- dialog itself, mfp-hide class is required to make dialog hidden
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/333569091?h=9836ac4d97"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about block -->

    <!-- content block -->
    <!-- <section class="w3l-content1 py-5">
        <div class="container py-md-5 py-sm-4 py-2">
            <div class="row align-items-center py-4">
                <div class="col-lg-7">
                    <div class="bottom-info">
                        <h3 class="title-style text-white">Your <span>Choice</span>, We <span>deliver</span></h3>
                        <p class="mt-4 text-light">Lorem ipsum dolor sit amet elit. Velit beatae
                            rem ullam dolore nisi esse quasi. Integer sit amet. Lorem ipsum dolor sit
                            amet elit.</p>
                    </div>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <a href="contact.html" class="btn btn-style mt-lg-0 mt-md-5 mt-4">Book your appointment</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //content block -->

    <!-- works block -->
    <!-- <section class="w3l-how-grids-3" id="how">
        <div class="container-fluid">
            <div class="row d-grid grid-col-2 grid-element-9 px-lg-0">
                <div class="left-texthny p-lg-5 py-4">
                    <div class="left-texthny-2 p-lg-5 p-4">
                        <h3 class="title-style"><span>Our</span> Works</h3>
                        <p class="my-3 pr-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
                            hic odio consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                            laudantium rem ullam dolore nisi. Integer sit amet mattis quam.</p>
                        <a href="about.html" class="btn btn-style btn-secondary mt-4">Read More</a>
                    </div>
                </div>
                <div class="left-grid-ele-9 grid-bg1">
                </div>
            </div>
            <div class="row d-grid grid-col-3 grid-element-9 px-lg-0">
                <div class="left-grid-ele-9 grid-bg2">

                </div>
                <div class="left-texthny-3 p-lg-5 py-4 d-grid align-items-center">
                    <div class="sub-wid-grid-9 py-lg-0 py-5">
                        <i class="fas fa-child mb-4"></i>
                        <h4 class="text-grid-9"><a href="services.html">Our Designs</a></h4>
                        <p class="sub-para">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>

                    </div>
                </div>
                <div class="left-grid-ele-9 grid-bg3">

                </div>
                <div class="left-texthny-3 p-lg-5 py-4 d-grid align-items-center">
                    <div class="sub-wid-grid-9 py-lg-0 py-5">
                        <i class="fab fa-angellist mb-4"></i>
                        <h4 class="text-grid-9"><a href="services.html">New Styles</a></h4>
                        <p class="sub-para">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //works block -->

    
