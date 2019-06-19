<?php

	session_start();

	if ( isset( $_SESSION['user_id'] ) ) {
		require 'conn.php';
		
						
		$access=$_POST['edit'];
		$username=$_POST['user'];
		$user=$_SESSION['user_id'];
		
		$sql="UPDATE login_data SET status = '$access' where user_id='$username'";

		$result=mysqli_query($conn,$sql);
		echo $sql;				
		echo mysqli_error($conn);
		if ($result)
		{
			echo("Data Inserted");
			header("Location:http://localhost/FinalProject/phps/admin.php");
		}
						
	}
	else 
	{
		header("Location: http://localhost/FinalProject/");
	}	
?>