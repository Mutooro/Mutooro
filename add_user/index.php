<!-- <?php if(!isset($username)){
	$username ='';
} ?> -->

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>Login page</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="img_container">
			<img src="user.png" alt="">
		</div>
		<form action="validate.php" method="POST" autocomplete="off">
			<!-- <input type="text" name="name" placeholder="Full name" required> -->
			<input type="text" name="username" placeholder="username" value="" <br />
			

<!-- <input type="email" name="email" placeholder="Email" required> -->
			
			<input type="password" name="user_password" placeholder="password"><br>
			
			<input class="register_button" type="submit" name="submit" value="LOGIN">
			<p><a href="signup.php">Dont have account?</a></p>
		</form>
</div>
</div>
</body>
</html>