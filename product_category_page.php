<?php include 'connection.php';
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
  background-color: #000;
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
  <h2 style="text-align:center">CATEGORIES</h2>
<?php 
      $q="select * from `tbl_cat` ";
      $res=select($q);
      $slno=1;
      foreach ($res as $key ) {

       ?>

<div class="card">
  <br> <br> <br> <br> <br>   <br> <br> <br> 
  <img src="<?php echo $key['Image']  ?>" width=200px>
 <h2><?php echo $key['Cat_Name']  ?></h2>
  
 
  <p><button><a href="product_subcategory_page.php?cat=<?php echo $key['Cat_Id']?>">More</a></button></p>
</div>
<?php } ?>
  
<!-- <div class="card">
  <img src="images/m2.jpg" alt="wall decor" style="width:65%">
  <h1>wall decor</h1>
  <p class="price">$19.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div> -->


</body>
</html>
