<html>
	<head>
		<title> Set Up New Residence </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>

	<body>
		<nav id="menu">
			<ul>
				<li><a href="logout.php"> LOGOUT </a></li>
				<li><a href="allocatingHousing.php"> ALLOCATE HOUSING </a></li>
				<li><a href="viewApplicationsHousingOfficerForm.php"> VIEW APPLICATIONS </a></li>
				<li><a href="homeHousingOfficer.php"> HOME </a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="setUp-box">
				<div class="row">
					<div class="col-md-6 col-lg-12">
						<h3> Set Up New Residence </h3>
							<form action="setUpNewResidence.php" method="post">
								<div class="form-group">
									<label>Address</label><br>
									<input type="text" name="address" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Number of Units Available</label><br>
									<input type="number" name="num_Units" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Size of Each Unit</label><br>
									<input type="number" name="size_Per_Unit" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Monthly Rental</label><br>
									<input type="number" name="monthly_Rental" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Housing Officer ID</label><br>
									<input type="number" name="staff_ID" class="setform-control" required><br>
								</div>
								<button type="submit" class="btn btn-primary" name="save"> Submit </button><br>
							</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>