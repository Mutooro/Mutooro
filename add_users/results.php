<?php 

$db = new mysqli('localhost','root','','registration');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors = array();
//validate name
if(empty($_POST['name'])){
	$errors[]='Enter full name';
}else {
	$name = trim($_POST['name']);
}
    //validate username
    if(empty($_POST['username'])){
        $errors[] = 'Enter username';
    }else{
        $username = trim($_POST['username']);
    }

    //validate email
    if(empty($_POST['email'])){
        $errors[] = 'Enter email';
    }else{
        $email = trim($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = 'invalid email format';
        }
    }
    //validate password
    if(empty($_POST['password'])){
        $errors[] = 'Enter password';
    }else{
        $password = trim($_POST['password']);
        if(strlen($password)< 6){
            $errors[] = 'Password must be atleast 6 characters';
        }
    }
    //validate password2
    if(empty($_POST['password2'])){
        $errors[] = 'Enter password2';
    }else{
        $password2 = trim($_POST['password2']);
    }
    //check if passwords match
    if($password != $password2){
        $errors[] = 'passwords dont match';
    }
    //hashing the passwords
    $password = password_hash($password, PASSWORD_DEFAULT);
    $password2 = password_hash($password2, PASSWORD_DEFAULT);
    if(empty($errors)){
        //do db insertion
        
    //insert the new user 
    $stmt = $db->prepare("INSERT INTO add_user (name, username,email, password,password2) VALUES(?,?, ?, ?,?)");

    $stmt->bind_param("sssss",$name,$username,$email, $password,  $password2);
    $stmt->execute();
    $stmt->close();

    //redirect to login page

    header('location:index.php');
    exit();
    }else {
        //print errors
        echo '<h1>Error!</h1> 
        <p class="error">The following error(s) occurred:<br>';
        foreach($errors as $msg){
            echo "- $msg <br>";
        }
        echo "</p><p>Please <a href='signup.php'> try </a>again.</p>";
    }
}