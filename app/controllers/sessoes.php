<?php 

if($_SERVER['REQUEST_METHOD'] == 'GET') {
	session_start();

	if (isset($_SESSION['token'])) {
		header("Location:app/views/dashboard.php");

	} else {
		header("Location:app/views/login.php");
	
	}
}
