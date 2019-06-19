<?php
	
	session_start();
	
	if ( isset( $_SESSION['user_id'] ) ) {
		require 'conn.php';
		
		$user=$_SESSION['user_id'];
		$add=$_POST['address'];
		$city=$_POST['city'];
		$dist=$_POST['district'];
		$state=$_POST['States'];
		$mobile=$_POST['phone'];
		$gender=$_POST['gen'];
		$course=$_POST['course'];
		$dept=$_POST['Dept'];
		
		
		if (empty($add) || empty($city) || empty($dist) || empty($state) || empty($mobile) || empty($gender) || empty($course) || empty($dept))
		{
			echo "FIELDS NOT SPECIFIED PROPERLY";
			/*mysqli_close($conn);
			header("location: http://localhost/twinkle/");*/
		}
		else
		{		
			
			$sql="UPDATE user_data SET address = '$add', city = '$city', district = '$dist', state = '$state', mobile = '$mobile', gender = '$gender', course = '$course', department = '$dept' where user_id='$user'";
					
			$result=mysqli_query($conn,$sql);
			echo $sql;				
			echo mysqli_error($conn);
		
				if($result)
				{
					
					echo("Data Inserted");
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

	
	