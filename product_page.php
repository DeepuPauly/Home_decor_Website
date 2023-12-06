<?php include 'connection.php';
extract($_GET);
?>
<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  font-family: arial;
  display: inline-block; /* Display cards horizontally */
  margin: 10px; /* Add some margin for spacing between the cards */
  width: 30%; /* Adjust the width to your preference */
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
   background-color:yellow;
/*background-color: #000;*/
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  
}

.card button:hover {
  opacity: 0.7;
}

</style>
</head>
<body>
  <!-- <h2 style="text-align:center">CATEGORIES</h2> -->
<?php 
      $q="select * from `tbl_item` where Subcat_Id='$cat'";
      $res=select($q);
      $slno=1;
      foreach ($res as $key ) {

       ?>


<h2 style="text-align:center"></h2>
<div class="card">
  <br> <br> <br> <br> <br>  
  <img src="<?php echo $key['Image']  ?>" width=200px>
 <h2><?php echo $key['Itm_name']  ?></h2>
 <h2>Price <?php echo $key['Price']  ?></h2>
  
 
  <p style="color: black;font-size: 10px;"><button><a href="">Add TO Cart</a></button></p>
</div>
<?php } ?>
  


</body>
</html>
