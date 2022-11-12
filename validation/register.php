<!-- <?php


include 'connect.php';
if(isset($_POST['submit'])){
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


?> -->