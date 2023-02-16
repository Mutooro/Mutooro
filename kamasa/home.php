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
<style>
	a:hover{
padding: 15px;

	}
	.container .header .nav .search img{
		position: relative;
    width: 50px;
    height: 50px;
	}
	p{
		padding:10px;
	}
</style>
<body>
<div class="side-menu">
	<div class="brand-name">
	<!-- <img src="user.png"> -->
	<h2>KAMASA</h2>
	</div>
	<ul class="">
		<li><img src="dashboard (2).png">&nbsp;Dashboard</li>
		<a href="view_general_members.php"><li><img src="reading-book (1).png">&nbsp;Members</li></a>
		<a href="alumni.php"><li><img src="teacher2.png">&nbsp;Alumni</li></a>
		<a href="view_executive.php"><li><img src="school.png">&nbsp;Executive</li></a>
		<li><img src="payment.png">&nbsp;Projects</li>
		<li><img src="help-web-button.png">&nbsp;About</li>
		<a href="change_pw.php"><li class=""><img src="settings.png">&nbsp;Settings</li></a>
	</ul>
</div>
<div class="container">
	<div class="header">
	
		<div class="nav">
		
			<div class="search">
			<img src="user.png">
	<p>Hi,&nbsp;<?php echo $_SESSION['username']; ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="" placeholder="search...">

				<button type="submit" class=""><img src="search.png"></button>

			</div>
			<div class="user">

				
				<a href="general_members.php" class="btn"> Add New Student</a>
				<img src="notifications.png">
				<!-- <div class="img-case">
					<img src="user.png">
				</div> -->
				<a href="" class="" id="logout-button">Logout</a>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cards">
			<a href="view_general_members.php"><div class="card">
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
			</div></a>
			<a href="view_executive.php"><div class="card">
				<div class="box">
					<h1><?php $s = "select count(*) from executive_members";
					$result=$db->query($s);
					if ($result->num_rows > 0) {
						# code...
						while($row=$result->fetch_assoc()){
							echo $row["count(*)"];
						}
					}
					?></h1>
					<h3>Executives</h3>
				</div>
				<div class="icon-case">
					<img src="teachers.png">
				</div>
			</div></a>
			<a href="view_alumni.php"><div class="card">
				<div class="box">
					<h1><?php $s = "select count(*) from alumni";
					$result=$db->query($s);
					if ($result->num_rows > 0) {
						# code...
						while($row=$result->fetch_assoc()){
							echo $row["count(*)"];
						}
					}
					?></h1>
					<h3>Alumni</h3>
				</div>
				<div class="icon-case">
					<img src="schools.png">
				</div>
			</div></a>
			<a href="#"><div class="card">
				<div class="box">
					<h1>3500</h1>
					<h3>Projects</h3>
				</div>
				<div class="icon-case">
					<img src="income.png">
				</div>
			</div></a>
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
						<th>Year of study</th>
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
	$name = $row['name'];
	$course = $row['course'];
	$selected_option = $row["Year_of_study"];
	# code...
	echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$course.'</td>
<td>'.$selected_option.'</td>
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
					<a href="executive_members.php" class="btn">Add New</a>
					
				</div>
				<table>
				<tr>
						<!-- <th>S/N</th> -->
						<th>Name</th>
						<th>Course</th>
						<th>Position</th>
						<th>Option</th>
					</tr>	
					<tbody>
					<?php

//this query displays the last four rows in the table
$s = "(select * from executive_members order by id desc limit 4) order by id desc";
$result = mysqli_query($db, $s);
if($result){
while ($row = mysqli_fetch_assoc($result)) {
	// $id = $row['id'];
	$name = $row['name'];
	$course = $row['course'];
	$position = $row['position'];
	# code...
	echo '<tr>
	
<td>'.$name.'</td>
<td>'.$course.'</td>
<td>'.$position.'</td>
<td><a href="#" class="btn">View</a></td>
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
<script src="bootstrap.js"></script>
	
<!-- <script>

  const logoutButton = document.getElementById('logout-button');
  logoutButton.addEventListener('click', function() {
    if (confirm('Are you sure you want to log out?')) {
      // user confirmed logout
      window.location.href = 'index.php'; // replace '/login' with the URL of your login page
    }
	else{
		
	}
  });


</script> -->


<script>
  const logoutButton = document.getElementById('logout-button');
  logoutButton.addEventListener('click', function() {
    if (confirm('Are you sure you want to log out?')) {
      // user confirmed logout
      // perform logout actions, such as ending the PHP session
      fetch('logout.php').then(response => {
        if (response.ok) {
          // logout was successful, redirect to login page
          window.location.href = 'index.php'; // replace '/login' with the URL of your login page
        } else {
          // handle logout error
          alert('Logout failed: ' + response.statusText);
        }
      }).catch(error => {
        // handle fetch error
        alert('Logout failed: ' + error);
      });
    }
  });
</script>

</body>
</html>