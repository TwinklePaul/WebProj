<?php
	
	session_start();
	
	if ( isset( $_SESSION['user_id'] ) ) 
	{
		require 'conn.php';
		?>
		
		<!DOCTYPE html>

		<html>
		<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}
			
			td, th {
			  border: 1px solid #9e9624cf;
			  text-align: left;
			  padding: 8px;
			}
			tr:nth-child(odd) {
			  background-color: #F2E85C;

			}

			tr:nth-child(even) {
			  background-color: #d6cc46a8;

			}
		</style>

			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" type="text/css" href="http://localhost/FinalProject/css/style.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
			</head>
			
			<body>
				
				
				<div class="header">
					<h2>BRAINWARE UNIVERSITY</h2>
					<h5>GREAT FUTURE BEGINS HERE </h5>
				</div>


				<div class="row">
				
					<div class="card1">
						<div class="slide fade">
							<img src="http://localhost/FinalProject/SupportedFiles/download.jpg" style="height:600px; width:100%;">
						</div>
						<div class="slide fade">
							<img src="http://localhost/FinalProject/SupportedFiles/seminar.jpg" style="height:600px; width:100%;">
						</div>
						<div class="slide fade">
							<img src="http://localhost/FinalProject/SupportedFiles/bwu.jpg" style="height:600px; width:100%;">
						</div>
					</div>
				
					<div class="leftcolumn">
						<div class="card3">				
							<h3>STUDENT DETAILS:</h3>
						</div>
						
						
						<div class="card2">	
						<p>
						<?php
							echo "<center>";
						
							$option=$_POST['selectopt'];
							$user=$_SESSION['user_id'];
							
							if ($option=="display")
							{
								$sql="select * from user_data where user_id='$user'";
								$result=mysqli_query($conn,$sql);
								if ($result)
								{
									
									echo "<table>";
									echo  "<tr><td>Name:</td><td>Address:</td><td>City:</td><td>Dist:</td><td>State:</td><td>Mobile_No</td><td>Email</td><td colspan=2>Gender</td> <td>Course</td> <td>Department:</td> </tr>";
									
									while ($row=mysqli_fetch_assoc($result))
									{	
										echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["district"]."</td><td>".$row["state"]."</td><td>".$row["mobile"]."</td><td>".$row["user_id"]."</td><td colspan=2>".$row["gender"]."</td><td>".$row["course"]."</td><td>".$row["department"]."</td></tr>";
									}//End of while
									echo "</table>";
								}
							}
							else
								if ($option=="edit")
								{
									header("Location: http://localhost/FinalProject/phps/edit.php");									
								}
							else
								if ($option=="change")
								{
									header("Location: http://localhost/FinalProject/phps/change.php");									
								}
							else
								echo "WRONG CHOICE";	
						?>
						<p> 
						<form id="logout" action="http://localhost/FinalProject/phps/logout.php" method="post"> 
						<table>
							<tr>
							<td><input type="submit" name="submit" value="Logout" ><a href="https://localhost/FinalProject/"></a> </td>
							</tr>
						</table>
						</p>
						</form>
						</div>
						
					</div>
			
					<div class="rightcolumn">
						
						<div class="card2">
							<h3>Notice Board</h3>
							
							<div class="fakeimg">
							  <a href="https://www.brainwareuniversity.ac.in/blog/childrens-day-special-how-brainware-chisels-the-future-of-children-in-the-right-way/" target="_blank">
							<img src="http://localhost/FinalProject/SupportedFiles/blog01.png">Children's Day Special:</a></div>					
							<br>
							
							<div class="fakeimg">
							<a href="https://www.brainwareuniversity.ac.in/blog/how-artificial-intelligence-can-be-crucial-from-the-career-perspective/" target="_blank">
							<img src="http://localhost/FinalProject/SupportedFiles/blog02.png">Artificial Intelligence:</a></div>
							<br>
							
							<div class="fakeimg">
							 <a href="https://www.brainwareuniversity.ac.in/blog/what-you-must-consider-before-applying-for-a-phd-programme/"  target="_blank">
							<img src="http://localhost/FinalProject/SupportedFiles/blog03.png">PHD Programme:</a></div>
							<br>
							
						</div>
						
						<div class="card4">
							<h3>Follow Us</h3>
							<p>
								<a href="https://www.facebook.com/brainwareuniversity" target="_blank"> <i class="fa fa-facebook" style="font-size:40px;"></i> </a>
								<a href="https://twitter.com/BrainwareTweet" target="_blank"><i class="fa fa-twitter" style="font-size:40px;"></i></a>
								<a href="https://www.flickr.com/photos/brainwareindia/sets" target="_blank"><i class="fa fa-flickr" style="font-size:40px;"></i></a>
								<a href="https://www.youtube.com/brainwareuniversitykolkata" target="_blank"><i class="fa fa-youtube" style="font-size:40px;"></i></a>
							</p>
						</div>
					</div>
				
				</div>

				<div class="footer">
				  <h2>Copyright &copy Twinkle Paul || 2019 || B.Tech 4th Semester</h2>
				</div>
				
						
				<script type="text/javascript" src="http://localhost/FinalProject/javas/anime.js"></script>
			</body>
		</html>
<?php
	}
	else 
	{
		header("Location: http://localhost/FinalProject/");
	}	
?>