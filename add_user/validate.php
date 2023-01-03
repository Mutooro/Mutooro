<?php

// header('location:login.php');
include 'connect.php';
session_start();

$username=$_POST['username'];
$password=$_POST['user_password'];
// $pass= md5($pass);

$s = "select * from create_user where username='$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num ==1 ){
    // create session.....

    $_SESSION['username'] = $username;
    header('location:home.php');
} else{
    // $reg = "insert into users(name,password) values ('$name','$password')";
    // mysqli_query($con, $reg);
    // echo "registered";
    //header('location:login.php');
   // echo '<script>alert("Enter valid data")</script>';
    header('location:index.php');
}

?>