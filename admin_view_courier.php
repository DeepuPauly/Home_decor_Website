

<?php include 'a_header.php';
if (isset($_GET['u_id'])) 
{
  extract($_GET);
  $a="select * from tbl_courier where Courier_Id='$u_id'";
  $b=select($a);
}
if (isset($_POST['submit'])) 
{
   extract($_POST);
   $c="update tbl_courier set C_Name='$name',C_Phone='$phone',C_City='$city',C_Street='$street',C_Dist='$dist',C_Pin='$pin',Courier_Status='$status' where Courier_Id='$u_id'";

   $d=update($c);
   alert('updated successfully');
   return redirect('admin_view_courier.php');

 } 
if (isset($_GET['a_id'])) 
{
  extract($_GET);
 $e="update tbl_courier set Courier_Status='1' where Courier_Id='$a_id'";
 update($e);
 echo$k="update login set `status`='1' where Username='$oo' ";
 update($k);
  alert('updated successfully');
 return redirect('admin_view_courier.php');
}

 if (isset($_GET['i_id'])) 
{
  extract($_GET);
 $iss="update tbl_courier set Courier_Status='0' where Courier_Id='$i_id'";
 update($iss);
 echo$kk="update login set `status`='0' where Username='$llid' ";
 update($kk);
 echo$Qr="SELECT * FROM `tbl_delivery` WHERE `Courier_Id`='$i_id'";
 $val=select($Qr);
 if (sizeof($val)>0)
 {
  echo$mymaster=$val[0]['mastcart_id'];
  echo$my="UPDATE `tbl_mastcart` SET `cart_status`='Paid' WHERE `mastcart_id`='$mymaster'";
  update($my);
 }
  alert('updated successfully');
   return redirect('admin_view_courier.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <style>
        /* Add CSS styles to the table */
        table {
            width: 100%;
            height: 400px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color:   #FFFFE0;
            color: black;
        }

       /* tr:nth-child(even) {
            background-color: #f2f2f2;
        }*/

        tr:hover {
            background-color: #ddd;
        }

        /* Add some margin and padding to the page */
        body {
          background-image: url(bg2.jpg);
            margin: 20px;
            padding: 20px;
        }
    </style>
  
</head>
<body>

</body>
</html>
<center>

   <?php 

if (isset($_GET['u_id'])) 
{ ?>

  <form method="POST">
    <table>
      <tr>
        <th>Name</th>
        <td><input type="text" name="name" value="<?php echo $b[0]['C_Name'] ?>" ></td>
      </tr>
      <tr>
        <th>Phone Number</th>
        <td><input type="text" name="phone" value="<?php echo $b[0]['C_Phone'] ?>"></td>
      </tr>
      <tr>
      <th>City</th>
        <td><input type="text" name="city" value="<?php echo $b[0]['C_City'] ?>"></td>
      </tr>
      <tr>
      <th>Street</th>
        <td><input type="text" name="street" value="<?php echo $b[0]['C_Street'] ?>"></td>
      </tr>
      <tr>
        <th>District</th>
        <td><input type="text" name="dist" value="<?php echo $b[0]['C_Dist'] ?>"></td>
      </tr>
      <tr>
        <th>Pincode</th>
        <td><input type="text" name="pin" value="<?php echo $b[0]['C_Pin'] ?>"></td>
      </tr>
      <tr>
      <th>Status</th>
        <td><input type="text" name="status" value="<?php echo $b[0]['Courier_Status'] ?>"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>


<?php }

   ?> 
   <br><br><br>  
  <h1>Courier Details</h1>
      <table class="table" border="2">
        <tr>
          <th>Sl.NO</th>
        <th>Staff Name</th>
         <th>Username</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>City</th>
        <th>Street</th>
        <th>District</th>
        <th>Pincode</th>
         <th>Status</th>
         <th>Update</th>
            </tr>

      <?php
      $hanna="SELECT `Staff_Id`,`Courier_Id`,`tbl_courier`.`Username`,`C_Name`,`C_City`,`C_Dist`,`C_Pin`,`C_Street`,`C_Phone`,`Courier_Status`,`Stf_Fname`FROM `tbl_courier` INNER JOIN `tbl_staff`USING(`Staff_Id`) WHERE`Staff_Id`!='' UNION SELECT '0',`Courier_Id`,`tbl_courier`.`Username`,`C_Name`,`C_City`,`C_Dist`,`C_Pin`,`C_Street`,`C_Phone`,`Courier_Status`,NULL AS `Stf_Fname`FROM `tbl_courier` WHERE `Staff_Id`=''";
      $hasna=select($hanna);
      $slno=1;

      foreach ($hasna as $key ) {

       ?>


       <tr>
         
         <td> <?php echo $slno++ ?></td>
          <td> <?php echo $key['Stf_Fname'] ?></td>
         <td> <?php echo $key['Username'] ?></td>
           <td> <?php echo $key['C_Name'] ?></td>
           <td> <?php echo $key['C_Phone'] ?></td>
             <td> <?php echo $key['C_City'] ?></td>
               <td> <?php echo $key['C_Street'] ?></td>
                 <td> <?php echo $key['C_Dist'] ?></td>
                  <td> <?php echo $key['C_Pin'] ?></td>
                  
                   <?php if ($key['Courier_Status'] == '0'){?>
                  <td><a href="?a_id=<?php echo $key['Courier_Id'] ?> &oo=<?php echo $key['Username'] ?>">Active</a></td>
                <?php } elseif ($key['Courier_Status'] == '1') {
                   ?>
                  <td><a href="?i_id=<?php echo $key['Courier_Id'] ?> &llid=<?php echo $key['Username'] ?>">Inactive</a></td>
                <?php } ?>
                  <td><a href="?u_id=<?php echo $key['Courier_Id'] ?>">Update</a></td>

                 
              






       </tr>
            <?php } ?>

      </table>


   </center>