$uid=$_SESSION['user_id'];

extract($_GET);

if (isset($_POST['submit'])) 
{
	extract($_POST);

	$qr="SELECT * FROM `tbl_orders` WHERE `user_id`='$uid' AND `orderstatus`='pending'";
	$result=select($qr);
	if (sizeof($result)>0)
	{

		$tamt=$result[0]['total'];
		$order_master_id=$result[0]['order_id'];

		$s="select * from `tbl_orderdetails` where product_id='$pid' and order_id='$order_master_id'";
		$res=select($s);

		if (sizeof($res)>0) 
		{

			$odid=$res[0]['detail_id'];

			$g="update tbl_orders set total=total+'$total' where order_id='$order_master_id'";
			update($g);

			$y="update tbl_orderdetails set quantity=quantity+'$quantity' where detail_id='$odid'";
			update($y);
		}
		else
		{
		
		$q="update tbl_orders set total=total+'$total' where order_id='$order_master_id'";
		update($q);

		$p="insert into tbl_orderdetails values(null,'$pid','$order_master_id','$quantity','$amm')";
		insert($p);

		}
	}
	else
	{

	$e="insert into tbl_orders values(null,'$uid','$total',curdate(),'pending')";
	$res=insert($e);


	$p="insert into tbl_orderdetails values(null,'$pid','$res','$quantity','$amm')";
	insert($p);

	}
	alert("buy successfully");
	return redirect("uservieworder.php");

}
 ?>

 <script type="text/javascript">
	function TextOnTextChange()
	{
		var x =document.getElementById("p_amount").value;
		var y =document.getElementById("p_qnty").value;
		
		document.getElementById("t_amount").value = x * y;
	}

</script>