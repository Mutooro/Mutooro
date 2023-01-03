<!-- <?php if(!isset($username)){
	$username ='';
} ?> -->

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>Signup page</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="img_container">
			<img src="user.png" alt="">
		</div>
		<form action="results.php" method="POST" autocomplete="off">
			<input type="text" name="name" placeholder="Full name" required>
			<input type="text" name="username" placeholder="username" value="<?php echo htmlspecialchars($username) ?>" <br />
			<?php if(isset($name_error)){ ?>
				<p><?php echo $name_error ?></p>
			<?php } ?>

			<input type="email" name="email" placeholder="Email" required>
			
			<input type="password" name="user_password" placeholder="password"><br>
			<?php if(isset($password_error)){ ?>
				<p><?php echo $password_error ?></p>
			<?php } ?>
			<input class="register_button" type="submit" name="submit" value="REGISTER">
			<p><a href="index.php">Already have account?</a></p>
		</form>
</div>
</div>
</body>
</html>