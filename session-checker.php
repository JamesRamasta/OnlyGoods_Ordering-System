<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location:signin.php");
}
?>