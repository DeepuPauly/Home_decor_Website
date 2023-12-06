<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decore Cart - Home</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <!-- <a href="#">DECORE CART</a> -->
              <!-- <h1 style="color:blue">Gleaming House</h1> -->
        </div>
        <ul class="menu">
          <li><a href="#" class="active">Home</a></li>
        
          <li><a href="customer_register.php">Sign Up</a></li>
          <li><a href="login.php">Login</a></li>
           <li><a href="prcard.php">Products</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="home_contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>

  <section class="hero">
    <div class="hero-content">
        <br></br>
        <br></br>
         <br></br>
      <h1 color="blue">Gleaming House</h1>
      <p>Discover your perfect home decor items</p>
      <a class="button1 button11"href="product.php">Shop Now</a>


    </div>

  </section>
  <div class="logo">
   
<!-- <button name="Submit" ><a href="product.php">shop now </a></button> -->
<br>

 <h6> OUR FEATURED PRODUCTS</h6>
  </div>
 
  <section class="featured-products">
    <div class="product">
      <img src="images/plant.jpeg" alt="Product 1">
      <h3>Product 1</h3>
      <p>Rs.50000</p>
    </div>
    <div class="product">
      <img src="images/metalwal.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Rs.25000</p>
    </div>
    <div class="product">
      <img src="tropical-interior-design-living-room_269031-60.webp" alt="Product 3">
      <h3>Product 3</h3>
      <p>Rs.320000</p>
    </div>
  </section>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button1 {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button11 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button11:hover {
  background-color: #4CAF50;
  color: white;
}
.f
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: black;

}
</style>
</style>
</head>
<body>


<!-- 
<h2 style="text-align:center">Our Featured Products</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="vase.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Metal WallArt</h2>
        <p class="title">Classic Designs</p>
        <p>NewArrival</p>
        <p>Item number:1028</p>
        <p><button class="button">Buy Now</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="ab2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Handicrafts</h2>
        <p class="title">Classic Designs</p>
        <p>New Arrival</p>
        <p>Item number:1024</p>
        <p><button class="button">Buy Now</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="ab3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>WallPaintings</h2>
        <p class="title">Classic Designs</p>
        <p>New Arrival.</p>
        <p>Item number:1026 </p>
        <p><button class="button">Buy Now</button></p>
      </div>
    </div>
  </div>
</div>
 -->

  <!-- <section id="about" class="about">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat, dolor vitae varius elementum, dui ex vestibulum arcu, ut sollicitudin sem lectus vitae dui. Morbi vel urna in nunc sagittis maximus.</p>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Us</h2>
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <input type="submit" class="btn" value="Submit">
      </div>
    </form>
  </section>-->

<footer>
    <p>&copy; 2023 Decore Cart. All rights reserved.</p>
  </footer>
</body>
</html> 
