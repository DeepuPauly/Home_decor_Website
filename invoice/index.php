
<?php 
session_start();

error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d');
$con=mysqli_connect("localhost","root","","flowerbouquet");
// Start the session
 $cid=$_SESSION['sid'];

 $sel="select * from tbl_customer where id='$cid'";
 $res=mysqli_query($con,$sel);
 $row=mysqli_fetch_array($res);
extract($_GET);
 ?>
<script> 
    function printDiv() { 
      var divContents = document.getElementById("div_print").innerHTML; 
      var a = window.open('', '', 'height=500, width=500'); 
      a.document.write(divContents); 
      a.document.close(); 
      a.print(); 
    } 
  </script> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>online flowerbouquet shop</title>
    <div id="div_print" >

    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body onload="printDiv()">

    <header class="clearfix">
      <div id="logo">
        <img src="new.png">
      </div>
      <h1>FLORISTA BOUQUETS</h1>
      <div id="company" class="clearfix">
        <div>Customer Name</div>
        <div> <?php  echo $row['cust_fname'];?><br />               
     </div>
      </div>
      <div id="project">
        <!-- <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div> -->
        <div><span>ADDRESS</span>  MG road,Ernakulam  </div>
        <div><span>EMAIL</span> floristabouquets@gmail.com</div>
        <div><span>PHONE:NO</span> +916745328976</div>
        <div><span>DATE</span>                  </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">NO</th>
            <th class="desc">PRODUCT</th>
            <th>DATE</th>

            <th>QTY</th>
            <th>AMOUNT</th>
          </tr>
        </thead>
        <tbody>
        <?php 
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d');
$q="select * from tbl_order where customer_id='$_SESSION[sid]' and order_date='$date' and payment='pay by cash' and status='order'";
//echo $q;
     $res=mysqli_query($con,$q);
     $slno=1;

    foreach ($res as $row) {
      
      $q2="select * from tbl_customer where id='$_SESSION[sid]'";
//echo $q;
     $res2=mysqli_query($con,$q2);
      $r=mysqli_fetch_array($res2);
      $q3="select * from tbl_item where id='$row[item_id]'";
//echo $q;
     $res3=mysqli_query($con,$q3);
      $r1=mysqli_fetch_array($res3);
      $match1="SELECT * from tbl_order WHERE customer_id='$_SESSION[sid]' and status='order'";
	$qry1 = mysqli_query($con,$match1);
			$mi="SELECT * FROM tbl_item WHERE id='$row[item_id]'";
	$qi = mysqli_query($con,$mi);
	$ri=mysqli_fetch_array($qi);
			$mii="SELECT * FROM tbl_customer WHERE id='$row[customer_id]'";
	$qii = mysqli_query($con,$mii);
	$rii=mysqli_fetch_array($qii);
		    $did=$row['id'];
         $ttt= $row["order_total"]*$row["order_qty"];
         $ttp= $row['order_total'];
         $tot=$tot+$ttp;
      ?>
         <tr >
        <td><?php echo $slno++; ?></td>
        <td><?php echo $r1['item_name'] ?></td> 
        <!-- <td><?php //echo $row['Tot_Amount'] ?></td> -->
        <td><?php echo $row['order_date'] ?></td>
        <td><?php echo $row['order_qty'] ?></td>
      
        <td><?php echo $row['order_total'] ?></td>
     <?php
       }
       
     ?>
     <tr><th colspan='5'>Total:</th><th><?php echo $tot ?> RS</th></tr>
          
        </tbody>
      </table>
      <div id="notices">
        <div>Authorised signature</div>
        <div class="notice"></div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid seal.
    </footer>
  </body>
</html>