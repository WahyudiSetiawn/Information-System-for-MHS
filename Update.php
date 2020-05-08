<?php

	session_start();
	header('location:viewAllocateHousingForm.php');

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'microhousingsystem');
	
	if(isset($_POST['save'])){
		$allocation_ID = $_POST['allocation_ID'];
		$from_Date = $_POST['from_Date'];
		$duration = $_POST['duration'];
		$end_Date = $_POST['end_Date'];
		$unit_ID = $_POST['unit_ID'];
		$applicant_ID = $_POST['applicantion_ID'];
		
		mysqli_query($con, "INSERT INTO tb_allocation VALUES ('','$allocation_ID','$from_Date','$duration','$end_Date','$unit_ID','$applicant_ID', '$status'") or die(mysqli_error($con));
		//mysqli_query($con, "UPDATE tb_application SET status='$status'");
		
		/*$Edate = $end_Date;
		if($duration == 12)
		{
			$Fdate = date('from_Date');
			$Edate = date('from_Date', strtotime('+12 month', strtotime($Fdate)));
			echo "$Edate";
		}
		else if($duration == 18)
		{
			$Fdate = date('from_Date');
			$Edate = date('from_Date', strtotime('+18 month', strtotime($Fdate)));
			echo "$Edate";
		}*/
	}
?>