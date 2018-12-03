<?php
require('connect.php');
include("auth_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard - Secured Page</title>
	<link rel="stylesheet" href="connect_db.css" />
</head>
<body background-image="index.jpg", background-repeat="no-repeat", text-align="center", font-family="Cantarell">
	<div class="content">
		<p>Dashboard</p>
		<p>This is another secured page.</p>
		<p><a href="index.html">Home</a></p>
		<a href="logout.php">Logout</a>
	</div>
</body>
</html>
