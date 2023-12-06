<?php include 'a_header.php';?>

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
            background-color: #FFFFE0;
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
          background-image: url();
            margin: 20px;
            padding: 20px;
        }
    </style>

</head>
<body>

</body>
</html>
<center>
  <h1>Item Report</h1>
      <table class="table" border="2">
        <tr>
          <th>SI.NO</th>
        <th>itemname</th>
        <!-- <th>categoryname</th> -->
        <th>subcategory</th>
         <th>Price</th>
          <th>Image</th>
           <th>Description</th>
           <!--  <th>DOB</th> -->
             <th>Status</th>
            </tr>

      <?php 
      $q="SELECT * FROM `tbl_item` INNER JOIN `tbl_subcat` USING(`Subcat_Id`) ";
      $res=select($q);
      $slno=1;

      foreach ($res as $key ) {

       ?>


       <tr>
         
         <td> <?php echo $slno++ ?></td>
         <td> <?php echo $key['Itm_name'] ?></td>
          <td> <?php echo $key['Subcat_Name'] ?></td>
           <td> <?php echo $key['Price'] ?></td>
           <td> <img src="<?php echo $key['Image'] ?>" width=100px></td>
             <td> <?php echo $key['Description'] ?></td>
              
                  <td> <?php echo $key['Status'] ?></td>
                 


       </tr>
            <?php } ?>

      </table>


   </center>