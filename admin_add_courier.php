<?php include 'a_header.php';

extract($_GET);
// $staff_id=$_SESSION['Staff_id'];


if (isset($_POST['Submit']))
{
    extract($_POST);
$a="select * from tbl_courier where Username='$Username'";
        $b=select($a);
       if (sizeof($b) > 0) {

             alert('Already existed Courier');
         } 
      
       else

{
$q="insert into login values('$Username','$Password','courier','1')";
insert($q);

echo$q2="insert into tbl_courier values(null,'$Username','0','$Cname','$City','$District','$Pin','$Street','$Phonenumber','1')";

insert($q2);
  alert('signed up successfully');
  return redirect('admin_add_courier.php');
}
}


?>

<div class="box"></div>
<div class="boxinput">
<form method="post">
    <h1 style="font-size: 30px;">Add Courier</h1>
   
    <input type="email"value=""name="Username" placeholder="Email" id="Username" required="" />
    <input type="password"value="" name="Password" placeholder="Password" id="Password"/>
    <input type="text"value=""name="Cname"placeholder="Courier Name" id="cname" required=""/>
     <input type="text"value=""name="City" placeholder="City" id="City" required=""/>
      <input type="text"value="" name="District"placeholder="District" id="cdist" required=""/>
       <input type="text"value=""name="Pin" placeholder="Pin" id="cid" required=""/>
       <input type="text"value=""name="Street" placeholder="Street" id="street" required=""/>
        <input type="text"value=""name="Phonenumber" pattern= "[0-9]{10}"maxlength="10" placeholder="Phonenumber" id="Phonenumber" />

  
  
   
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
