<?php
	
	session_start();
	
	if ( isset( $_SESSION['user_id'] ) ) {
		require 'conn.php';
		include("../htmls/blocked.html");
		session_destroy();
	} else {
		header("Location: http://localhost/FinalProject/");
	}	
?>
