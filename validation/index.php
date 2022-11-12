<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
    <head>
        <title>Home page</title>
        <link rel="stylesheet" href="bootstrap.css" type="text/css">
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                background: gray;
            }
        </style>
    </head>
    <body>
<div class="contianer my-5 p-5">
    <!-- <a href="logout.php" class="float-right">Logout</a> -->
        <h3>welcome <?php echo $_SESSION['username']; ?> </h3>
        <button class="btn btn-primary my-5" ><a href="logout.php" class="text-light">Logout</a></button>
        </div>
    </body>


</html>