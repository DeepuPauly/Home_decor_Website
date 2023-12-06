<?php include 'connection.php';

if (isset($_POST['submitss']))
  {
    extract($_POST);
    $q="select * from login where username='$Username'and password='$Password' and Status='1'";
    $res=select($q);
    if (sizeof($res)>0) 
    {

       $_SESSION['username']=$res[0]['Username'];
        $uname=$_SESSION['username'];
        $_SESSION['type']=$res[0]['type'];
    
  if ($res[0]['type']=="admin") {
    return redirect('adminheaderfinal.php');
    
  }
  if ($res[0]['type']=="staff") 
  {
    $q99="SELECT * FROM `tbl_staff` WHERE `Username`='$uname'";
    $val=select($q99);
    if (sizeof($val)>0)
    {
        $_SESSION['Staff_id']=$val[0]['Staff_Id'];
        $staff_id=$_SESSION['Staff_id'];
        return redirect('staffpanel.php');
    }
  }
  if ($res[0]['type']=="customer") 
  {
    $q99="SELECT * FROM `tbl_customer` WHERE `Username`='$uname'";
    $val=select($q99);
    if (sizeof($val)>0)
    {
        echo$_SESSION['cust_id']=$val[0]['Cust_Id'];
        $cid=$_SESSION['cust_id'];
        return redirect('logindex.php');  
    }
  }
  if ($res[0]['type']=="courier") {
    $q99="SELECT * FROM `tbl_courier` WHERE `Username`='$uname'";
    $val=select($q99);
    if (sizeof($val)>0)
    {
        echo$_SESSION['courier_id']=$val[0]['Courier_Id'];
        $cid=$_SESSION['courier_id'];
        return redirect('courierhome.php');  
    }
  }

}

  else
  {
    alert('invalid username');
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="static/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="static/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="static/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="static/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="static/css/style.css" rel="stylesheet">
      <!-- <link href="static/csss/style.css" rel="stylesheet"> -->
          <style>
        body {
            background-image: url('static/img//carousel-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>
   

    <!-- Topbar and other content here -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">Gleaming</span>Homes</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto py-0">
                        <li class="nav-item">
                            <a class="nav-link" href="homee.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login1.php">LOGIN</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="homee.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Add this after the Navbar End section -->
     <!-- Add this after the Navbar End section -->

    <!-- Background Image Section -->
    <!-- Your main content here -->

    <!-- Login Form -->
    <br> <br> <br> <br>  
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card" style="width: 400px;height: 450px;">
                    <div class="card-body">
                        <h3 class="card-title text-center">Login</h3>
                        <form action="login1.php" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="email" class="form-control"  name="Username" placeholder="Enter your username">
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="Password" placeholder="Enter your password">
                            </div>
                            <br> 
                            <button type="submit" class="btn btn-primary btn-block"name="submitss">Login</button> <br>
                            <p class="link">Don't have an account
                    <a href="customer_register.php">Sign up </a> here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <style>
    /* Custom CSS to increase the size of textboxes */
    .custom-textbox {
        height: 80px; /* Increase the height as needed */
        font-size: 16px; /* Increase the font size as needed */
    }
</style>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Your Company. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
