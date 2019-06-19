<?php
	
	session_start();
	
	require 'conn.php';
	
	$name=$_POST["name"];
	$userid=$_POST["email"];
	$pass=$_POST['pass2'];
	$add=$_POST['address'];
	$city=$_POST['city'];
	$dist=$_POST['district'];
	$state=$_POST['States'];
	$mobile=$_POST['phone'];
	$gender=$_POST['gen'];
	$course=$_POST['course'];
	$dept=$_POST['Dept'];
	
	if (empty($name) || empty($userid) || empty($pass) || empty($add) || empty($city) || empty($dist) || empty($state) || empty($mobile) || empty($gender) || empty($course) || empty($dept))
	{
		echo "FIELDS NOT SPECIFIED PROPERLY";
		/*mysqli_close($conn);
		header("location: http://localhost/twinkle/");*/
	}
	else
	{
		$sql2="insert into login_data (user_id,password,flag, status) values ('$userid','$pass','1','1')";
		$result2=mysqli_query($conn,$sql2);
				echo $sql2;
				echo mysqli_error($conn);
				
		$sql="insert into user_data (user_id, name, address, city, district, state, mobile, gender, course, department) values ('$userid','$name','$add','$city','$dist','$state','$mobile','$gender','$course','$dept')";
				
		$result=mysqli_query($conn,$sql);
				echo $sql;				
				echo mysqli_error($conn);
	
			if($result and $result2)
			{
				
				echo("Data Inserted");
				header("Location:http://localhost/FinalProject/htmls/register.html");
			}
			else
			{
				echo ("Unable to insert");
			}
		mysqli_close($conn);
	}
?>

	
	