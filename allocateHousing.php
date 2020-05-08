<html>
	<head>
		<title> Allocate Housing </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>	
	
	<body>
		<nav id="menu">
			<ul>
				<li><a href="logout.php"> LOGOUT </a></li>
                <li><a href="viewAllocateHousingForm.php"> VIEW ALLOCATE HOUSING </a></li>
				<li><a href="viewApplicationsHousingOfficerForm.php"> VIEW APPLICATIONS </a></li>
				<li><a href="homeHousingOfficer.php"> HOME </a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="submit-box">
				<div class="row">
					<div class="col-md-7 col-lg-12">
						<h3> Allocate Housing </h3>
							<form action="Update.php" method="post">
							
								<div class="form-group">
									<label>From Date</label><br>
									<input type="date" name="from_Date" class="setform-control" required><br>
								</div> 
								<div class="form-group">
									<label>Duration in Months</label><br>
                                    <select id="duration" name="duration">
										<option value="12">12</option>
                                        <option value="18">18</option>
									</select><br>
								</div>
                                <!--
								<div class="form-group">
									<label>End Date</label><br> 
								</div>-->
								<div class="form-group">
									<label>Unit ID</label><br>
									<input type="number" name="unit_ID" class="setform-control" required><br>
								</div>
								<div class="form-group">
									<label>Application ID</label><br>
									<input type="number" name="application_ID" class="setform-control" required><br>
                                    
								</div>
                                <div class="form-group">
                                	<label>Status</label><br>
                                    <select id="status" name="status">
										<option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Waitlist">Waitlist</option>
									</select><br></br>
								<button type="submit" class="btn btn-primary" name="save"> Allocate </button><br>
							</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>