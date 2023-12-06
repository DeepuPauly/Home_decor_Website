<?php include 'a_header.php';
extract($_GET); 
// $my=$Cust_Id;

if(isset($_GET['assign'])) 
{
  extract($_GET);
  $qq="UPDATE `tbl_mastcart` SET `cart_status`='Assigned To Courier' WHERE `mastcart_id`='$cart_mid'";
  update($qq);
  $qr="INSERT INTO `tbl_delivery` VALUES (NULL,curdate(),'$cart_mid','$assign', DATE_ADD(CURDATE(), INTERVAL 7 DAY))";
  insert($qr);
  $hq="insert into tbl_cassign values(null,'$cart_mid','$assign',CURDATE())";
  insert($hq);
  alert("Successfully Assigned");
   
 return redirect("admin_view_sales.php");

}if(isset($_GET['unassign'])) 
{
  extract($_GET);
  $rr="insert into tbl_courier_assign values(null,'$unassign','$cart_mid',curdate())";
  insert($rr);
$qqq="update tbl_payment set courier_id='$unassign' where Paym_Id='$payment_id'";
update($qqq);
$qq="update tbl_mastcart set cart_status='Assigned To Courier' where mastcart_id='$cart_mid'";
  update($qq);
  $fc="insert into tbl_delivery values(null,curdate(),'$cart_mid','$unassign',DATE_ADD(CURDATE(), INTERVAL 7 DAY))";
  insert($fc);
  $ggh="update tbl_order set reachable=0 where order_id='$order_id'";
  update($ggh);
 $kkl="delete from tbl_delivery where Courier_Id='$c_id' and Delivery_Id='$dele'";
  delete($kkl);
  alert("Successfully Assigned");
   
 return redirect("admin_view_sales.php"); 

}
 ?>

 
<!-- ======= Hero Section ======= -->
<!-- <section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;"> -->
    <!-- <div class="container" data-aos="fade-up"> -->

      <!-- <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150"> -->
        <!-- <div class="col-xl-6 col-lg-8"> -->
        <!-- <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Courier Details..</h1> -->



<!-- </div>
      </div>
    </div>
  </section> --><!-- End Hero -->

  <main id="main">

<br>
<center>
 <!-- <h4>Courier Details</h4> -->


<?php  
$ggg="select * from tbl_order inner join tbl_delivery using(mastcart_id) where order_id='$order_id' and reachable='Unreachable'";
$re=select($ggg);
if (sizeof($re)>0) 
{
  $c_id=$re[0]['Courier_Id'];
  $hh="select * from tbl_courier where Courier_Id!='$c_id'";
  $ree=select($hh);
  if (sizeof($ree)>0) 
  {
    ?>

<table class="table" style="width: 1300px">
    <tr>
      <th>SLNO</th>
      <th>NAME</th>
      <th>MOBILE NUMBER</th>
      <th>LOCATION</th>    
    </tr> 
  
       
    </tr>

    <?php 


      $q=" SELECT * FROM tbl_courier where Courier_Status='1' and Courier_Id!='$c_id' ";
      $res11=select($q);
      $slno=1;
      
        foreach ($res11 as $row) { ?>
          <tr>
            <td><?php echo $slno++ ?></td>
            <td><?php echo $row['C_Name']; ?></td>
            <td><?php echo $row['C_Phone']; ?></td>
            <td><?php echo $row['C_Street']; ?> <?php echo $row['C_City']; ?></td>
          <!--   <td><?php echo $row['courier_address']; ?></td> -->
                        <td><a href="?unassign=<?php echo $row['Courier_Id']?>&c_id=<?php echo $c_id; ?>&order_id=<?php echo $order_id ?>&payment_id=<?php echo $pay;?>&cart_mid=<?php echo $cart_mid; ?>&dele=<?php echo $dele ?>" class="btn btn-success">Assign</a></td>
  
                        </tr>
          
      <?php }
      
     ?>
  </table>





  <?php }
}
else
{



?> 

  <table class="table" style="width: 1300px">
    <tr>
      <th>SLNO</th>
      <th>NAME</th>
      <th>MOBILE NUMBER</th>
      <th>LOCATION</th>    
    </tr> 
	
		   
		</tr>

		<?php 
			$q=" SELECT * FROM `tbl_courier` where Courier_Status='1'";
			$res11=select($q);
      $slno=1;
			
				foreach ($res11 as $row) { ?>
					<tr>
            <td><?php echo $slno++ ?></td>
						<td><?php echo $row['C_Name']; ?>  </td>
						<td><?php echo $row['C_Phone']; ?></td>
						<td><?php echo $row['C_Street']; ?> <?php echo $row['C_City']; ?></td>
                        <td><a href="?assign=<?php echo $row['Courier_Id']?>&cart_mid=<?php echo $cart_mid; ?>&Cust_Id=<?php echo $Cust_Id; ?>" class="btn btn-success">Assign</a></td>
	
                        </tr>
					
			<?php	}
    }
			
		 ?>
	</table>
</center>
<?php include 'footer.php'; ?>