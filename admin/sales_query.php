<?php
	require_once '../db/conn.php';
if(ISSET($_POST['done'])){
		$email = $_POST['email'] ;
        $phone = $_POST['phone'] ;
        $fname = $_POST['fname'] ;
        $city = $_POST['city'] ;
        $address = $_POST['address'] ;
        $region = $_POST['region'] ;
        $order = $_POST['order'] ;
        $qty = $_POST['qty'] ;
        $payment = $_POST['payment'] ;
        $agreement = $_POST['agreement'];
        $starttime = $_POST['starttime'];

		mysqli_query($conn,"insert into sales (fname, email, phone, address, city, region, orderconfirm, qty, payment, agreement, starttime,completetime) values ('$fname','$email','$phone','$address','$city','$region','$order','$qty','$payment','$agreement','$starttime', NOW())");

       $conn->query("DELETE FROM `pending` WHERE `penid` = '$_REQUEST[penid]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Done!");
				window.location = "index.php";
			</script>
		';	
			}
?>	