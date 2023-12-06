
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Page</title>
<style>
  body {
     background-image: url(images/pot.jpg);
     background-size: cover;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
  
  }
  h1
  {
    font-family: algeria;
    font-style: italic;
  }
  h2
  {
    /*margin-top: 50px;*/
    font-size: 80px;
    font-family: algeria;
    font-style: italic;
    /*margin-top: 250px;*/
  /*  background-color: white;*/
  }
  header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
  }
  nav {
    background-color: #444;
    color: #fff;
    display: flex;
    justify-content: center;
    padding: 10px 0;
  }
  nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
  }
  nav ul li {
    margin: 0 15px;
  }
  nav ul li a {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s;
  }
  nav ul li a:hover {
    color: #ff6600;
  }
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
/*footer p {
  font-size: 14px;
}*/
.hero p {
  font-size: 18px;
  color: gray;
}
  }
</style>
</head>
<body>
  <header>
    <h1 style="font-style: algeria;">ADMIN PANEL</h1>
  </header>
  <nav>
    <ul>
      <li><a href="login.php">Home</a></li>
      <li class="dropdown">
        <a href="#">Staff</a>
        <div class="dropdown-content">
          <a href="admin_add_staff.php">Add </a>
          
          <a href="admin_view_staff.php">View</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">Courier</a>
        <div class="dropdown-content">
          <a href="admin_add_courier.php">Add </a>
        
          <a href="admin_view_courier.php">View </a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#">Products</a>
        <div class="dropdown-content">
          <a href="admin_add_item.php">Add Product</a>
          
          <a href="admin_view_item.php">View Product</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">Category</a>
        <div class="dropdown-content">
          <a href="admin_add_category.php">Add Categry </a>
          <!-- <a href="#">Edit </a> -->
          <a href="admin_view_category.php">View Category</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">Subcategory</a>
        <div class="dropdown-content">
          <a href="admin_add_subcategory.php">Add Subcategory</a>
      <!--     <a href="#">Edit Product</a> -->
          <a href="admin_view_subcategory.php">View Subcategory</a>
        </div>
      </li>
       <li class="dropdown">
        <a href="#">Vendor</a>
        <div class="dropdown-content">
          <a href="admin_add_vendor.php">Add </a>
       
          <a href="admin_view_vendor.php">View </a>
        </div>
      </li>
      <li class="dropdown">
        <a href="admin_manage_purchase.php">Purchase</a>
        <div class="dropdown-content">
         
        </div>
        
      </li>
        <li class="dropdown">
        <a href="login.php">Logout</a>
        <div class="dropdown-content">
         
        </div>
      </li>
<!-- 
      <li class="dropdown">
        <a href="#">Users</a>
        <div class="dropdown-content">
          <a href="#">Add User</a>
         <!--  <a href="#">Edit User</a> -->
          <!-- <a href="#">View User</a> --> 
        </div>
     <!--  </li>
      <li><a href="#">Settings</a></li>
    </ul> -->
  </nav>
<!--   <h3 align="left">Welcome To Admin Panel</h3> -->

   

 <footer style="margin-top: 26em">
  <br><br><br><br><br><br><br><br><br><br><br>

        <p>&copy; 2023 Home Decor Store</p>
    </footer>

</body>
</html>
