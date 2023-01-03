<?php
include 'connect.php';
session_start();
 ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> View Recent payments</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<!-- 	<div class="side-menu">
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
</div> -->
	<div class="container">
		<div class="header">
		<div class="nav">
			<div class="search">
	<p>Hi,&nbsp;<?php echo $_SESSION['username']; ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
				
				
			</div>
			<div class="user">

				
				<a href="home.php" class="btn"> Dashboard</a>
				<img src="notifications.png">
				<div class="img-case">
					<img src="user.png">
				</div>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>


<div class="content">
<div class="content-2">
	<div class="recent-payments">
		<div class="title">
					<h2>
						Recent Payments
					</h2>
					
				</div>
<table >
	<thead>
	<tr>
		<th scope="col">S/N</th>
		<th scope="col">Name</th>
		<th scope="col">School</th>
		<th scope="col">Amount</th>
		<th scope="col">Date</th>
		<th scope="col">Operation</th>
	</tr>
	</thead>
	<tbody>
		<?php


$s = "select * from recent_payments";
$result = mysqli_query($con, $s);
if($result){
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$name = $row['name'];
	$school = $row['school'];
	$amount = $row['amount'];
	$date = $row['date_created'];
	# code...
	echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$school.'</td>
<td>'.$amount.'</td>
<td>'.$date.'</td>
<td><img src="info.png"></td>


	</tr>';
}
}
		 ?>
	</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
</body>
</html>