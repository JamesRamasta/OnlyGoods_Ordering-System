<?php
	session_start();
	unset($_SESSION['user_name']);
	unset($_SESSION['password']);
	header("location:index.php");
?>