<?php include 'staffpanel.php';?>

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
  <h1>SUBCATEGORIES</h1>
      <table class="table" border="2">
        <tr>
          <th>SI.NO</th>
       
        <th>Subcategoryname</th>
        
           <th>Description</th>
            <th>Image</th>
           
          
            </tr>

      <?php 
      $q="select * from `tbl_subcat` ";
      $res=select($q);
      $slno=1;

      foreach ($res as $key ) {

       ?>


       <tr>
         
         <td> <?php echo $slno++ ?></td>
         <td> <?php echo $key['Subcat_Name'] ?></td>
        
             <td> <?php echo $key['Description'] ?></td>
              <td> <img src="<?php echo $key['Img']  ?>"width=100px></td>
              
                 


       </tr>
            <?php } ?>

      </table>


   </center>