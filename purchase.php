<?php include 'connection.php';

if (isset($_POST['Submit']))
{
    extract($_POST);


echo$q2="insert into tbl_ values(null,'$catname','$desc')";

insert($q2);
  alert('signed up successfully');
  return redirect('category.php');
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Staff Registration</title>
<style>
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
</head>

    <body style="background: url('images/logpg.jpg');">
    <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="staff.php">Staff</a></li>
  <li><a href="courier.php">Courier</a></li>
  <li><a href="category.php">Category</a></li>
  <li><a href="subcat.php">Subcategory</a></li>
  <li><a href="item.php">Item</a></li>
  <li><a href="vendor.php">Vendor</a></li>
  <li><a href="purchae.php">Purchase</a></li>
  <li><a href="#news">Reports</a></li>
</ul>
<div class="box"></div>
<div class="boxinput">
<form method="post">
    <h1 style="font-size: 30px;">Add Purchase</h1>
   
    <input type="text" value="" placeholder="Vendor" id="vendorid" />
    <input type="text" value="" placeholder="Item " id="itemname" />
      <input type="text" value="" placeholder="Cost Price" id="cost" />
    <input type="text" value="" placeholder="Quantity" id="quantity" />
  
  
   
    <button>SAVE</button>
    </form>
</div>


<style type="text/css">

body {
    background: url('tr2.jpg');
    background-size:650px;
    font-family: Montserrat;
   
}

.box {
    width: 213px;
    height: 36px;
    margin: 30px auto;


}

.boxinput {
    width: 400px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
   
    margin: 0 auto;
}

.boxinput h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.boxinput input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}


.boxinput select {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}


.boxinput input:active, .boxinput input:focus {
    border: 1px solid black;
}

.boxinput button {
    width: 100%;
    height: 40px;
    background: black;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid black;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.boxinput button:hover {
    background: grey;
}

</style>

</body>
</html>