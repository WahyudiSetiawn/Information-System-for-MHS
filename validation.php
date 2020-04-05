<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'microhousingsystem');

$name = $_POST['user'];
$pass = $_POST['password'];
$type = $_POST['type'];

$s = " select * from tb_user where username = '$name' && password = '$pass' && user_type = '$type'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	header('location:login.php');
}

?>