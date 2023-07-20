<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		var_dump($_COOKIE['status']);
		header('location: login.php');
	}
?>