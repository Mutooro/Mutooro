<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.form{
	width: 250px;
	height: 380px;
	background: linear-gradient(to top, rgba(0,0,0,0.8)50%, rgba(0,0,0,0.8)50%);
	position: absolute;
	top: 150px;
	left: 40%;
	border-radius: 10px;
	padding: 25px;

}
.form h2{
	width: 220px;
	font-family: sans-serif;
	text-align: center;
	color: #ff7200;
	font-size: 22px;
	background-color: #fff;
	border-radius: 10px;
	margin: 2px;
	padding: 8px;
}
.form input{
	width: 240px;
	height: 35px;
	background: transparent;
	border-bottom: 1px solid #ff7200;
	border-top: none;
	border-right: none;
	border-left: none;
	color: #fff;
	font-size: 15px;
	letter-spacing: 1px;
	font-family: sans-serif;
	margin-top: 30px;
}
.form input:focus{
	outline: none;
}
::placeholder{
	color: #fff;
	font-family: arial;
}
.btrn{
	width: 240px;
	height: 40px;
	background: #ff7200;
	cursor: pointer;
	color: #fff;
	border: none;
	margin-top: 30px;
	font-size: 18px;
	border-radius: 10px;
	transition: .4s ease;
}
.btrn:hover{
	background: #fff;
	color: #ff7200;
}
.btrn a{
	text-decoration: none;
	color: #000;
	font-weight: bold;
}
.form .link{
	font-family: arial, helvetica, sans-serif;
	font-size: 17px;
	padding-top: 20px;
	text-align: center;
}
.form .link a{
	text-decoration: none;
	color: #ff7200;
}
.link{
	color: white;
}
	</style>

</head>
</head>
<body>
<div class="main">
		<div class="navbar">
		<div class="icon">
			<h2 class="logo">Bellasoft Inc</h2>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">SERVICE</a></li>
				<li><a href="#">DESIGN</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
		</div>
		<div class="search">
			<input class="srch" type="search" name="" placeholder="Type to search">
			<a href="#"><button class="btn">Search</button></a>
		</div>
	
	<div class="form">
		<h2>Signup Here</h2>
		<input type="email" name="email" placeholder="Enter email">
		<input type="password" name="password" placeholder="Enter password">
		<button class="btrn"><a href="#">Signup</a></button>

		<p class="link">Already have an account?<br>
	<a href="index.php">Login</a></p>

	</div>
</div>
</div>
</body>
</html>