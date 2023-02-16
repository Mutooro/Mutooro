<?php 
session_start();

if(isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    //connect to db
    include 'connect.php';

    //check if current password is correct

    $query = "SELECT * FROM add_user WHERE username = '$username'";
    $result = $db->query($query);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $db_password = $row['password'];

        if(password_verify($current_password, $db_password)){
           
            if($new_password == $confirm_password && $new_password != $current_password){
                //hash the password
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                //update the database
                $query = "UPDATE add_user SET password='$hashed_password' WHERE username='$username'";
                $db->query($query);

                echo "<script> alert('your password has been change')</script>";
            }else{
                echo 'passwords dont match';
            }
        }else{
            echo "<script> alert('current password is incorrect')</script>";
        }
    }else{
        echo "<script> alert('Error: User not found')</script>";
    }

}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>change password</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="img_container">
			<img src="user.png" alt="">
		</div>
		<form action="" method="POST" autocomplete="off">
			<!-- <input type="text" name="name" placeholder="Full name" required> -->
			<input type="password" name="current_password" placeholder="Enter current password" value=""> <br />
			

<!-- <input type="email" name="email" placeholder="Email" required> -->
			
			<input type="password" name="new_password" placeholder="Enter new password"><br>
            <input type="password" name="confirm_password" placeholder="confirm new password"><br>
			
			<input class="register_button" type="submit" name="submit" value="CHANGE PASSWORD">
			<p><a href="index.php">Login with new password</a></p>
            <p><a href="home.php">Back to home</a></p>
		</form>
</div>
</div>
<script src="bootstrap.js"></script>
</body>
</html>