<?php
	require_once '../db/conn.php';
if(ISSET($_POST['edit'])){
		$item_name = $_POST['item_name'];
		$price = $_POST['price'];
		$decml = $_POST['decml'];
		$disc = $_POST['disc'];
		$qty = $_POST['qty'];
		$data_des = $_POST['data_des'];

		$conn->query("UPDATE `cart` SET `item_name` = '$item_name', `price` = '$price',`decml` = '$decml',`disc` = '$disc', `qty` = '$qty', `data_des` = '$data_des' WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());

		echo '
			<script type = "text/javascript">
				alert("Item edited successfully");
				window.location = "index.php";
			</script>
		';	
			}   
?>	