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
<body>
	<div class="form">
		<p>Dashboard</p>
		<p>This is another secured page.</p>
		<p><a href="index.php">Home</a></p>
		<a href="logout.php">Logout</a>
	</div>
</body>
</html>
