



<?php include 'connection.php';

if (isset($_POST['Submit']))
{
    extract($_POST);

$q="insert into login values('$Username','$Password','staff','active')";
insert($q);

$q2="insert into tbl_staff values(null,'$Username','$Firstname','$Lastname','$Address','$Phonenumber','$Gender','$Dob','1')";

insert($q2);
  // alert('signed up successfully');
  // return redirect('login.php');
}


?><!DOCTYPE html>
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

    <body style="background: url('homee.jpg');">
    <ul>
       <li><a href="adm1.php">Admin Panel</a></li>
<li><a class="active" href="home.php">Home</a></li>
  <li><a href="staff.php">Staff</a></li>
  <li><a href="courier.php">Courier</a></li>
  <li><a href="category.php">Category</a></li>
  <li><a href="subcat.php">Subcategory</a></li>
  <li><a href="item.php">Item</a></li>
  <li><a href="vendor.php">Vendor</a></li>
  <li><a href="purchase.php">Purchase</a></li>
  <li><a href="#news">Reports</a></li>
</ul>
<div class="box"></div>
<div class="boxinput">
<form method="post">
    <h1 style="font-size: 30px;">Create Staff Account</h1>
    <input type="text"value=""name= "Username" placeholder="Username" id="Username" required="" />
      <input type="password"value=""name="Password" placeholder="Password" id="Password" required=""/>
    <input type="text"value="" name="Firstname"placeholder="Firstname" id="Firstname" required=""  />
    <input type="text"value="" name="Lastname"placeholder="Lastname" id="Lastname" required="" />
    <input type="text"value="" name="Address"placeholder="Address" id="Address" required="" />
    <input type="number"value=""name="Phonenumber"placeholder="Phone Number" id="Phonenumber"required=""  />
    
    <input type="date"value="" name="Dob"placeholder="DOB" id="Dob" required="" />
  
    <select name="Gender">
    <option>Gender</option>
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    <option value="Others">Others</option>
    </select>
    <button name="Submit">SUBMIT</button>
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
