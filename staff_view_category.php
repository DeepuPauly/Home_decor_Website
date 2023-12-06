<?php include 'staffpanel.php';
if (isset($_GET['u_id']))
{
  extract($_GET);
  $a="select * from tbl_cat where Cat_Id='$u_id'";
  $b=select($a);
}
if (isset($_POST['Submit']))
{
   extract($_POST);
   $c="update tbl_cat set Cat_Id='name',Cat_name='$Lastname',Description='$Address',Image='$Phonenumber'";

   $d=update($c);
   alert('updated success/fully');
   return redirect('admin_view_category.php');

 }
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
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
            background-color:   #FFFFE0;
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
          background-image: url(bg.jpg);
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
        <th>Category Name</th>
        <td><input type="text" name="name" value="<?php echo $b[0]['Cat_name'] ?>"></td>
      </tr>
      <tr>
        <th>Description</th>
        <td><input type="text" name="desc" value="<?php echo $b[0]['Description'] ?>" ></td>
      </tr>
      <tr>
        <th>Image</th>
        <td><input type="text" name="Address" value="<?php echo $b[0]['Image'] ?>"></td>
      </tr>
      
      <tr>
        <td><input type="submit" name="Submit"></td>
      </tr>
    </table>
  </form>


<?php }

   ?>  
  <h1>CATEGORIES</h1>
      <table class="table" border="2">
        <tr>
          <th>SI.NO</th>
          <th>categoryname</th>
          <th>Description</th>
          <th>Image</th>
        <tr>

      <?php 
      $q="select * from `tbl_cat` ";
      $res=select($q);
      $slno=1;
      foreach ($res as $key ) {

       ?>


      <tr> 
        <td> <?php echo $slno++ ?></td>
        <td> <?php echo $key['Cat_Name'] ?></td>
        <td> <?php echo $key['Description'] ?></td>
        <td> <img src="<?php echo $key['Image']  ?>"width=100px></td>
      </tr>
            <?php } ?>

      </table>


   </center>