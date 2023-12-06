
<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

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
            /*background-image: url('static/img//carousel-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;*/
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                   <!--  <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div> -->
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <!-- <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Add these lines before </body> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">Staff</span> Panel</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                         <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ADD
                        </a>
                        <div class="dropdown-menu" aria-labelledby="productsDropdown">
                            <!-- <a class="dropdown-item" href="admin_add_staff.php">Staff</a> -->
                            <a class="dropdown-item" href="staff_add_courier.php">Courier</a>
                            <a class="dropdown-item" href="staff_add_item.php">Products</a>
                            <a class="dropdown-item" href="staff_add_category.php">Category</a>
                            <a class="dropdown-item" href="staff_add_subcategory.php">Sub Category</a>
                             <a class="dropdown-item" href="staff_add_vendor.php">Vendor</a>
                            
                        </div>
                    </div>
 <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            VIEW
                        </a>
                        <div class="dropdown-menu" aria-labelledby="productsDropdown">
                            <!-- <a class="dropdown-item" href="staff_view_staff.php">Staff</a> -->
                            <!-- <a class="dropdown-item" href="staff_view_courier.php">Courier</a> -->
                            <a class="dropdown-item" href="staff_view_courier.php">Courier</a>
                              <a class="dropdown-item" href="staff_view_customer.php">Customer</a>
                            <a class="dropdown-item" href="staff_view_item.php">Products</a>
                            <a class="dropdown-item" href="staff_view_category.php">Category</a>
                            <a class="dropdown-item" href="staff_view_subcategory.php">Sub Category</a>
                             <a class="dropdown-item" href="staff_view_vendor.php">Vendor</a>
                            
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PURCHASE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="staff_manage_purchase.php">Purchase Details</a>
                            <!-- <a class="dropdown-item" href="view_category.php">View Products</a> -->
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           SALES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="admin_view_sales.php">Sales Report</a>
                            <!-- <a class="dropdown-item" href="view_category.php">View Products</a> -->
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LOGOUT
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="login1.php">logout</a>
                            <!-- <a class="dropdown-item" href="view_category.php">View Products</a> -->
                        </div>
                    </div>


                    <!--  <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="subcatDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Subcategory
                        </a>
                        <div class="dropdown-menu" aria-labelledby="subcatDropdown">
                            <a class="dropdown-item" href="add_category.php">Add Products</a>
                            <a class="dropdown-item" href="view_category.php">View Products</a>
                        </div>
                    </div>
                     <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="productsDropdown">
                            <a class="dropdown-item" href="add_category.php">Add Products</a>
                            <a class="dropdown-item" href="view_category.php">View Products</a>
                        </div>
                    </div>
                     <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="productsDropdown">
                            <a class="dropdown-item" href="add_category.php">Add Products</a>
                            <a class="dropdown-item" href="view_category.php">View Products</a>
                        </div>
                    </div> -->
                       




                 
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
      