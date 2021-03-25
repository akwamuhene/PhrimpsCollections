<?php
	require_once '../db/conn.php';
	$conn->query("DELETE FROM `cart` WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
	header('location:https://phrimpscollections.com/admin/');
?>