<html>
	<head>
		<title> View Applications (Applicant) </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>	
	
	<body>
		<nav id="menu">
			<ul>
				<li><a href="viewApplicationsApplicantForm.php"> VIEW APPLICATIONS </a></li>
				<li><a href="submitApplicationForm.php"> SUBMIT APPLICATION </a></li>
				<li><a href="homeApplicant.php"> HOME </a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="view-box">
				<div class="row">
					<h2>View Applications</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Residence ID</th>
									<th>Number of Units Available</th>
									<th>Monthly Rental</th>
									<th>Application Status</th>
									<th> </th>
								</tr>
								<?php
								include "viewApplicationsApplicant.php";
								$residence_ID = 1;
								$view = mysqli_query($con, "SELECT residence_ID, num_Units, monthly_Rental, status FROM tb_residence INNER JOIN tb_application USING(residence_ID)"); //merge two table
								while($row=mysqli_fetch_array($view))
								{
								?>
									<tr>
										<td> <?php echo $row['residence_ID']; ?></td>
										<td> <?php echo $row['num_Units']; ?> </td>
										<td> <?php echo $row['monthly_Rental']; ?> </td>
										<td> <?php echo $row['status']; ?> </td>
									</tr>
								</form>
								<?php } ?>
							</thead>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>