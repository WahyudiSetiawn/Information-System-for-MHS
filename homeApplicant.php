<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>

<html>
<head>
<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<nav>
	<body>
		<nav id="menu">
		<ul>
			<li><a href="logout.php"> LOGOUT </a></li>
 			<li><a href="ViewApplicationsApplicantForm.php"> VIEW APPLICATIONS </a></li> 
			<li><a href="viewResidencesForm.php"> VIEW RESIDENCES </a></li>
			<li><a href="homeApplicant.php"> HOME </a></li>
		</ul>
	</nav>	
</head>
<body>
	
	<div class="container">
	
	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
	
	</div>
	
</body>

</html>