<?php include 'staff1.php';


$qq="SELECT *,COUNT(`Pc_Id`) AS cc FROM `tbl_purmaster` INNER JOIN `tbl_purchild` USING(`Pm_Id`) WHERE purch_status='Pending'";
$res=select($qq);


if(isset($_GET['masterid'])){
    extract($_GET);

     $qz="SELECT * FROM `tbl_purmaster` INNER JOIN `tbl_purchild` USING(`Pm_Id`) WHERE `purch_status`='Pending'";
    $az=select($qz);
    if(sizeof($az)>0){
      foreach ($az as $row) {
        
        $pm_id=$row['Pm_Id'];
        $aq=$row['Pc_Id'];
        $item_id=$row['Itm_Id'];
        $quantity=$row['Purch_quantity'];
        $sp=$row['Selling_price'];

        $qs="UPDATE `tbl_purmaster` SET `purch_status`='Purchased' WHERE `Pm_Id`='$pm_id'";
        update($qs);
       $hi="select * from `tbl_item` where Itm_Id='$item_id' and stock='0'";
        $hlo=select($hi);
        if (sizeof($hlo)>0)
         {
           $qs1="UPDATE `tbl_item` SET `Stock`=`Stock`+'$quantity',Price='$sp' WHERE Itm_Id='$item_id'";
        update($qs1);

          $aw="update `tbl_purchild` set cpurch_status='stock added' where Pc_Id='$aq'";
          update($aw);

        }else
        {
          $a=1;
        }

}
}

}

?>
<!-- <style type="text/css">
  #ph{
    color: #fff;
  }
</style> -->


<!-- hero slider Start -->
  <!--   <div class="banner-wrap" style="height: 300px">
        <div class="banner-slider">
            <!-- hero slide start -->
           <!--  <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content"> --> -->
                        
                        <!-- <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
                            Latest<span> Phones </span>Available.</h1>
                            <div class="cta-btn" data-animation="fadeInDown" data-delay="1s">
                            <a href="about.html" class="btn btn-style btn-primary">View More</a>
                        </div> -->
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
        </div>
    </div>
    <!-- hero slider end -->



<?php 
if (isset($_POST['crt'])) 
{
    ?>



     <!-- home page service grids -->
    <section class="home-services py-3" id="services">
        <div class="container py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">Purchase <span>Cart</span></h3>
            <div class="row justify-content-center">
                <?php  if($res[0]['cc']!=0){ ?>
                  <div class="col-lg-8 col-md-8">
                <?php 

                 $qd="SELECT *,SUM(`tbl_purmaster`.`total_amt`) AS tsum FROM `tbl_purmaster` WHERE purch_status='Pending'";
                $qsd=select($qd);

                     $qt="SELECT *,`tbl_purchild`.`Purch_quantity` AS cqnty FROM `tbl_purmaster` INNER JOIN `tbl_purchild` USING(`Pm_Id`) INNER JOIN `tbl_item` USING(`Itm_Id`) INNER JOIN `tbl_subcat` USING(`Subcat_Id`) WHERE purch_status='Pending'";
                    $rs=select($qt);
                    
                    if(sizeof($rs)>0){
                        foreach($rs as $riw){
                     ?>     



                    <div class="box-wrap" style="margin-bottom: 10px">
                        <div class="icon">
                            <!-- <i class="fas fa-user-tie"></i> -->
                        </div>
                                <img style="width: 120px" src="<?php echo $riw['Image']; ?>">
                                <h4 class="number"><?php echo $riw['cqnty']; ?></h4>
                                <h4><a href="#url"><?php echo $riw['Subcat_Name']; ?> <?php echo $riw['Itm_name']; ?></a></h4>
                                <h6>Price: Rs. <?php echo $riw['Cost_Price']; ?></h6>
                    </div>
                

                <?php  }  }
                 ?>
               </div>
                 <div class="col-lg-4 col-md-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <!-- <i class="fas fa-user-tie"></i> -->
                        </div>
                        <h4 class="number"><?php if(sizeof($res)>0){ echo $res[0]['cc']; } ?></h4>
                        <h3><a href="#url">Order Summary</a></h3>
                        <br>
                        <p>Total Amount: Rs. <?php if(sizeof($qsd)>0){ echo $qsd[0]['tsum']; } ?></p>
                        <br>
                        <a href="?masterid=<?php echo $riw['Pm_Id']?>" class="btn btn-style">Purchase</a>
                    </div>
                </div>
               
<?php }

else{ ?>

        <div class="col-lg-12 col-md-12">
         
                <div class="box-wrap my-4">
                    <center>
                    <div class="icon">
                        <!-- <i class="fas fa-user-tie"></i> -->
                    </div>
                            
                           
                           <h3>Oops. Your Cart is Empty.</h3>
                           </center> 
                          
                </div>
            

           </div>

<?php }
 ?>

            
            </div>
        </div>
    </section>






    <?php
} else{
    ?>




    <!-- home services block -->
    <div class="w3l-servicesblock2 py-5" id="services">
<center>
        <h1 style="margin-bottom: 20px;">Item Purchase</h1>
        <form method="post">
            <a href="staff_view_purch.php"><input type="button" value="Purchase Details" class="btn btn-dark" style="margin-left: 1165px"></a>
            <input type="submit" name="crt" value="Purchase Cart" class="btn btn-primary" style="margin-left: 15px">
        </form>
        <br>
        
        <table class="table table-striped" style="width:1450px">
            <tr>
                <th>Sl No.</th>
                <th>Product Name</th>
                <th>Sub Category</th>
                <th>Stock</th>
                <th>Purchase</th>
            </tr>

<?php 
            $q="SELECT * FROM `tbl_item` INNER JOIN  `tbl_subcat` USING(`Subcat_Id`) WHERE Status='1'";
            $re=select($q);
            // print_r($re);
            if(sizeof($re)>0){
                $i=1;
                foreach ($re as $row) { ?>

                 <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['Itm_name']; ?></td>
                    <td><?php echo $row['Subcat_Name']; ?></td>
                    <td><?php echo $row['Stock']; ?></td>
                    <td><a href="staff_purchase_item.php?item_id=<?php echo $row['Itm_Id'] ?>" class="btn btn-primary btn-md">Purchase</a></td>
                <?php } ?>
                </tr>

                
    <?php        }
        
 ?>
           
        </table>

    </center>
    </div>
    <?php 
}
?>
    <!-- //home services block -->

