<?php 

if($_SERVER['REQUEST_METHOD'] == 'GET') {
	session_start();

	if (isset($_SESSION['token'])) {	
		session_destroy();
		header("Location:/elephant_edu/app/views/login.php");
	}
}
