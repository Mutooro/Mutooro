<?php 
include 'connect.php';


if  (isset($_POST['submit'])) {
	# code...
	$name = $_POST['name'];
	$selected_options = $_POST['gender'];
	$course = $_POST['course'];
	$selected_option = $_POST["options"];
	$contact = $_POST['contact'];
	$residence = $_POST['residence'];
	$Home_area = $_POST['Home_area'];

	$sql = "insert into general_members (name, gender, course, Year_of_study, contact, residence, Home_area) 
	values ('$name','$selected_options','$course','$selected_option','$contact','$residence','$Home_area')";

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
	<title>Active Members</title>
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
			<input type="text" name="name" class="form-control" placeholder="Enter Student name" required>
		<br>
		<label class="gender">	Gender:</label>
			<input type="Radio" name="gender" value="Male">Male 
			<input type="Radio" name="gender"  value="Female">Female 
		
		<div class="form-group">
			<label>Course</label>
			<input type="text" name="course" class="form-control" placeholder="Enter Student course/program" required>
		</div><br>
		<div class="form-group">
		<label class="gender">Year of study:</label>
		<select name="options">
		<option value="">Please select...</option>	
    <option value="Year 1">Year 1</option>
    <option value="Year 2">Year 2</option>
    <option value="Year 3">Year 3</option>
	<option value="Year 4">Year 4</option>
	<option value="Year 5">Year 5</option>
  </select>
	</div>
		<div class="form-group">
			<label>Contact</label>
			<input type="text" name="contact" class="form-control" placeholder="Enter student contact" required>
		</div>
		<div class="form-group">
			<label>Residence</label>
			<input type="text" name="residence" class="form-control" placeholder="Enter student Residence" required>
		</div>
		<div class="form-group">
			<label>Home area</label>
			<input type="text" name="Home_area" class="form-control" placeholder="Enter student Home address" required>
		</div>
		<br>
		<input class="register_button" type="submit" name="submit" value="submit"><br><br>
		<p><a href="home.php">Back to home</a></p>
	</form>
</div>
</div>
</body>
</html>