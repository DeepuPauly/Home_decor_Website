<?php include 'a_header.php';

extract($_GET);
?>

<?php
if (isset($_POST['button'])) 
{
  extract($_POST);

  // echo $totamt=$_POST['totamt'];
  $ggg="select * from tbl_item where Itm_Id='$item_id'";
  $c=select($ggg);
  echo$profitper=(int)$c[0]['Profit_Per'];
  echo$per=($price * $profitper) / 100;
  echo$sprice=$price + $per;

  $qt="select * from `tbl_purmaster` where Ven_Id='$vname' and purch_status='pending' ";
  $r=select($qt);
  if(sizeof($r)>0)
  {
    $puid=$r[0]['Pm_Id'];
   $u="select * from `tbl_purmaster` inner join `tbl_purchild` using(Pm_Id) where Itm_Id='$item_id'";
    $j=select($u);
    if (sizeof($j)>0) 
    {         
            $hy="update tbl_purmaster set total_amt=total_amt+'$totamt' where Pm_Id='$puid'";
            update($hy);
            $m="update tbl_purchild set Cost_Price='$price',Selling_price='$sprice',Purch_quantity=Purch_quantity+'$qty' where Itm_Id='$item_id'";
            update($m);
            // return redirect('admin_manage_purchase.php');
 
    }else{
             $hy="update tbl_purmaster set total_amt=total_amt+'$totamt' where Pm_Id='$puid'";
            update($hy);
            $qs="insert into tbl_purchild values(NULL,'$puid','$item_id','$price','$sprice','$qty','available')";
            insert($qs);
            // return redirect('admin_manage_purchase.php');
          
    }
  } else{


  $q="insert into tbl_purmaster values(NULL,'0','$vname',curdate(),'$totamt','pending')";
  $ids=insert($q);
  $qs="insert into tbl_purchild values(NULL,'$ids','$item_id','$qty','$price','$sprice','available')";
  insert($qs);
  }
   $qz="SELECT * FROM `tbl_purmaster` INNER JOIN `tbl_purchild` USING(`Pm_Id`) WHERE `purch_status`='Pending'";
    $az=select($qz);
    if(sizeof($az)>0){
      foreach ($az as $row) {
        
        $pm_id=$row['Pm_Id'];
        $aq=$row['Pc_Id'];
        $item_id=$row['Itm_Id'];
        $quantity=$row['Purch_quantity'];
        $sp=$row['Selling_price'];

        $qs="UPDATE `tbl_purmaster` SET `purch_status`='Purchased' WHERE `Pm_Id`='$pm_id'";
        update($qs);
       $hi="select * from `tbl_item` where Itm_Id='$item_id' and stock='0'";
        $hlo=select($hi);
        if (sizeof($hlo)>0)
         {
           $qs1="UPDATE `tbl_item` SET `Stock`=`Stock`+'$quantity',Price='$sp' WHERE Itm_Id='$item_id'";
        update($qs1);

          $aw="update `tbl_purchild` set cpurch_status='stock added' where Pc_Id='$aq'";
          update($aw);

        }else
        {
          $a=1;
        }

}
}
  return redirect('admin_manage_purchase.php');

 }

 ?>
<script type="text/javascript">
  function TextOnTextChange()
  {
    var x =document.getElementById("qty").value;
    var y =document.getElementById("amt").value;

    document.getElementById("t_amount").value = x * y;
   
  }

</script> 

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->


<style type="text/css">
  #ph{
    color: #fff;
  }
</style>

    <!-- hero slider Start -->
    <!-- <div class="banner-wrap"> -->
        <!-- <div class="banner-slider"> -->
            <!-- hero slide start -->
            <!-- <div class="banner-slide bg1"> -->
           <!--      <div class="container">
                    <div class="hero-content"> -->
                        
                        <!-- <div class="card" style="width: 500px;margin-top: 5em;opacity: .7;border-radius: 3%;"> -->
                          <center>
                      <form style="width: 620px; margin-top: 10%;" method="post" >
                          <h3 style="font-size: 17px;color: #fff;">Purchase</h3><br>
                        <!-- <h2 style="font-family: ;color: #fff;">Manage Variant</h2><br> -->
                          <div class="form-group col-md-6">
                            <label for="ram">Vendor</label>
                          <select id="inputState" placeholder="Select Vendor" name="vname" class="form-control" style="opacity: 0.7" required>
                          <option selected>Select Vendor</option>
                          <?php
                         echo $q1="SELECT * FROM `tbl_vendor` where Status='1'";
                          $res=select($q1);
                         foreach ($res as $row)
                {
                  ?>
                  <option value="<?php echo $row['Ven_Id'] ?>"> <?php echo $row['Ven_Name'] ?></option>
                <?php
                }
                ?>
              </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="rabc">Quantity</label>
                            <input type="text" name="qty" placeholder="Enter Quantity" id="qty" class="form-control"  required style="opacity: .7;">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="racb">Cost Price</label>
                            <input type="text" id="amt" name="price" placeholder="Enter Price" class="form-control" required style="opacity: .7;" onchange="TextOnTextChange()">
                          </div>
                           <!-- <div class="form-group col-md-6">
                            <label for="racb">Selling Price</label>
                            <input type="text" id="pic" name="sprice" placeholder="Enter Price" class="form-control" required style="opacity: .7;" >
                          </div> -->
                          <div class="form-group col-md-6">
                            <label for="bca">Total Amount</label>
                            <input type="text" readonly="" name="totamt" id="t_amount" required="" placeholder="Total Amount" class="form-control" required style="opacity: .7;">
                          </div>
                          <div class="form-group col-md-6"><br>
                          <input type="submit" name="button" class="btn btn-primary" value="Purchase" style="opacity: .7;">
                        </div>
                      </form>
                      </center>
<!-- </div> -->
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
           
           
        </div>
    </div>
    <!-- hero slider end -->