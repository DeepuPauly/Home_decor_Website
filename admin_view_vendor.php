<?php include 'a_header.php';

extract($_GET);
$staff_id=$_SESSION['Staff_id'];



if (isset($_GET['u_id']))
{
  extract($_GET);
  $a="select * from tbl_vendor where Ven_Id='$u_id'";
  $b=select($a);
}
if (isset($_POST['submit']))
{
   extract($_POST);
    $c="update tbl_vendor set Ven_Name='$fname',Ven_Email='$email',Ven_City='$City',Ven_Dist='$District',Ven_Pin='$Pincode',Ven_Phone='$phone',Status='$status' where Ven_Id='$u_id'";

   $d=update($c);
    alert('updated successfully');
    return redirect('admin_view_vendor.php');

 }
 
 if (isset($_GET['a_id']))
{
   extract($_GET);
    $f="update tbl_vendor set Status='1' where Ven_Id='$a_id'";

   update($f);
    alert('updated successfully');
    return redirect('admin_view_vendor.php');

 }


 if (isset($_GET['i_id']))
{
   extract($_GET);
    $e="update  tbl_vendor set Status='0' where Ven_Id='$i_id'";

   update($e);
    alert('updated successfully');
    return redirect('admin_view_vendor.php');

 }




?>
<!DOCTYPE html>
<html>
<head>
  <style>
        /* Add CSS styles to the table */
        table {
            width: 100%;
            height:400px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color:  #FFFFE0;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Add some margin and padding to the page */
        body {
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>
<center>
  <?php
if (isset($_GET['u_id']))
{ ?>

  <form method="POST">
    <table>
      <tr>
        <th>Firstname</th>
        <td><input type="text" name="fname" value="<?php echo $b[0]['Ven_Name'] ?>"></td>
      </tr>
        <tr>
        <th>Vendor Name</th>
        <td><input type="text" name="name" value="<?php echo $b[0]['Ven_Name'] ?>" ></td>
      </tr>
      <tr>
        <th>phonenumber</th>
        <td><input type="text" name="phone" value="<?php echo $b[0]['Ven_Phone'] ?>" ></td>
      </tr>
      <!-- <tr>
        <th>Address</th>
      
      </tr> -->
      <th>City</th>
        <td><input type="text" maxlength="10" name="City" value="<?php echo $b[0]['Ven_City'] ?>"></td>
      </tr>
       <tr>
      <th>District</th>
        <td><input type="text" name="District" value="<?php echo $b[0]['Ven_Dist'] ?>"></td>
      </tr>
      <th>pincode</th>
      <td><input type="text" name="Pincode" value="<?php echo $b[0]['Ven_Pin'] ?>"></td>
      </tr>
      <th>Status</th>
      <td><input type="text" name="status" value="<?php echo $b[0]['Status'] ?>"></td>
      </tr>
      <th>Email</th>
      <td><input type="text" name="email" value="<?php echo $b[0]['Ven_Email'] ?>"></td>
      </tr>
      
      <tr>
        <td><input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>
  <?php 
 }
  ?>
<h1>Vendor Details</h1>
      <table class="table" border="2">
        <tr>
          <th>Sl.no</th>
          <th>Staff Name</th>
          <th>Vendor Name</th>
          <th>Phone Number</th>
          <!-- <th>Address</th> -->
          <th>City</th>
          <th>District</th>
          <th>Pincode</th>
          <th>Status</th>
          <th>Email</th>
<th>Status</th>
<th>Update</th>
        </tr>

      
      <?php 
         $sneha="
       SELECT `Staff_Id`,`Ven_Id`,`Ven_Name`,`Ven_Email`,`Ven_City`,`Ven_Dist`,`Ven_Pin`,`Ven_Phone`,tbl_vendor.`Status`,`Stf_Fname` FROM  tbl_vendor INNER JOIN `tbl_staff`USING(`Staff_Id`) where Staff_Id !=''
       UNION 
         SELECT '0',`Ven_Id`,`Ven_Name`,`Ven_Email`,`Ven_City`,`Ven_Dist`,`Ven_Pin`,`Ven_Phone`,tbl_vendor.`Status`,NULL as `Stf_Fname` FROM tbl_vendor  where Staff_Id=''

       ";
      $sony=select($sneha);
      $slno=1;

      foreach ($sony as $key) {
        ?>
      <tr>
        <td><?php echo $slno++ ?></td>
        <td><?php echo $key['Stf_Fname'] ?></td>
        <td><?php echo $key['Ven_Name'] ?></td>
        <td><?php echo $key['Ven_Phone'] ?></td>
        <td><?php echo $key['Ven_City'] ?></td>
        <td><?php echo $key['Ven_Dist'] ?></td>
        <td><?php echo $key['Ven_Pin'] ?></td>
        <td><?php echo $key['Status'] ?></td>
        <td><?php echo $key['Ven_Email'] ?></td>

        <?php if ($key['Status'] == '0')  { ?>
        <td><a href="?a_id=<?php echo $key['Ven_Id'] ?>"> <button type="button" class="btn">Active</button></a></td>

        <?php }elseif ($key['Status'] == '1') {

          ?>
        <td><a href="?i_id=<?php echo $key['Ven_Id'] ?>"> <button type="button" class="btn">Inactive</button></a></td>

       
       <?php } ?>
        <td><a href="?u_id=<?php echo $key['Ven_Id'] ?>"> <button type="button" class="btn">UPDATE</button></a></td>

      
</tr>

  <?php } ?>
</table>
    </center>