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
	<img src="user.png">
	</div>
	<ul class="">
		<li><img src="dashboard (2).png">&nbsp;Dashboard</li>
		<a href="view_general_members.php"><li><img src="reading-book (1).png">&nbsp;Members</li></a>
		<li><img src="teacher2.png">&nbsp;Alumni</li>
		<li><img src="school.png">&nbsp;Executive</li>
		<li><img src="payment.png">&nbsp;Projects</li>
		<li><img src="help-web-button.png">&nbsp;About</li>
		<a href="change_pw.php"><li class=""><img src="settings.png">&nbsp;Settings</li></a>
	</ul>
</div>
<div class="container">
	<div class="header">
		<div class="nav">
			<div class="search">
	<p>Hi,&nbsp;<?php echo $_SESSION['username']; ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="" placeholder="search...">

				<button type="submit" class=""><img src="search.png"></button>

			</div>
			<div class="user">

				
				<a href="general_members.php" class="btn"> Add New Student</a>
				<img src="notifications.png">
				<div class="img-case">
					<img src="user.png">
				</div>
				<a href="logout.php" class="">Logout</a>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cards">
			<div class="card">
				<div class="box">
					<h1><?php $s = "select count(*) from general_members";
					$result=$db->query($s);
					if ($result->num_rows > 0) {
						# code...
						while($row=$result->fetch_assoc()){
							echo $row["count(*)"];
						}
					}
					?>
					</h1>
					<h3>Members</h3>
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
						General Members
					</h2>
					<a href="view_general_members.php" class="btn">View All</a>
				</div>
				<table>
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Course</th>
						<th>Contact</th>
						<th>Option</th>
					</tr>
					
					<tbody>
		<?php

//this query displays the last four rows in the table
$s = "(select * from general_members order by id desc limit 4) order by id desc";
$result = mysqli_query($db, $s);
if($result){
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$name = $row['Name'];
	$course = $row['course'];
	$contact = $row['Contact'];
	# code...
	echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$course.'</td>
<td>'.$contact.'</td>
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
						Executives
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
							<td><a href="#" class=""><img src="info.png"></a></td>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><a href="#" class=""><img src="info.png"></a></td>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><a href="#" class=""><img src="info.png"></a></td>
						</tr>
						<tr>
							<td><img src="user.png"></td>
							<td>Mutooro Martin</td>
							<td><a href="#" class=""><img src="info.png"></a></td>
						</tr>
						
					</table>
			</div>
		</div>
	</div>
</div>
<script src="bootstrap.js"></script>
</body>
</html>