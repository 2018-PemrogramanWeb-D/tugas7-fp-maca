<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MACA | Restrasi</title>
	<link rel="stylesheet" href="connect_db.css">
</head>
<body background-image="index.jpg", background-repeat="no-repeat", text-align="center", font-family="Cantarell">
	<?php
		require('connect.php');
		if(isset($_REQUEST['username'])){
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($con,$username); 
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($con,$email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
				$query = "INSERT into `login` (username, password, email, trn_date)
				VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
				$result = mysqli_query($con,$query);
				if($result){
					echo "<div class='content'>
						<h3>Restrasi telah berhasil.<h3>
						<br>Klik di sini untuk login <a href='login.php'>Login</a></d>";
				}
		
		}else{
		?>
		<div class="content">
			<h1>Registration</h1>
			<form name="registration" action="" method="post">
				<input type="text" name="username" placeholder="Username" required />
				<input type="email" name="email" placeholder="Email" required />
				<input type="password" name="password" placeholder="Password" required />
				<input type="submit" name="submit" value="Register" />
			</form>
		</div>
		<?php
		}
		?>
</body>
</html>