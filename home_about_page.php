<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="customer_register.php">Sign Up</a></li>
  <li><a href="home_about_page.php">About</a></li>
  <li><a href="home_contact.php">Contact</a></li>
</ul>
<div class="about-section">
    <h1>Gleaming House</h1>
  <h2>Our Story</h2>
 
  <p>Our Story
Launched in 2021, we’re the latest one-stop-shop luxury home decor company that is ready to take over the design and decoration industry by creating lifestyles and not just products. We are here with a vision of decorating dream homes with quality accents and helping stylize spaces with the best visual interpretations of one's personality and personal choices.<br><br>

Our founder Ms. Ashima Singla aims to bring a revolution in this industry with her vision of home styling & related products. She started the company right in the middle of thepandemic when the need of the hour was to spend maximum time at home and find means to create a comforting, relaxed, and aesthetically pleasing environment around.
 </p>
</div>

<h2 style="text-align:center">Our Featured Products</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/ab1.jpg" alt="Jane" style="width:100%">
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
      <img src="images/ab2.jpg" alt="Mike" style="width:100%">
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
      <img src="images/ab3.jpg" alt="John" style="width:100%">
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

</body>
</html>
