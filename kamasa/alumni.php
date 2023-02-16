<?php 
include 'connect.php';


if  (isset($_POST['submit'])) {
	# code...
	$name = $_POST['name'];
	$selected_options = $_POST['gender'];
	$course = $_POST['course'];
	$year_of_study = $_POST["year_of_study"];
	$contact = $_POST['contact'];
	
	$residence = $_POST['residence'];
	$work_place = $_POST['work_place'];

	$sql = "insert into alumni (name, gender, course, Year_of_study, contact,residence, work_place) 
	values ('$name','$selected_options','$course','$year_of_study','$contact','$residence','$work_place')";

	$result = mysqli_query($db,$sql);
	if($result){
		// echo "Data inserted";
		header('location:home.php');
	}else{
		die('Connection failed'.mysqli_error());
	}
}






 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Add Alumni</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background-color: royalblue;
	margin-top: 50px;
		}
		
		select{
			text-align: left;
			width:63%;
			border:none;
			border-radius: 50px;
			padding:5px 2px;
		}
		input[type=radio]{
			width:25%;
			padding: 30px;
		}
		.gender{
			color:#111273;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="card">
	<form method="POST" autocomplete="off">
		<div class="form-group">
			<div class="img_container">
			<img src="user.png" alt="">
		</div>
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Alumni name" required>
		<br>
		<label class="gender">	Gender:</label>
			<input type="Radio" name="gender" value="Male">Male 
			<input type="Radio" name="gender"  value="Female">Female 
		
		<div class="form-group">
			<label>Course</label>
			<input type="text" name="course" class="form-control" placeholder="Enter course/program attained" required>
		</div><br>
		<div class="form-group">
		<label class="">Year of Completion:</label>
        <input type ="text" name="year_of_study" class="form-control" placeholder="Enter year of completion" required>
    </div>
		<div class="form-group">
			<label>Contact</label>
			<input type="text" name="contact" class="form-control" placeholder="Enter Alumni contact" required>
		
		<div class="form-group">
			<label>Residence</label>
			<input type="text" name="residence" class="form-control" placeholder="Enter Alumni Residence" required>
		</div>
		<div class="form-group">
			<label>Home area</label>
			<input type="text" name="work_place" class="form-control" placeholder="Enter current place of work" >
		</div>
		<br>
		<input class="register_button" type="submit" name="submit" value="submit"><br><br>
		<p><a href="home.php">Back to home</a></p>
	</form>
</div>
</div>
</body>
</html>