

<?php include 'connection.php';
if (isset($_GET['u_id'])) 
{
  extract($_GET);
  $a="select * from tbl_vendor where Ven_Id='$u_id'";
  $b=select($a);
}
if (isset($_POST['submit'])) 
{
  extract($_POST);
   $c="update tbl_vendor set Ven_Name='$name',Ven_Email='$email',Ven_City='$city',Ven_Dist='$dist',Ven_Pin='$pin',Ven_Phone='$phone',Status='$status' where Ven_Id='$u_id'";

   $d=update($c);
   alert('updated successfully');
   return redirect('admin_view_vendor.php');

 } 

  if (isset($_GET['a_id'])) 
 {
   extract($_GET);
  $e="update tbl_vendor set Status='1' where Ven_Id='$a_id'";
  update($e);
   alert('updated successfully');
  return redirect('admin_view_vendor.php');
 }

  if (isset($_GET['i_id'])) 
 {
   extract($_GET);
  $iss="update tbl_vendor set Vendor_Status='0' where Vendor_Id='$i_id'";
  update($iss);
   alert('updated successfully');
    return redirect('adminviewvendor.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

</body>
</html>
<center>
  <h1>Vendor Details</h1>
    

<table class="table" border="2">
  <tr>
    <th>Sl.NO</th>
    <th>Staff Name</th>
    <th>Vendor Name</th>
    <th>Email Id</th>
    <th>City</th>
   
    <th>City</th>
    <th>District</th>
    <th>Pincode</th>
     <th>Phone Number</th>
    <th>Status</th>
  </tr>
  <?php
  $hanna = "SELECT 
               `tbl_staff`.`Staff_Fname`,
               `tbl_vendor`.`Ven_Name`,
               `tbl_vendor`.`Ven_Email`,
               `tbl_vendor`.`V_Phno`,
               `tbl_vendor`.`V_City`,
               `tbl_vendor`.`V_Street`,
               `tbl_vendor`.`V_Dist`,
               `tbl_vendor`.`V_Pin`,
               `tbl_vendor`.`Vendor_Status`,
               `tbl_vendor`.`Vendor_Id`
           FROM `tbl_staff`
           INNER JOIN `tbl_vendor` ON `tbl_staff`.`Staff_Id` = `tbl_vendor`.`Staff_Id`";
  $hasna = select($hanna);
  $slno = 1;

  foreach ($hasna as $key) {
  ?>
    <tr>
      <td><?php echo $slno++ ?></td>
      <td><?php echo $key['Staff_Fname'] ?></td>
      <td><?php echo $key['Ven_name'] ?></td>
      <td><?php echo $key['Vendor_email'] ?></td>
      <td><?php echo $key['Ven_Phno'] ?></td>
      <td><?php echo $key['Ven_City'] ?></td>
      <td><?php echo $key['Ven_Street'] ?></td>
      <td><?php echo $key['Ven_Dist'] ?></td>
      <td><?php echo $key['Ven_Pin'] ?></td>
      <td><?php echo $key['Status'] ?></td>
      <?php if ($key['Status'] == '0') { ?>
        <td>
          <a href="?a_id=<?php echo $key['Ven_Id'] ?>">
            <button type="button" class="btn">Active</button>
          </a>
        </td>
      <?php } elseif ($key['Status'] == '1') { ?>
        <td>
          <a href="?i_id=<?php echo $key['Ven_Id'] ?>">
            <button type="button" class="btn">Inactive</button>
          </a>
        </td>
      <?php } ?>
      <td>
        <a href="?u_id=<?php echo $key['Ven_Id'] ?>">
          <button type="button" class="btn">Update</button>
        </a>
      </td>
    </tr>
  <?php } ?>
</table>



   </center>
adminviewvendor.php