<?php include 'a_header.php';

if (isset($_POST['Submit']))
{
    extract($_POST);
    extract($_POST);
    $path="images/".$_FILES['i1']['name'];
    $nam=uniqid();
    $filetype=strtolower(pathinfo($path,PATHINFO_EXTENSION));
    $target1="images/".$nam.".".$filetype;
    move_uploaded_file($_FILES['i1']['tmp_name'], $target1);
    $a="select * from tbl_cat where Cat_Name='$catname'";
        $b=select($a);
       if (sizeof($b) > 0) {

             alert('Already existed Category');
         } 
      
       else
       {

    $q2="insert into tbl_cat values(null,'$catname','$desc','$target1')";
    insert($q2);
    alert('stored successfully');
    return redirect('admin_view_category.php');
}
}

?>

<div class="box"></div>
<div class="boxinput">
<form method="post" enctype="multipart/form-data">
    <h1 style="font-size: 30px;">Add Category</h1>
   
    
    <input type="text" value="" name="catname"placeholder="Category Name" id="cname" />
    <input type="text" value="" name="desc"placeholder="Description" id="desc" />
  
  <input type="file" name="i1" value="" placeholder="desc" id="desc" />
   
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
