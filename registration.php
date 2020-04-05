<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'microhousingsystem');

$name = $_POST['user'];
$pass = $_POST['password'];
$full = $_POST['full'];
$email = $_POST['email'];
$type = $_POST['type'];

$s = " select * from tb_user where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Username Already Taken ";
}else{
	$reg = " insert into tb_user(username , password, fullname, email, user_type) values ('$name' , '$pass', '$full', '$email', '$type')";
	mysqli_query($con, $reg);
	echo" Registration Succesful ";
}

?>