<?php
session_start();
// header('location:login.php');
include 'connect.php';

$name=$_POST['username'];
$pass=$_POST['password'];
// $pass= md5($pass);

$s = "select * from user where username='$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num ==1 ){
    // create session.....

    $_SESSION['username'] = $name;
    header('location:index.php');
} else{
    // $reg = "insert into users(name,password) values ('$name','$password')";
    // mysqli_query($con, $reg);
    // echo "registered";
    //header('location:login.php');
    echo '<script>alert("Enter valid data")</script>';
    header('location:login.php');
}

?>