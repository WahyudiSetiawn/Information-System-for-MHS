<?php

	session_start();
	header('location:submitApplicationForm.php');

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'microhousingsystem');
	
	if(isset($_POST['save'])){
		$application_Date = $_POST['application_Date'];
		$required_Month = $_POST['required_Month'];
		$required_Year = $_POST['required_Year'];
		$status = $_POST['status'];
		$email = $_POST['email'];
		$residence_ID = $_POST['residence_ID'];
		$staff_ID = $_POST['staff_ID'];
		
		mysqli_query($con, "INSERT INTO tb_application VALUES ('','$application_Date','$required_Month','$required_Year','$status','$email','$residence_ID','$staff_ID')") or die(mysqli_error($con));
	}

?>