<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MACA | Login</title>
	<link rel="stylesheet" href="connect_db.css" />
</head>
<body background-image="index.jpg", background-repeat="no-repeat", text-align="center", font-family="Cantarell">
	<?php
	require('connect.php');
	session_start();
	// If form submitted, insert values into the database.
	if (isset($_POST['username'])){
        // removes backslashes
		$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		//Checking is user existing in the database or not
			$query = "SELECT * FROM `login` WHERE username='$username'
			and password='".md5($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['username'] = $username;
				// Redirect user to index.html
				header("Location: index.html");
			}else{
				echo "<div class='content'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='login.php'>Login</a></div>";
			}
    }else{
	?><br><br><br><br><br><br>
		<div class="content">
			<h1>Masuk | Log In</h1>
			<form action="" method="post" name="login">
				<input type="text" name="username" placeholder="Username" required />
				<input type="password" name="password" placeholder="Password" required />
				<input name="submit" type="submit" value="Login" />
			</form>
			<p>Belum registrasi? <a href='regis.php'>Registrasi Disini</a></p>
		</div>
	<?php } ?>
</body>
</html>