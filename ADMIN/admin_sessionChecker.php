<?php
session_start();
if(!isset($_SESSION['admin_name'])){
	header("location:admin_signin.php");
}
?>