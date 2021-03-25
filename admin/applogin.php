<?php
session_start();
	require_once '../db/conn.php';
	$email = mysqli_real_escape_string($conn, trim($_POST['email']));
	$password = mysqli_real_escape_string($conn, trim($_POST['password']));
	$q_login = $conn->query("SELECT * FROM `admin` WHERE `email` = '$email' && `password` = '$password'") or die(msqli_error());
	$f_login = $q_login->fetch_array();
	$v_login = $q_login->num_rows;
	if($v_login > 0){
	    $_SESSION['email'] = $f_login['email'];
	    header('location: index.php');
	}else{
		
			echo "<script>alert('Please check your login credentials and try again!')</script>";
            echo "<script>window.location = 'login.php'</script>";
		
		}