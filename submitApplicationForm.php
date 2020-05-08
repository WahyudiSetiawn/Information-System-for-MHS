<html>
	<head>
		<title> Submit Application </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>	
	
	<body>
		<nav id="menu">
			<ul>
				<li><a href="logout.php"> LOGOUT </a></li>
				<li><a href="viewApplicationsApplicantForm.php"> VIEW APPLICATIONS </a></li>
				<li><a href="viewResidencesForm.php"> VIEW RESIDENCES </a></li>
				<li><a href="homeApplicant.php"> HOME </a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="submit-box">
				<div class="row">
					<div class="col-md-7 col-lg-12">
						<h3> Submit Application </h3>
							<form action="submitApplication.php" method="post">
								<div class="form-group">
									<label>Application Date</label><br>
									<input type="date" name="application_Date" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Required Month</label><br>
									<input type="month" name="required_Month" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Required Year</label><br>
									<input type="year" name="required_Year" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Status</label><br>
									<select id="status" name="status">
										<option value="New">New</option>
									</select><br>
								</div>
								<div class="form-group">
									<label>Email</label><br>
									<input type="email" name="email" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Residence ID</label><br>
									<input type="number" name="residence_ID" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Staff ID</label><br>
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