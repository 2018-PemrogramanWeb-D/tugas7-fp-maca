<?php require_once "session.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Kirim Cerita</title>
	<link rel="stylesheet" href="css_upload.css">
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
</head>
<body>
		<div class="nav">
			<a href="welcome.php"  ><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
			<a href="cerita_list.php" >Cerita</a>
			<a href="komik_list.php">Komik</a>
			<a href="kirimceritakomik.php" class="active">Kirim Cerita</a>
		</div>
		<br>
<div class="content">
	<br><br>
	<br><br><br><br><h3>Apa yang ingin kamu terbitkan?</h3><br>
<div class="menu">

        <a href="kirimcerita.php" class="button"><b>Cerita</b></a>
</div>
<div class="menu">
        <a href="halaman_kirim_email.php" class="button"><b>Komik</b></a>
</div>

<br><br><br><br><br><br>
</div>


</body>
</html>