<?php
include 'connect.php';
session_start();
 ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Kamasa Alumni</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style>
		.table{
			padding: 2px;
			margin: 10px;
			
		}
		tr:nth-child(2n){
			background-color: whitesmoke;
			
		}
		.title{
			border:0px;
		}
		.content .content-2{
    min-height: 60vh;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}
.content .content-2 .recent-payments{
    min-height: 50vh;
    flex: 5;
    background: white;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: flex;
    flex-direction: column;
}
.container{
    position: relative;
    right: 0;
    width: 85vw;
    height: 100%;
    background: black;
}
.container .header{
    position: fixed;
    top: 0;
    right: 0;
    width: 100vw;
    height: 12vh;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}
.container .header .nav{
    width: 90%;
    display: flex;
    align-items: left;
}

.container .header .nav .search{
    flex: 3;
    display: flex;
    justify-content:center;
    
}
.container .header .nav .search p{
    font-size: 24px;
    color: #f05462;
	
}



.container .header .nav .user{
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: left;
   
}
.container .header .nav .user .btn{
	background: #f05462;
    color: white;
    padding: 5px 10px;
    text-align: center;
}
.container .header .nav .user .btn:hover{
	color: #f05462;
    background: white;
    padding: 3px 8px;
    border: 2px solid #f05462;
}
.container .header .nav .user img{
    width: 40px;
    height: 40px;
}
.container .header .nav .user .img-case{
    position: relative;
    width: 50px;
    height: 50px;

}
.container .header .nav .user .img-case img{
    position: absolute;top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}	
a{
	text-decoration: none;
}
a:hover{
padding: 15px;

	}
	</style>
</head>
<body>
	<!-- <div class="side-menu">
	<div class="brand-name">
		<h1>Brand</h1>
	</div>
	<ul>
		<a href="home.php"><li><img src="dashboard (2).png">&nbsp;Dashboard</li></a>
		<li><img src="reading-book (1).png">&nbsp;Students</li>
		<li><img src="teacher2.png">&nbsp;Teachers</li>
		<li><img src="school.png">&nbsp;Schools</li>
		<li><img src="payment.png">&nbsp;Income</li>
		<li><img src="help-web-button.png">&nbsp;Help</li>
		<a href=""><li><img src="settings.png">&nbsp;Settings</li></a>
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
<!-- <a href="home.php">Dashboard</a>
<p> <?php echo $_SESSION['username']; ?> </p> -->

<div class="content">
<br/>

<div class="content-2">
	
	<div class="recent-payments">
		<div class="title">
					<h2>
						KAMASA Alumni
					</h2>
					
				</div>
<table class="table" id="table">
	<thead>
	<tr>
		<th scope="col">S/N</th>
		<th scope="col">Name</th>
		<th scope="col">Gender</th>
		<th scope="col">course</th>
		<th scope="col">Year Of Completion</th>
		<th scope="col">contact</th>
		<th scope="col">Residence</th>
		<th scope="col">Work Place</th>
		<th scope="col">Date Created</th>
		
	</tr>
	</thead>
	<tbody>
		<?php


$s = "select * from alumni ";
$result = mysqli_query($db, $s);
if($result){
while ($row = mysqli_fetch_assoc($result)) {
	// $id = $row['id'];
	// $name = $row['name'];
	// $selected_options = $row['gender'];
	// $course = $row['course'];
	// $selected_option = $row['Year_of_study'];
	// $contact = $row['contact'];
	// $residence = $row['residence'];
	// $Home_area = $row['Home_area'];
	// $date = $row['Date_created'];
    $id = $row['id'];
    $name = $row['name'];
	$selected_options = $row['gender'];
	$course = $row['course'];
	$year_of_study = $row["Year_of_study"];
	$contact = $row['contact'];
	
	$residence = $row['residence'];
	$work_place = $row['work_place'];
    $date = $row['Date_created'];
	# code...
	echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$selected_options.'</td>
<td>'.$course.'</td>
<td>'.$year_of_study.'</td>
<td>'.$contact.'</td>
<td>'.$residence.'</td>
<td>'.$work_place.'</td>
<td>'.$date.'</td>



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