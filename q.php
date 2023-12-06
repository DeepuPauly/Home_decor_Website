<?php include 'courier_header.php';

extract($_GET);

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
                $q="SELECT *,tbl_mastcart.`cart_status` AS cstatus FROM `tbl_payment` INNER JOIN `tbl_order` USING(`order_id`) INNER JOIN `tbl_mastcart` USING(`mastcart_id`) INNER JOIN `tbl_customer` ON `tbl_mastcart`.`Cust_Id` = `tbl_customer`.`Cust_Id` INNER JOIN `tbl_delivery` USING(`mastcart_id`) INNER JOIN `tbl_childcart`USING(`mastcart_Id`)INNER JOIN `tbl_item`USING(`Itm_Id`) WHERE (`tbl_mastcart`.`cart_status` ='Assigned To Courier' OR `tbl_mastcart`.`cart_status` ='Order Pick Up') AND `Courier_Id`='$csid' and `tbl_customer`.Cust_Id='$cust_id' and Delivery_Id='$req' ORDER BY `order_date` DESC";
                $res11=select($q);
                $i=1;
                foreach ($res11 as $row) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box" style="width: 1500px; background-color: #f0f0f0; border: 1px solid #ccc; padding: 20px; margin: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <!-- Card content here -->
                        <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                        <h4><a href="">Product Details</a></h4>
                        <h6>Product Name : <?php echo $row['Itm_name'] ?> </h6>
                        <p>Price : <?php echo $row['Price'] ?></p>
                        <p> <img src="<?php  echo $row['Image'] ?>" width="100" height="100">  </p>
                        <p>Quantity : <?php echo $row['quantity'] ?></p>
                       
                        
                    </div>
                </div>
                <?php } ?>

            </div>

        </div>
    </section><!-- End Services Section -->
    </center>


    <?php include 'footer.php'; ?>