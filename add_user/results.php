<?php

include('connect.php');

if(isset($_POST['submit'])) 
{
	$name = filter_input(INPUT_POST, 'name');
	$username = filter_input(INPUT_POST, 'username');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'user_password');

if (empty($username)) {
	# code...
	$name_error = 'please insert your username';
}elseif(strlen($username) <6){
	$name_error ='username is too short';
}

if (empty($password)) {
	# code...
	$password_error = 'please insert password';
}elseif(strlen($password) <8){
	$password_error ='Password should have atleast 8 characters';
}
if(empty($name_error) && empty($password_error)){
	//header('location:index.html');
	//this is where am gonna insert data to the database

	$sql="insert into create_user(name,username,email,password) values('$name','$username','$email','$password')";
$result=mysqli_query($con, $sql);

if($result){
     //echo "Data inserted successfully";
    header('location:login.php');
}
else{
    die(mysqli_error($con));
}
}else{
	header('location:signup.php');
}
}




 ?>