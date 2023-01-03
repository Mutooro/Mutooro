<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
	# code...
	$name = $_POST['name'];
	$school = $_POST['school'];
	$amount = $_POST['amount'];

	$sql = "insert into recent_payments (name, school, amount) values ('$name','$school','$amount')";

	$result = mysqli_query($con,$sql);
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
	<title>Recent Payments</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background-color: royalblue;
	margin-top: 50px;
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
		</div>
		<div class="form-group">
			<label>School</label>
			<input type="text" name="school" class="form-control" placeholder="Enter School" required>
		</div>
		<div class="form-group">
			<label>Amount</label>
			<input type="text" name="amount" class="form-control" placeholder="Enter amount" required>
		</div><br>
		<input class="register_button" type="submit" name="submit" value="submit">
	</form>
</div>
</div>
</body>
</html>