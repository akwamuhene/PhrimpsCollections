<?php
	session_start();
	
	if (!isset($_SESSION['email']) ||(trim ($_SESSION['email']) == '')) {
	header('location: login.php');
    exit();
	}
	
	include('../db/conn.php');

	$sq=mysqli_query($conn,"select * from `admin` where email='".$_SESSION['email']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['description'];
?>