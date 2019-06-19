
<?php

	session_start();

	if ( isset( $_SESSION['user_id'] ) ) {
		require 'conn.php';
		include("../htmls/adminchoice.html");
	} else {
		header("Location: http://localhost/FinalProject/");
	}
?>