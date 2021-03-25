<?php
	require_once '../db/conn.php';
	$q_done_sales = $conn->query("SELECT * FROM `pending` WHERE `penid` = '$_REQUEST[penid]'") or die(mysqli_error());
	$f_done_sales = $q_done_sales->fetch_array();
?>
<div class  = "modal-body">
<form method = "POST" action = "sales_query.php?penid=<?php echo $f_done_sales['penid']?>" enctype = "multipart/form-data">
			<input type = "text" name = "fname" value = "<?php echo $f_done_sales['fname']?>" class = "form-control" hidden/>
			<input type = "text" name = "email" value = "<?php echo $f_done_sales['email']?>" class = "form-control" hidden/>
			<input type = "text" name = "phone" value = "<?php echo $f_done_sales['phone']?>" class = "form-control" hidden/>
			<input type = "text" name = "address" value = "<?php echo $f_done_sales['address']?>" class = "form-control" hidden/>
			<input type = "text" name = "city" value = "<?php echo $f_done_sales['city']?>" class = "form-control" hidden>
			<input type = "text" name = "region" value = "<?php echo $f_done_sales['region']?>" class = "form-control" hidden>
			<input type = "text" name = "order" value = "<?php echo $f_done_sales['orderconfirm']?>" class = "form-control" hidden>
			<input type = "text" name = "qty" value = "<?php echo $f_done_sales['qty']?>" class = "form-control" hidden>
			<input type = "text" name = "payment" value = "<?php echo $f_done_sales['payment']?>" class = "form-control" hidden>
			<input type = "text" name = "agreement" value = "<?php echo $f_done_sales['agreement']?>" class = "form-control" hidden>
			<input type = "text" name = "starttime" value = "<?php echo $f_done_sales['rec_time']?>" class = "form-control" hidden>
		    <center><label class = "text-success">Do you want to mark this order as complete?</label>
							<br /><span class="fa fa-5x fa-check-circle text-success"></span></center>
							<br />
		<center><button  class = "btn btn-success"  name = "done"><span class = "fa fa-thumbs-up"></span> Yes</button>&nbsp;&nbsp;&nbsp;
		<button type = "button" class = "btn btn-danger" data-dismiss = "modal" aria-label = "No"><span class = "fa fa-thumbs-down"></span> No</button></center>
		</div>
</form>	