<html>
	<head>
		<title> View Residences </title>
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
					<h2>View Residences</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Residence ID</th>
									<th>Address</th>
									<th>Number of Units Available</th>
									<th>Size of Each Unit</th>
									<th>Monthly Rental</th>
									<th>Housing Officer</th>
									<th> </th>
								</tr>
								<?php
								include "viewResidences.php";
								$residence_ID = 1;
								$view = mysqli_query($con, "SELECT * FROM tb_residence");
								while($row=mysqli_fetch_array($view)){
								?>
								<form action="submitApplication.php" method="get">
									<tr>
										<td> <input type="checkbox" name="residence_ID"> <?php echo $residence_ID++; ?> </td>
										<td> <?php echo $row['address']; ?> </td>
										<td> <?php echo $row['num_Units']; ?> </td>
										<td> <?php echo $row['size_Per_Unit']; ?> </td>
										<td> <?php echo $row['monthly_Rental']; ?> </td>
										<td> <?php echo $row['staff_ID']; ?> </td>
										<td> <a href="submitApplication.php?residenceID=residence_ID"><button type="submit" class="btn btn-primary">Submit Application</button></a></td>
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