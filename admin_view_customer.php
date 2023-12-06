<?php include 'a_header.php' ;


if (isset($_GET['a_id']))
{
   extract($_GET);
      $c="update tbl_customer set Cust_status='1' where Cust_id='$a_id'";

     update($c);

  $k="update login set Status='1' where Username='$oo'";

   update($k);

    alert('updated successfully');
    return redirect('admin_view_customer.php');

 }


 if (isset($_GET['i_id']))
{
   extract($_GET);
     $d="update tbl_customer set Cust_status ='0' where Cust_id='$i_id'";

    update($d);

  $kk="update login set Status='0' where Username='$llid'";

   update($kk);
   alert('updated successfully');
   return redirect('admincustomerview.php');

 }


 

?>
<!DOCTYPE html>
<html>
<head>
  <body>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
      <link rel="stylesheet" href="navbar.css">
  <nav class="navbar">
    <!-- LOGO -->
    <!-- <div class="logo">MEMENTO</div> -->

    <!-- NAVIGATION MENU -->
    <!-- <ul class="nav-links"> -->

      <!-- NAVIGATION MENUS -->
      <!-- <div class="menu"> -->

        <!-- <li><a href="adminpanel.php">HOME</a></li> -->
      <!-- </div> -->
    <!-- </ul> -->
  </nav>
  </body>
 <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
           /* background-color: #343a40;
            padding: 9px;
            width: 105%;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);*/
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
        }

        .nav-links li a:hover {
            border-bottom: 2px solid white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #FFFFE0;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        body {
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
        <td><input type="text" name="fname" value="<?php echo $b[0]['Cust_Fname'] ?>"></td>
      </tr>
      <tr>
        <th>Lastname</th>
        <td><input type="text" name="lname" value="<?php echo $b[0]['Cust_Lname'] ?>" ></td>
      </tr>
      <tr>
      <th>Phone</th>
        <td><input type="text" maxlength="10" name="phone" value="<?php echo $b[0]['Cust_phoneno'] ?>"></td>
      </tr>
       <tr>
        <th>Dob</th>
        <td><input type="text" name="pin" value="<?php echo $b[0]['Cust_Dob'] ?>"></td>
      </tr>
      <tr>
        <th>City</th>
        <td><input type="text" name="city" value="<?php echo $b[0]['Cust_city'] ?>"></td>
      </tr>
        <tr>
        <th>District</th>
        <td><input type="text" name="dist" value="<?php echo $b[0]['Cust_dist'] ?>"></td>
      </tr>
      <tr>
        <th>Pincode</th>
        <td><input type="text" name="pin" value="<?php echo $b[0]['Cust_pin'] ?>"></td>
      </tr>
       <tr>
      <th>Status</th>
        <td><input type="text" name="status" value="<?php echo $b[0]['Cust_status'] ?>"></td>
      </tr>
      <tr>
      <th>Gender</th>
        <td><input type="text" name="gender" value="<?php echo $b[0]['Cust_gender'] ?>"></td>
      </tr>
       <tr>
      <th>Address</th>
        <td><input type="text" name="address" value="<?php echo $b[0]['Cust_address'] ?>"></td>
      </tr>
      
      <tr>
        <td><input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>
  <?php }
  ?>
  <br>  <br>  <br>
	<h1>Customer Details</h1>
      <table class="table" border="2">
        <tr>
          <th>sl.no</th>
          <th>Username</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone Number</th>
          <th>Dob</th>
          <th>City</th>
          <th>District</th>
          <th>Pincode</th>
           <th>Status</th>
          <th>Gender</th>
          <th>Address</th>
           <th>Active/Inactive</th>
        </tr>

      
      <?php 
      $sneha="select * from tbl_customer";
      $sony=select($sneha);
      $slno=1;
      foreach ($sony as $key) {
      	?>
      <tr>
      	<td><?php echo $slno++ ?></td>
        <td><?php echo $key['Username'] ?></td>

      	<td><?php echo $key['Cust_Fname'] ?></td>
        <td><?php echo $key['Cust_Lname'] ?></td>

        <td><?php echo $key['Cust_Phone'] ?></td>

        <td><?php echo $key['Cust_Dob'] ?></td>

        <td><?php echo $key['Cust_City'] ?></td>

        
        <td><?php echo $key['Cust_Dist'] ?></td>

        <td><?php echo $key['Cust_Pin'] ?></td>

        <td><?php echo $key['Status'] ?></td>

        <td><?php echo $key['Gender'] ?></td>

        <td><?php echo $key['Cust_address'] ?></td>



       <?php if ($key['Status'] == '0')  { ?>
        <td><a href="?a_id=<?php echo $key['Cust_Id'] ?>&oo=<?php echo $key['Username']?>"> <button type="button" class="btn">Active</button></a></td>

        <?php }elseif ($key['Status'] == '1') {

          ?>
        <td><a href="?i_id=<?php echo $key['Cust_Id'] ?>&llid=<?php echo $key['Username']?>"> <button type="button" class="btn">Inactive</button></a></td>

       
       <?php } ?>

      </tr>

  <?php } ?>
</table>
    </center>