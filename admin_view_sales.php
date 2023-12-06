<?php include 'a_header.php';
function dateDiffInDays($date1, $date2) { 
    
    // Calculating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
  
    // 1 day = 24 hours   
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400)); 
} 

if (isset($_GET['cart_mid']))
{
   extract($_GET);
    echo$c="UPDATE `tbl_mastcart` SET `cart_status` ='Paid' WHERE `mastcart_id`='$cart_mid'";
   $d=update($c);
   echo$myq="UPDATE `tbl_courier`  SET `Courier_Status`='0' WHERE `Username`='$Username'";
   $myres=update($myq);
 $jj="delete from tbl_delivery where Delivery_Id='$deli'";
 delete($jj);
  echo$myqrr="UPDATE `login`  SET `status`='0' WHERE `Username`='$Username'";
   $myresss=update($myqrr);
    alert('updated successfully');
    return redirect('admin_view_sales.php');

 }


?>


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 200px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <!-- <h1>Powerful Digital Solutions With Gp<span>.</span></h1> -->
          <!-- <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Sales Details..</h1> -->
        </div>
      </div>

     

    </div>
  </section><!-- End Hero -->

  <main id="main">


    
 <!-- ======= Team Section ======= -->

<section class="h-100 " style="background-color: lightgray;">

   <!-- <h5 align="center"><a class="btn btn-danger" href="admin_manage_purchase.php">Sales Report</a></h5> -->
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Sales Details</h5>
          </div>
          
            <!-- Single item -->
           
            <?php 
                    $q="SELECT *,`tbl_mastcart`.`cart_status` AS ostatus,tbl_item.Image as myimg FROM `tbl_order` INNER JOIN `tbl_mastcart` USING(`mastcart_id`) INNER JOIN `tbl_childcart` USING(`mastcart_Id`) INNER JOIN `tbl_payment` USING(`order_id`) INNER JOIN `tbl_item` USING(`Itm_Id`)  INNER JOIN `tbl_subcat` USING(`Subcat_Id`) INNER JOIN `tbl_cat` USING(`Cat_Id`) INNER JOIN `tbl_customer` ON `tbl_mastcart`.`Cust_Id` = `tbl_customer`.`Cust_Id` WHERE `tbl_mastcart`.`cart_status` !='Pending' ORDER BY `added_date` DESC";
                   $res1=select($q);
                   
                    if(sizeof($res1)>0){
                      // $myomif=$res1[0]['mastcart_id'];
                        $i=0;
                        foreach($res1 as $row){ 
                          $myomif=$row['mastcart_id'];
                          ?>  
                        <div class="card-body">
                         <div class="row"> 
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="<?php echo $row['myimg']; ?>"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Customer Name:<?php echo $row['Cust_Fname']; ?> <?php echo $row['Cust_Lname']; ?></strong></p>
                <p><strong><?php echo $row['Itm_name']; ?></strong></p>
                <p>Category: <?php echo $row['Cat_Name']; ?></p>
                <p>Sub Category: <?php echo $row['Subcat_Name']; ?></p>
                <!-- <a type="button" href="?remove_item=<?php echo $row['item_id']; ?>&cart_mid=<?php echo $row['cart_mid']; ?>&amount=<?php echo $row['amount']; ?>" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                title="Remove item">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a> -->
                <!-- <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                title="Move to the wish list">
                <i class="fas fa-heart"></i>
                </button> -->
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <form action="" method="post">
                <div class="d-flex mb-4" style="max-width: 300px">
                <input type="hidden" name="cart_mid<?php echo $i; ?>" value="<?php echo $row['mastcart_id'];?>"></td>
                <input type="hidden" name="item_id<?php echo $i; ?>" value="<?php echo $row['Itm_Id'];?>"></td>
                <input type="hidden" name="cart_cid<?php echo $i; ?>" value="<?php echo $row['childcart_Id'];?>"></td>
                <input type="hidden" name="rate<?php echo $i; ?>" value="<?php echo $row['child_totamt'];?>"></td>
                  <!-- <input type="submit"  value="-" name="minus<?php echo $i; ?>" class="btn btn-primary px-3 me-2" 
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> -->
       
                  <div class="form-outline">
                    <input id="form1" min="1" readonly name="quantity<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <!-- <input type="submit" value="+" name="add_item<?php echo $i; ?>" class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> -->
                  
                </div>
                </form>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>₹<?php echo $row['tot_amount']; ?></strong>
                </p>
                <p class="text-start text-md-center">
                  <strong><?php echo $row['ostatus']; ?></strong>
                </p>
                <?php 
                    if($row['ostatus']=="Paid"){ ?>
                        <p class="text-start text-md-center">
                        <strong><a href="admin_assign_to_courire_service.php?cart_mid=<?php echo $row['mastcart_id']; ?>&Cust_Id=<?php echo $row['Cust_Id']; ?>&order_id=<?php echo $row['order_id'] ?>">Assign To Courier Service</a></strong>
                        </p>


                <?php    }

                 
                 elseif($row['reachable']=="Unreachable" )
                 { 

                    $klp="select * from tbl_delivery inner join tbl_order using(mastcart_id) where mastcart_id='$myomif'";
                    $ttrr=select($klp);

                  ?>
                        <td><p class="text-start text-md-center">
                        <strong><a class='btn btn-success' href="admin_assign_to_courire_service.php?cart_mid=<?php echo $row['mastcart_id']; ?>&Cust_Id=<?php echo $row['Cust_Id']; ?>&pay=<?php echo $row['Paym_Id'] ?>&order_id=<?php echo $row['order_id'] ?>&dele=<?php echo $ttrr[0]['Delivery_Id'] ?>&c_id=<?php echo $ttrr[0]['Courier_Id'] ?> ">Reassign</a></strong>
                        </p></td>
                       

               <?php    }
                 else 
                 {
                ?>

                                               <?php
 $myqry = "SELECT *,`tbl_courier`.`Username` AS mycourier FROM `tbl_courier` inner join `tbl_delivery` using(`Courier_Id`)INNER JOIN `tbl_mastcart` USING(`mastcart_id`) INNER JOIN tbl_customer USING(Cust_Id) WHERE `tbl_mastcart`.`cart_status` ='Assigned To Courier' and mastcart_id='$myomif' ORDER BY `expected_date` DESC";
$myval = select($myqry);
$currentDate = date('Y-m-d'); // Get the current date
// foreach($myval as $myrow){
if (sizeof($myval)>0) {
  $mid=$myval[0]['mastcart_id'];
  $cart_status=$row['ostatus'];
  $Cust_Id=$myval[0]['Cust_Id'];
  $Delivery_Id=$myval[0]['Delivery_Id'];
  $my_date=$myval[0]['Cassign_Date'];
  $expected_date=$myval[0]['expected_date'];

  $mycourier=$myval[0]['mycourier'];
  ($expected_date);
  ("yess");
  ($currentDate);
  ("yess"); 
  $interval=dateDiffInDays($expected_date,$currentDate);  
  ("yess");
  ($interval);
  if ((date('Y-m-d', strtotime($expected_date)) < $currentDate) and ($cart_status!="Order Delivered")) 
  {
     ("yess");
      "Expected Date: " . date('Y-m-d', strtotime($expected_date)) . "<br>";
     "Current Date: " . $currentDate . "<br>"; 
  
  
    // if (date('Y-m-d', strtotime($myval[0]['expected_date'])) == $currentDate) {
        ?>
   <!--      <p class="text-start text-md-center">
            <strong><a href="?cart_mid=<?php echo $myrow['mastcart_id']; ?>&deli=<?php  echo $myrow['Delivery_Id'] ?>&Username=<?php echo $myrow['mycourier']; ?>&Cust_Id=<?php echo $myrow['Cust_Id']; ?>">Resign</a></strong>
        </p>   -->  
            <p class="text-start text-md-center">
            <strong><a href="?cart_mid=<?php echo $mid; ?>&deli=<?php  echo $Delivery_Id; ?>&Username=<?php echo $mycourier; ?>&Cust_Id=<?php echo $Cust_Id; ?>">Resign</a></strong>
        </p>
        <?php
}
}
}
?>

          
              </div>
             
                </div>
                <hr class="my-4" />

        
</div>
                <?php     } 
              }
              ?>
           
            <!-- Single item -->

           
        </div>
       
      </div>
      
    </div>
  </div>
</section>

<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
