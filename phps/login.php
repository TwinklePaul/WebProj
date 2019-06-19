<?php

	session_start();	
	require 'conn.php';
	
	$email=$_POST["username"];
	$pass=$_POST['password'];
	
	
			
	if (empty($email) || empty($pass))
	{ 
		echo "No name"	;
		mysqli_close($conn);
		header("Location: http://localhost/FinalProject/");
	}
	else
	{
		$result = mysqli_query($conn,"SELECT * FROM login_data WHERE user_id='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
		$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		if($count==1) 
		{
			$_SESSION["user_id"] = $row['user_id'];
	
				
			$authority=$row['status'];
			
				
			switch($authority)
			{
				case 0:
					header("Location:blocked.php");
					break;
				case 1:
					header("Location:active.php");
					break;
				case 2:
					header("Location:admin.php");
					break;
				default:
					header("Location: http://localhost/FinalProject/");
			}
		}
		else
		{
			echo("NO SUCH USER ID / PASSWORD EXISTS");
	
		}	
	}
?>

