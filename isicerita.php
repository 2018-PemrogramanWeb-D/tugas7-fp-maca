<?php require_once "session.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>MACA | Cerita</title>
	<link rel="stylesheet" href="css_cerita.css">
		<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	<head>
</head>
<body>
		<div class="nav">
			<a href="welcome.php"  ><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
			<a href="cerita_list.php" >Cerita</a>
			<a href="komik_list.php">Komik</a>
			<a href="halaman_kirim_email.php">Kirim Cerita</a>
		</div>
		<div class="kontent">
<?php  

		$_SESSION['idcerita'] = $_GET['idcerita'];
		$idcerita=$_SESSION['idcerita'];
		$db = mysqli_connect("localhost","root","","pweb_maca");
		$sql = "SELECT * FROM cerita where id='$idcerita'";
		$sth = $db->query($sql);
		$result=mysqli_fetch_array($sth);


		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['icon'] ).'" class="image"><br>';
		echo "<h1>";
		echo $result['judul'];
		echo "</h1>";
		echo "<h3> Author: ";
		echo $result['pengarang'];
		echo "</h3>";
		echo "<br>";
		echo $result['isi'];
?>
	</div>

	<footer>
		<p>Diajukan untuk memenuhi tugas Pemrograman Web 2018</p>
	</footer>
</body>
</html>
