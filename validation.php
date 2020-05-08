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

if($num > 0){
 
	$data = mysqli_fetch_assoc($result);
 
	// cek jika user login sebagai admin
	if($data['user_type']=="housing officer"){
 
		// buat session login dan username
		$_SESSION['username'] = $name;
		$_SESSION['user_type'] = "housing officer";
		// alihkan ke halaman dashboard admin
		header("location:homeHousingOfficer.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['user_type']=="applicant"){
		// buat session login dan username
		$_SESSION['username'] = $name;
		$_SESSION['user_type'] = "applicant";
		// alihkan ke halaman dashboard pegawai
		header("location:homeApplicant.php");
		 
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php");
	}	
}
else{
	header("location:login.php");
}

?>