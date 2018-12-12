<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MACA | Ayo membaca!</title>
	<link rel="stylesheet" href="css_index.css">
	<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header>
	<!-- 
	<a href="index.html"><img  class="image" src="http://pluspng.com/img-png/bear-cute-png-cute-bear-emoticon-09-png-2480.png" alt="Bear"></a> -->
	<a href="logout.php"><img class="image" src="https://static.thenounproject.com/png/4930-200.png" width="50px" height="50px" alt="Logout"></a>
</header>
    <div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat datang di MACA.</h3>
    </div>
    <br><br><br><br>
	<div class="content">
	<h1>MACA</h1>
	<h3>Ayo membaca!</h3>
	<div class="menu">
	<a href="cerita_list.php" class="button"><b>Cerita</b></a>
	<a href="komik_list.php" class="button"><b>Komik</b></a>
	<a href="halaman_kirim_email.html" class="button"><b>Kirim Cerita</b></a>
	</div>
<form action="cerita_list.php" method="post">
	<br><input type="text" name="cari" class="cari">
	<!-- <a href="cerita_list.php" class="button_cari"><b>Cari</b></a> -->
	 <input type="submit" name="submit" value="Cari" class="button_cari">
</form>
<br>

</div>
	<br><br><br><br>
<footer>
  <p>Diajukan untuk memenuhi tugas Pemrograman Web 2018</p>
</footer>
</body>
</html>