<?php 
$db = mysqli_connect('localhost', 'root','','registration');

if(!$db){
	die('Connection failed'.mysqli_error());
}

 ?>