<?php include 'courier_header.php';
$csid=$_SESSION['courier_id'];
if(isset($_GET['pickup'])) 
{  
  extract($_GET);
  echo$q1="UPDATE `tbl_mastcart` SET `cart_status`='Order Pick Up' WHERE `mastcart_id`='$pickup'";
  update($q1);
  alert("Order Successfully Picked Up");
 return redirect("courier_view_assigned_orders.php");

}
if(isset($_GET['delivered'])) 
{  
  extract($_GET);
  $q1="UPDATE `tbl_mastcart` SET `cart_status`='Order Delivered' WHERE `mastcart_id`='$delivered'";
  update($q1);
  // $qq="INSERT INTO `tbl_delivery` VALUES(NULL,'$payment_id',CURDATE())";
  // insert($qq);
  alert("Order Successfully Delivered");
 return redirect("courier_view_assigned_orders.php");

}
?>


<!-- hero slider Start -->
<div class="banner-wrap" style="height: 300px">
    <div class="banner-slider">
        <!-- hero slide start -->
        <div class="banner-slide bg1">
            <div class="container">
                <div class="hero-content">
                    
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <!-- hero slide end -->
    </div>
</div>
<!-- hero slider end -->

<center>
<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
<center>
            <div class="section-title">
                <h2>Assigned Orders</h2>
            </div>
            </center>

            <div class="row">

                <?php 
                $q="SELECT *,tbl_mastcart.`cart_status` AS cstatus FROM `tbl_payment` INNER JOIN `tbl_order` USING(`order_id`) INNER JOIN `tbl_mastcart` USING(`mastcart_id`) INNER JOIN `tbl_customer` ON `tbl_mastcart`.`Cust_Id` = `tbl_customer`.`Cust_Id` INNER JOIN `tbl_delivery` USING(`mastcart_id`) WHERE (`tbl_mastcart`.`cart_status` ='Assigned To Courier' OR `tbl_mastcart`.`cart_status` ='Order Pick Up') AND `Courier_Id`='$csid' ORDER BY `order_date` DESC";
                $res11=select($q);
                $i=1;
                foreach ($res11 as $row) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box" style="width: 1500px; background-color: #f0f0f0; border: 1px solid #ccc; padding: 20px; margin: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <!-- Card content here -->
                        <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                        <h4><a href="">Delivery Details</a></h4>
                        <h6>Customer Name : <?php echo $row['Cust_Fname'] ?> <?php echo $row['Cust_Lname'] ?></h6>
                        <p>City : <?php echo $row['Cust_City'] ?></p>
                        <p>District : <?php echo $row['Cust_Dist'] ?></p>
                        <p>Pincode : <?php echo $row['Cust_Pin'] ?></p>
                        <p>Phone : <?php echo $row['Cust_Phone'] ?></p>
                        <!-- <p>item name : <?php echo $row['Itm_name'] ?></p> -->
                        <p><?php echo $row['cstatus'] ?></p>
                        <?php 
                            if($row['cstatus']=="Assigned To Courier"){ ?>
                                <p><a href="?pickup=<?php echo $row['mastcart_id']; ?>&payment_id=<?php echo $row['Paym_Id']; ?>" class="btn btn-warning">Order Pick Up</a></p>
                            <?php }
                            else if($row['cstatus']=="Order Pick Up"){ ?>
                                <p><a href="?delivered=<?php echo $row['mastcart_id']; ?>&payment_id=<?php echo $row['Paym_Id']; ?>" class="btn btn-warning">Order Delivered</a></p>
                        <?php    }

                        ?>
                    </div>
                </div>
                <?php } ?>

            </div>

        </div>
    </section><!-- End Services Section -->
    </center>


    <?php include 'footer.php' ?>