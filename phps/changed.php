<?php
	
	session_start();
	
	if ( isset( $_SESSION['user_id'] ) ) {
		require 'conn.php';
	
		$pass=$_POST['pass2'];
		$user=$_SESSION['user_id'];
		
		if (empty($pass))
		{
			echo "FIELDS NOT SPECIFIED PROPERLY";
		}
		else
		{				
			$sql="update login_data set password = '$pass' where user_id='$user'";
					
			$result=mysqli_query($conn,$sql);
			echo $sql;				
			echo mysqli_error($conn);
		
				if($result)
				{
					
					echo("PASSWORD CHANGED");
					header("Location:http://localhost/FinalProject/phps/active.php");
				}
				else
				{
					echo ("Unable to insert");
				}
			mysqli_close($conn);
		}
	}
?>

	
	