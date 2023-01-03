<?php
include 'connect.php';
session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="side-menu">
	<div class="brand-name">
		<h1>Brand</h1>
	</div>
	<ul>
		<li><img src="dashboard (2).png">&nbsp;Dashboard</li>
		<li><img src="reading-book (1).png">&nbsp;Students</li>
		<li><img src="teacher2.png">&nbsp;Teachers</li>
		<li><img src="school.png">&nbsp;Schools</li>
		<li><img src="payment.png">&nbsp;Income</li>
		<li><img src="help-web-button.png">&nbsp;Help</li>
		<li><img src="settings.png">&nbsp;Settings</li>
	</ul>
</div>
<div class="container">
	<div class="header">
		<div class="nav">
			<div class="search">
	<p>Hi,&nbsp;<?php echo $_SESSION['username']; ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="" placeholder="search...">

				<button type="submit"><img src="search.png"></button>

			</div>
			<div class="user">

				
				<a href="recent_payments.php" class="btn"> Add New User</a>
				<img src="notifications.png">
				<div class="img-case">
					<img src="user.png">
				</div>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cards">
			<div class="card">
				<div class="box">
					<h1>2194</h1>
					<h3>Students</h3>
				</div>
				<div class="icon-case">
					<img src="students.png">
				</div>
			</div>
			<div class="card">
				<div class="box">
					<h1>53</h1>
					<h3>Teachers</h3>
				</div>
				<div class="icon-case">
					<img src="teachers.png">
				</div>
			</div>
			<div class="card">
				<div class="box">
					<h1>5</h1>
					<h3>Schools</h3>
				</div>
				<div class="icon-case">
					<img src="schools.png">
				</div>
			</div>
			<div class="card">
				<div class="box">
					<h1>3500</h1>
					<h3>Income</h3>
				</div>
				<div class="icon-case">
					<img src="income.png">
				</div>
			</div>
		</div>
		<div class="content-2">
			<div class="recent-payments">
				<div class="title">
					<h2>
						Recent Payments
					</h2>
					<a href="view_recent_payments.php" class="btn">View All</a>
				</div>
				<table>
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>School</th>
						<th>Amount</th>
						<th>Option</th>
					</tr>
					
					<tbody>
		<?php

//this query displays the last four rows in the table
$s = "(select * from recent_payments order by id desc limit 4) order by id desc";
$result = mysqli_query($con, $s);
if($result){
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$name = $row['name'];
	$school = $row['school'];
	$amount = $row['amount'];
	# code...
	echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$school.'</td>
<td>'.$amount.'</td>
<td><a href="#" class="btn">View</a></td>
	</tr>';
}
}
		 ?>
	</tbody>
				</table>
			</div>
			<div class="new-students">
				<div class="title">
					<h2>
						New Students
					</h2>
					<a href="#" class="btn">View All</a>
					
				</div>
				<table>
						<tr>
							<th>Profile</th>
							<th>Name</th>
							<th>Option</th>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><img src="info.png"></td>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><img src="info.png"></td>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><img src="info.png"></td>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><img src="info.png"></td>
						</tr>
						
					</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>