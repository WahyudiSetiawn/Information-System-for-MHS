<?php

	session_start();
	header('location:setUpNewResidenceForm.php');

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'microhousingsystem');
	
	if(isset($_POST['save'])){
		$address = $_POST['address'];
		$num_Units = $_POST['num_Units'];
		$size_Per_Unit = $_POST['size_Per_Unit'];
		$monthly_Rental = $_POST['monthly_Rental'];
		$staff_ID = $_POST['staff_ID'];
		
		mysqli_query($con, "INSERT INTO tb_residence VALUES ('','$address','$num_Units','$size_Per_Unit','$monthly_Rental','$staff_ID')") or die(mysqli_error($con));
	}

?>