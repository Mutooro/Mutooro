<?php


include 'connect.php';
if(isset($_POST['submit'])){
    $data = $_POST;
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    //$encrypted_pass=md5($pass);
    // $pass= md5($pass);
    //hashing the password
    //$hash = password_hash($pass, PASSWORD_DEFAULT);
    $password=$_POST['password2'];
    //$encrypted_password=md5($password);
    // $password= md5($password);

    //hashing the password
   // $haash = password_hash($password, PASSWORD_DEFAULT);

//$sql="insert into user(username,email,password,password2) values('$name','$email','$encrypted_pass','$encrypted_password')";



if (empty($data['username']) ||
    empty($data['email']) ||
    empty($data['password']) ||
    empty($data['password2'])) {
        // $Err="Field is required";
    
    // die('Please fill all required fields!');
}

if ($data['password'] !== $data['password2']) {
   die('Password and Confirm password should match!');   
}
else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
{ 
die ("<center><font face='Verdana' size='2' color=red>Invalid email</font></center>");
}
else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    die ("Only letters and white space allowed");
  }
  

$sql="insert into user(username,email,password,password2) values('$name','$email','$pass','$password')";
$result=mysqli_query($con, $sql);

if($result){
    // echo "Data inserted successfully";
    header('location:login.php');
}
else{
    die(mysqli_error($con));
}
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script defer src="index.js"></script>
</head>
<body>
    <div class="container">
        <form id="form"  method="post" >
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2"name="password2" type="password" required>
                
                <div class="error"></div>
            </div>
            <button type="submit" name="submit" onclick="submitForm()">Sign Up</button>
        </form>
    </div>
</body>
</html>