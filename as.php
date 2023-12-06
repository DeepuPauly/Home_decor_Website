<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="as.css">
    <style type="text/css">
        .dropdown {
    position: relative;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #444;
    z-index: 1;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  .dropdown-content a {
    color: #fff;
    padding: 10px;
    text-decoration: none;
    display: block;
    footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}
footer p {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 0.5rem;
}
    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <a href="header.php"><h6 class="logo"> Adminpanel</h6></a>
            </div>

            <div class="menu">
                <ul>
                    <ul>
      <!-- <li><a href="login.php">HOME</a></li> -->
      <li class="dropdown">
        <a href="#">STAFF</a>
        <div class="dropdown-content">
          <a href="admin_add_staff.php">Add </a>
         
          <a href="admin_view_staff.php">View</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">COURIER</a>
        <div class="dropdown-content">
          <a href="admin_add_courier.php">Add </a>
       
          <a href="admin_view_courier.php">View </a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#">PRODUCTS</a>
        <div class="dropdown-content">
          <a href="admin_add_item.php">Add Product</a>
         
          <a href="admin_view_item.php">View Product</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">CATEGORY</a>
        <div class="dropdown-content">
          <a href="admin_add_category.php">Add Categry </a>
          <!-- <a href="#">Edit </a> -->
          <a href="admin_view_category.php">View Category</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">SUBCATEGORY</a>
        <div class="dropdown-content">
          <a href="admin_add_subcategory.php">Add Subcategory</a>
      <!--     <a href="#">Edit Product</a> -->
          <a href="admin_view_subcategory.php">View Subcategory</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">VENDOR</a>
        <div class="dropdown-content">
          <a href="admin_add_vendor.php">Add </a>
       
          <a href="admin_view_vendor.php">View </a>
        </div>
      </li>
      <li class="dropdown">
        <a href="admin_manage_purchase.php">PURCHASE</a>
        <div class="dropdown-content">
         
        </div>
      </li>
        <li class="dropdown">
        <a href="newlogin.php">Logout</a>
        <div class="dropdown-content">
         
        </div>
      </li>
                </ul>
            </div>

            <!-- <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div> -->

        </div>
<!--         <div class="content">
            <br><br><br><br>
            <h1>A place for EVERYTHING<br><span>Everything in it's </span> <br>PLACE!</h1> -->
            <!-- <p class="par">Add a layer of beauty, charm and elegance to bare walls and quiet corners of your home with<br> captivating home décor accessories.Mix and match your favourite pieces to create an<br> inviting vibe in the heart of your home.</p> -->

                <!-- <button class="cn"><a href="#">SHOP NOW</a></button> -->

               
    <!-- </div> -->
   <!--  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->
</body>
</html>