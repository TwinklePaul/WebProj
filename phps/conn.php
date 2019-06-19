<?php
	$conn=mysqli_connect("localhost","root","","students");
	
	if(!$conn)
		echo "Unable to connect".mysqli_error($conn);
?>
