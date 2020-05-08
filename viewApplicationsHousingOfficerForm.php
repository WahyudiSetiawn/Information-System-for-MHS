<html>
	<head>
		<title> View Applications(Housing Officer) </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>	
	
	<body>
		<nav id="menu">
			<ul>
				<li><a href="viewApplicationsHousingOfficerForm.php"> VIEW APPLICATIONS </a></li>
				<li><a href="homeHousingOfficer.php"> HOME </a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="view-box">
				<div class="row">
					<h2>View Applicants</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Residence ID</th>
									<th>Number of Units Available</th>
									<th>Monthly Rental</th>
                                    <th>Month Required</th>
                                    <th>Year Required</th>
									<th>Status</th><br>
									<th> </th>
								</tr>
								<?php
								include "viewApplicationsHousingOfficer.php"; 
								$residence_ID = 1;
								$view = mysqli_query($con, "SELECT residence_ID, num_Units, monthly_Rental, required_Month, required_Year, status FROM tb_residence INNER JOIN tb_application USING(residence_ID)");
								while($row=mysqli_fetch_array($view)){
								?>
								<form action="allocateHousing.php" method="get"> 
									<tr>
										<td> <?php echo $row['residence_ID']; ?> </td>
										<td> <?php echo $row['num_Units']; ?> </td>
										<td> <?php echo $row['monthly_Rental']; ?> </td>
                                        <td> <?php echo $row['required_Month']; ?></td>
                                        <td> <?php echo $row['required_Year']; ?></td>
                                        <td> <?php echo $row['status']; ?></td>
                                        

										<td> <a href="allocateHousing.php"><button type="submit" class="btn btn-primary">Allocate</button></a></td>
										</div>
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