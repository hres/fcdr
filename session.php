<?php 

			
			session_start();
		if(!isset($_SESSION['currentuser'])) {
			header("Location: login.php");
			die();
		//echo "Your session is running " . $_SESSION['userName'];
		}
			?>