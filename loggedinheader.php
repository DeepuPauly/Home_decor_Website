<?php include 'connection.php';
extract($_GET);
$cid=$_SESSION['cust_id'];
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Decor</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <a class="navbar-brand" id="ph" href="#" style="padding-left: 50px">
                    Home <span>Decor</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarScroll" style="padding-right: 150px">
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" id="ph" aria-current="page" href="logindex.php">Home</a>
                        </li>
              <!--           <li class="nav-item">
                            <a class="nav-link" id="ph" href="loggedinabout.php">About</a> -->
                       <!--  </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="loggedincontact.php">Contact</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="ph" href="custreg2.php">Profile</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="customer_view_cart.php">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="customer_myorders.php">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="my_profile.php">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="login1.php">Logout</a>
                        </li>
                    </ul>
                    <!-- <form  method="post" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required name="search_item">
                        <button class="btn btn-style" name="ser" type="submit"><i class="fas fa-search"></i></button>


                        <?php 

                        if (isset($_POST['ser'])) {
                            extract($_POST);

                            $q="select * from `tbl_item` where Status='Active' AND Itm_name like '$search_item%'";
                       $q1=select($q);
                            
                        }

                       

                         ?>
                    </form> -->
                    <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <!-- <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div> -->
                            </label>
                        </div>
                    </nav>
                </div>
                </div>
            </nav>
        </div>
    </header>



<!--  <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" id="ph" aria-current="page" href="logindex.php">Home</a>
                        </li>
              
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="customer_view_cart.php">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="customer_myorders.php">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="my_profile.php">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="login.php">Logout</a>
                        </li>
                    </ul> -->


                    