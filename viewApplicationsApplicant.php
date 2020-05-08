<?php

session_start();

$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, 'microhousingsystem');

if(mysqli_connect_errno()){
	echo "connection failed : " . mysqli_connect_errno();
}

?>