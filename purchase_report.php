<?php include 'a_header.php';
 $r=$_SESSION['res'];
extract($_GET);
?>


<?php 

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
    <title>Home Decor</title>
    <div id="div_print" >

    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body onload="printDiv()" style="height: 100%;width:100%">

    <main>
      <h2 align="center" style="opacity:0.6;margin-bottom: 20px;margin-top: 10px;">INVOICE</h2>
      <table>
        <thead>
          <tr>
            <th class="service">SLNO.</th>
            <th>TIME:</th>
            <th class="desc">ITEM NAME</th>
            <th>VENDOR NAME</th>
            <th>QUANTITY</th>
            <th>UNIT PRICE</th>
            
            <th>PURCHASE DATE</th>
          </tr>
        </thead>
        <tbody>
        <?php 
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d');
$q="SELECT *,`tbl_purchild`.`Purch_quantity` AS cqnty FROM `tbl_purmaster` INNER JOIN `tbl_purchild` USING(`Pm_Id`) INNER JOIN `tbl_vendor` USING(`Ven_Id`) INNER JOIN `tbl_item` USING(`Itm_Id`) INNER JOIN `tbl_subcat` USING(`Subcat_Id`) WHERE purch_status!='Pending'";
$res=select($q);
     $slno=1;

    foreach ($res as $row) {
      ?>
       <tr>
         <td><?php echo $slno++; ?></td>
         <td><div><span></span> <?php echo date("H:i:s"); ?></div></td>
        <td><?php echo $row['Itm_name'] ?></td> 
        <td><?php echo $row['Ven_Name'] ?></td>
        <td><?php echo $row['Purch_quantity'] ?></td>
        <td><?php echo $row['Cost_Price'] ?></td>
        
        <td><?php echo $row['Pm_Date'] ?></td>
     <?php
       }
       
     ?>
     <?php 
     if(sizeof($res)>0)
     { ?>
       <tr><th colspan='4'>Total:</th><th> Rs. <?php echo $row['total_amt'] ?> </th></tr>
     <?php } ?>
     
          
        </tbody>
      </table>
    
    <a href="admin_manage_purchase.php" class="btn btn-primary">Back</a>
    </main>
    
  </body>
</html>

<style type="text/css">
  .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: center;
}

table td {
  padding: 20px;
  text-align: center;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
</style>