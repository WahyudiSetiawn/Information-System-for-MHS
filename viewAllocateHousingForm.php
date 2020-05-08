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
     			<li><a href="viewAllocateHousingForm.php"> VIEW ALLOCATE HOUSING </a></li>
				<li><a href="homeHousingOfficer.php"> HOME </a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="view-box">
				<div class="row">
					<h2>View Allocated Housing</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Allocation ID</th>
									<th>From Date</th>
									<th>Duration</th>
                                    <th>End Date</th>
                                    <th>Unit ID</th>
									<th>Application ID</th>
                                    <th>Status</th>
									<th> </th>
								</tr>
								<?php
								include "viewAllocateHousing.php"; 
								$residence_ID = 1;
								$view = mysqli_query($con, "SELECT allocation_ID, from_Date, duration, end_Date, unit_ID, application_ID, status FROM tb_allocation INNER JOIN tb_application USING(application_ID)");
								while($row=mysqli_fetch_array($view)){
								?>
<!--								<form action="allocateHousing.php" method="get">  -->
									<tr>
										<td> <?php echo $row['allocation_ID']; ?> </td>
										<td> <?php echo $row['from_Date']; ?> </td>
										<td> <?php echo $row['duration']; ?> </td>
                                        <td> <?php echo $row['end_Date']; ?></td>
                                        <td> <?php echo $row['unit_ID']; ?></td>
                                        <td> <?php echo $row['applicantion_ID']; ?></td>
                                        <td> <?php echo $row['status']; ?></td>
                                     
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