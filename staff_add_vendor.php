

<?php include 'staffpanel.php';
// $staf_id=$_SESSION['staff_id'];
extract($_GET);
$staff_id=$_SESSION['Staff_id'];

if (isset($_POST['Submit']))
{
    extract($_POST);



echo$q2="insert into tbl_vendor values(null,'$staff_id','$Name','$Username','$City','$District ','$Pin','$Phno','1')";

insert($q2);
  alert('Added successfully');
  return redirect('login1.php');
}


?>

<div class="box"></div>
<div class="boxinput">
<form method="post">
    <h1 style="font-size: 30px;">Add Vendor</h1>

    <input type="text" value=""name="Name" placeholder="Vendor Name" id="name"required="" />
     <input type="text" value=""name="Username"placeholder="Email" id="email" required=""/>
    
     <input type="text" value=""name="City"placeholder="City" id="city"required="" />
    <input type="text" value=""name="District" placeholder="District " id="district" required=""/>
      <input type="text" value=""name="Pin" placeholder="PIN" id="pin" required=""/>
       <input type="text" value=""name="Phno"placeholder="Phone Number" id="phno" required=""/>
    
  
  
   
    <button name="Submit">SAVE</button>
    </form>
</div>


<style type="text/css">

body {
  background-image: url('static/img//carousel-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
   
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