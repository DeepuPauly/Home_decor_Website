

<?php include 'connection.php';

$ltype= $_SESSION['type'];
if($ltype=="staff"){
    $stid=0;

}else{
    $stid=$_SESSION['staff_id'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Decore Store</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" id="ph" href="adminpanel.php">
                    Admin <span>Panel</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarScroll">
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 navbar-nav-scroll">
                       
                    <?php 

                    if ($ltype=="staff"){ ?>
                         <!-- <li class="nav-item">
                            <a class="nav-link" id="ph" aria-current="page" href="home.php">Home</a>
                        </li> -->
                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="ph" href="admin_manage_staff.php">Staff</a>
                        </li> -->
                    <?php }
                    else{ ?>
                         <!-- <li class="nav-item">
                            <a class="nav-link" id="ph" aria-current="page" href="admin_manage _purchase.php">Home</a>
                        </li> -->
                        
                  <?php  }
                      ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="ph" href="admin_view_courier.php">Courier</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="admin_view_vendor.php">Vendor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="admin_manage_customer.php">Customer</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="admin_manage_item.php">Item</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="admin_manage_purchase.php">Purchase</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" id="ph" href="login1.php.php">Logout</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
    </header>