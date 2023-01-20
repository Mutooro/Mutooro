<?php
session_start();

//connect to db

$db = new mysqli('localhost','root','','registration');

if($_SERVER['REQUEST_METHOD']=='POST'){

    //get the submitted form data

    $username = $_POST['username'];
    $password = $_POST['password'];

    //getting user from the database

    $stmt = $db->prepare("SELECT * FROM add_user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    //verify password
    if(password_verify($password,$user['password'])){
        //log the user in
        $_SESSION['username'] = $user['username'];
        header('location:home.php');
        //exit();

    }else{
        //display an error
        echo 'invalid username or password';
    }
}
?>

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
            <h3>Login</h3>

		</div>
		<form action="" id="registrationForm" onsubmit="return validateForm()" method="POST" autocomplete="off">
			<!-- <input type="text" name="name" placeholder="Full name" required> -->
			<input type="text" name="username" id="username" placeholder="username" value=""> <br />
			

<!-- <input type="email" name="email" placeholder="Email" required> -->
			
			<input type="password" id="password" name="password" placeholder="password"><br>
			
			<input class="register_button" type="submit" name="submit" value="LOGIN">
			<p><a href="signup.php">Dont have account?</a></p>
		</form>
</div>
</div>
<!-- <script src="bootstrap.js"></script> -->
<script scr="script.js"></script>
</body>
</html>