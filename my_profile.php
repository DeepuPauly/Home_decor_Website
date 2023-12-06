<?php include 'customerheader.php'; 
extract($_GET);
 $cid=$_SESSION['cust_id'];
?>

<?php 
$q="SELECT * FROM `tbl_customer` WHERE cust_id='$cid'";
$res=select($q);

?>



<div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <br>
                        <br>
                        <center>
                        <h1 style="font-size: 50px;opacity: 0.8;">My Profile</h1> 
                        </center>
                        
                        <br>
                        <h3 style="font-size: 18px;">Name</h3>
                        <h3 style="font-size: 25px;color: #DFB163;">
                            <?php echo $res[0]['Username']; ?> <?php echo $res[0]['Cust_Fname']; ?> <?php echo $res[0]['Cust_Lname']; ?> 
                        </h3>
                        <br>
                    
                        <h3 style="font-size: 18px;">Address</h3>
                        <h3 style="font-size: 25px;color: #DFB163;">
                            <?php echo $res[0]['Cust_address']; ?>, <?php echo $res[0]['Cust_City']; ?>, <?php echo $res[0]['Cust_Dist']; ?>, <?php echo $res[0]['Cust_Pin']; ?> 
                        </h3>
                        <br>
                        
                        <h3 style="font-size: 18px;">Date of Birth</h3>
                        <h3 style="font-size: 25px;color: #DFB163;">
                            <?php echo $res[0]['Cust_Dob']; ?>  
                        </h3>
                        <br>
                        <h3 style="font-size: 18px;">Gender</h3>
                        <h3 style="font-size: 25px;color: #DFB163;">
                            <?php echo $res[0]['Gender']; ?> 
                        </h3>
                        <br>
                        <br>
                       <!--  <form method="post">
                            <a href="edit_profile.php" class="btn btn-style" style="opacity: 0.8;">Edit Profile
                            </a>
                        </form> -->
                        
                        

                        <!-- <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
                            Latest<span> Phones </span>Available.</h1>
                            <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                            <a href="about.html" class="btn btn-style btn-primary">View More</a>
                        </div> -->
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
         

        
