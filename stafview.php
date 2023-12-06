<?php include 'connection.php';
if (isset($_GET['u_id'])) 
{
  extract($_GET);
  $a="select * from tbl_staff where Staff_Id='$u_id'";
  $b=select($a);
}
if (isset($_POST['submit'])) 
{
   extract($_POST);
  $c="update tbl_staff set Stf_Fname='$fname',Stf_Lname='$lname',Stf_Adrs='$Address',Stf_Phone='$Phonenumber',Stf_Gndr='$Gender',Stf_Dob='$Dob' where Stf_Id='$u_id'";

   $d=update($c);
   alert('updated successfully');
   return redirect('stafview.php');

 } 
if (isset($_GET['a_id'])) 
{
  extract($_GET);
 $e="update tbl_courier set Cs_Status='1' where Courier_Id='$a_id'";
 update($e);
  alert('updated successfully');
 return redirect('stafview.php');
}

 if (isset($_GET['i_id'])) 
{
  extract($_GET);
  $iss="update tbl_courier set Cs_Status='0' where Courier_Id='$i_id'";
 update($iss);
  alert('updated successfully');
   return redirect('stafview.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <style>
        /* Add CSS styles to the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: pink;
            color: #fff;
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
        <th>Firstname</th>
        <td><input type="text" name="Firstname" value="<?php echo $b[0]['Stf_Fname'] ?>"></td>
      </tr>
      <tr>
        <th>Lastname</th>
        <td><input type="text" name="Lastname" value="<?php echo $b[0]['Stf_Lname'] ?>" ></td>
      </tr>
      <tr>
        <th>Address</th>
        <td><input type="text" name="Address" value="<?php echo $b[0]['Stf_Adrs'] ?>"></td>
     <tr>
      <th>Phone</th>
        <td><input type="text" maxlength="10" name="Phonenumber" value="<?php echo $b[0]['Stf_Phone'] ?>"></td>
      </tr>
      <tr>
      <th>Gender</th>
        <td><input type="text" name="Gender" value="<?php echo $b[0]['Stf_Gndr'] ?>"></td>
      </tr>
      <tr>
      <th>DOB</th>
        <td><input type="text" name="Dob" value="<?php echo $b[0]['Stf_Dob'] ?>"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>


<?php }

   ?>   
   <h1>Staff Report</h1>
      <table class="table" border="2">
        <tr>
          <th>SI.NO</th>
        <th>Username</th>
        <th>Firstname</th>
        <th>Lastname</th>
        
         <th>Address</th>
          <th>Phone</th>
           <th>Gender</th>
            <th>DOB</th>
             <th>Status</th>
             <th>Update</th>
            </tr>

      <?php
      $hanna="select *,`tbl_staff`.`Username` AS coname from tbl_staff";
       // inner join tbl_staff using(Staff_Id)";
      $hasna=select($hanna);
      $slno=1;

      foreach ($hasna as $key ) {

       ?>


      <tr>
         
          <td> <?php echo $slno++ ?></td>
         <td> <?php echo $key['Username'] ?></td>
          <td> <?php echo $key['Stf_Fname'] ?></td>
           <td> <?php echo $key['Stf_Lname'] ?></td>
           <td> <?php echo $key['Stf_Adrs'] ?></td>
             <td> <?php echo $key['Stf_Phone'] ?></td>
               <td> <?php echo $key['Stf_Gndr'] ?></td>
                 <td> <?php echo $key['Stf_Dob'] ?></td>
                  
                   <?php if ($key['Status'] == '0'){?>
                  <td><a href="?a_id=<?php echo $key['Staff_Id'] ?>">Active</a></td>
                <?php } elseif ($key['Status'] == '1') {
                   ?>
                  <td><a href="?i_id=<?php echo $key['Staff_Id'] ?>">Inactive</a></td>
                <?php } ?>
                  <td><a href="?u_id=<?php echo $key['Staff_Id'] ?>">Update</a></td>

                 
              






       </tr>
            <?php } ?>

      </table>


   </center>