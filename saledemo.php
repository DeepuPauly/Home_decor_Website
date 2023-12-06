<!-- Custom CSS Styles -->
<?php include 'connection.php';

if (isset($_GET['cart_mid'])) {
    extract($_GET);
    echo $c = "UPDATE `tbl_mastcart` SET `cart_status` ='Paid' WHERE `mastcart_id`='$cart_mid'";
    $d = update($c);
    echo $myq = "UPDATE `tbl_courier`  SET `Courier_Status`='0' WHERE `Username`='$Username'";
    $myres = update($myq);
    echo $myqrr = "UPDATE `login`  SET `status`='0' WHERE `Username`='$Username'";
    $myresss = update($myqrr);
    alert('updated successfully');
    return redirect('admin_view_sales.php');
}
?>

<!-- Custom CSS Styles -->
<style>
    body {
        background-color: #f8f9fa;
        color: #333; /* Text color */
    }

    .page-title {
        text-align: center;
        background-color: #343a40; /* Dark background color */
        color: white;
        padding: 20px;
    }

    .sales-details-card {
        background-color: #fff;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .sales-details-card img {
        max-width: 100%;
        height: auto;
        border-radius: 5px 5px 0 0;
    }

    .sales-details-card .card-body {
        padding: 20px;
    }

    .sales-details-card .card-body h5 {
        margin-top: 0;
    }

    .quantity-input {
        max-width: 100px;
        text-align: center;
    }
</style>

<!-- Main Content -->
<main class="container mt-4">
    <?php
    $q = "SELECT *,`tbl_mastcart`.`cart_status` AS ostatus,tbl_item.Image as myimg FROM `tbl_order` INNER JOIN `tbl_mastcart` USING(`mastcart_id`) INNER JOIN `tbl_childcart` USING(`mastcart_Id`) INNER JOIN `tbl_payment` USING(`order_id`) INNER JOIN `tbl_item` USING(`Itm_Id`)  INNER JOIN `tbl_subcat` USING(`Subcat_Id`) INNER JOIN `tbl_cat` USING(`Cat_Id`) INNER JOIN `tbl_customer` ON `tbl_mastcart`.`Cust_Id` = `tbl_customer`.`Cust_Id` WHERE `tbl_mastcart`.`cart_status` !='Pending' ORDER BY `added_date` DESC";
    $res1 = select($q);
    $myomif = $res1[0]['mastcart_id'];
    if (sizeof($res1) > 0) {
        foreach ($res1 as $row) {
    ?>
            <div class="sales-details-card row">
                <div class="col-md-6">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src="<?php echo $row['myimg']; ?>" class="w-100" alt="Product Image" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                    </div>
                    <!-- Image -->
                </div>

                <div class="col-md-6">
                    <!-- Data -->
                    <p><strong>Customer Name: <?php echo $row['Cust_Fname']; ?> <?php echo $row['Cust_Lname']; ?></strong></p>
                    <p><strong><?php echo $row['Itm_name']; ?></strong></p>
                    <p>Category: <?php echo $row['Cat_Name']; ?></p>
                    <p>Sub Category: <?php echo $row['Subcat_Name']; ?></p>

                    <!-- Quantity -->
                    <form action="" method="post">
                        <div class="d-flex">
                            <input type="hidden" name="cart_mid" value="<?php echo $row['mastcart_id']; ?>">
                            <input type="hidden" name="item_id" value="<?php echo $row['Itm_Id']; ?>">
                            <input type="hidden" name="cart_cid" value="<?php echo $row['childcart_Id']; ?>">
                            <input type="hidden" name="rate" value="<?php echo $row['child_totamt']; ?>">

                            <div class="form-outline quantity-input">
                                <label class="form-label" for="quantity<?php echo $i; ?>">Quantity</label>
                                <input id="quantity<?php echo $i; ?>" min="1" readonly name="quantity" value="<?php echo $row['quantity']; ?>" type="number" class="form-control" />
                            </div>
                        </div>
                    </form>

                    <!-- Price -->
                    <p class="text-center"><strong>₹<?php echo $row['tot_amount']; ?></strong></p>
                    <p class="text-center"><strong><?php echo $row['ostatus']; ?></strong></p>

                    <?php
                    if ($row['ostatus'] == "Paid") {
                    ?>
                        <p class="text-center">
                            <strong><a href="admin_assign_to_courire_service.php?cart_mid=<?php echo $row['mastcart_id']; ?>&Cust_Id=<?php echo $row['Cust_Id']; ?>">Assign To Courier Service</a></strong>
                        </p>
                    <?php
                    } else {
                        $myqry = "SELECT *,`tbl_courier`.`Username` AS mycourier FROM `tbl_courier` inner join `tbl_delivery` using(`Courier_Id`)INNER JOIN `tbl_mastcart` USING(`mastcart_id`) INNER JOIN tbl_customer USING(Cust_Id) WHERE `tbl_mastcart`.`cart_status` ='Assigned To Courier'  ORDER BY `expected_date` DESC";
                        $myval = select($myqry);
                        $currentDate = date('Y-m-d'); // Get the current date

                        foreach ($myval as $myrow) {
                            if (date('Y-m-d', strtotime($myval[0]['expected_date'])) == $currentDate) {
                    ?>
                                <p class="text-center">
                                    <strong><a href="?cart_mid=<?php echo $myrow['mastcart_id']; ?>&Username=<?php echo $myrow['mycourier']; ?>&Cust_Id=<?php echo $myrow['Cust_Id']; ?>">Resign</a></strong>
                                </p>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
    <?php
        }
    }
    ?>
</main>
