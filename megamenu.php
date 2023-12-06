<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="hstyle.css">

<style>
* {
  box-sizing: border-box;
}

body {
  background-image: url(h1.jpeg);
  background-repeat: no-repeat;
  background-size: 1900px;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:   #707070;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content .header {
  background: white;
  padding: 16px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 250px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/*footer {
  background-color: #333;
  color: #fff;
  padding: 10px 600;
  text-align: center;
}

footer p {
  font-size: 14px;
}
*/
</style>
</head>
<body style="background-color:white;">

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>products</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Vases</h3>
          <a href="#">glass</a>
          <a href="#">metal</a>
          <a href="#"> ceramic</a>
        </div>
        <div class="column">
          <h3>Plants and Botanics</h3>
          <a href="#">flowers</a>
          <a href="#">pampas</a>
          <a href="#">bouquets</a>
        </div>
        <div class="column">
          <h3>Lamps and Lights</h3>
          <a href="#">table lamp</a>
          <a href="#">light</a>
          <a href="#">lantern</a>
        </div>
      </div>
    </div>
  </div> 
</div>
  <section class="hero">
    <div class="hero-content">
        <br></br>
        <br></br>
         <br></br>
          <br></br>
           <br></br>
            <br></br>
             
      <h1 style="color: green;font-size: 60px;margin-left: 700px;">Gleaming House</h1>
      <!-- <p>Discover your perfect home decor items</p>
      <a class="button1 button11"href="product.php">Shop Now</a> -->


    </div>

  </section>
<div style="padding:16px">
 <!--  <h3>Mega Menu (Full-width dropdown in navbar)</h3>
  <p>Hover over the "Dropdown" link to see the mega menu.</p> -->
</div>
  <footer>

      <p style="margin-bottom: : 10px;">&copy; 2023 Decore Cart. All rights reserved.</p>
    </footer>
     <!-- <footer>
        <p>&copy; 2023 Admin Page</p>
    </footer> -->
</body>
</html>
