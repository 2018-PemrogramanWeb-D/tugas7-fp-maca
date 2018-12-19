<?php require_once "session.php"; ?>

<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Kirim Karyamu</title>
		<link rel="stylesheet" href="css_upload.css">
		<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	<head>
	<body background-image="index.jpg", background-repeat="no-repeat", text-align="center", font-family="Cantarell">
		<style>
			table.bottomBorder {
				border-collapse: collapse;
			}
			table.bottomBorder td,
			table.bottomBorder th {
				border-bottom: 1px solid yellowgreen;
				padding: 10px;
				text-align: left;
			}
		</style>
		<center>
		<font size="30">MACA</font><br>
		<font size="4">Mari Membaca</font>
		</center>

		<div class="nav">
		<a href="welcome.php"  ><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
		<a href="cerita_list.php" >Cerita</a>
		<a href="komik_list.php">Komik</a>
		<a href="kirimceritakomik.php" class="active">Kirim Cerita</a>
		</div>

		<hr>
		<table class="bottomBorder" style="font-family:verdana; width:100%" font-size="16">
			<tr>
				<th><b>Syarat dan Ketentuan</b></th>
			</tr>
			<tr>
				<td><ul><li>Karya dapat berupa tulisan/ teks, maupun gambar</li></ul></td>
			</tr>
			<tr>
				<td><ul><li>Bahasa yang digunakan bisa bahasa Indonesia maupun bahasa Inggris</ul></li></td>
			</tr>
			<tr>
				<td><ul><li>Karya diminta agar memenuhi aturan EYD/ grammar yang tepat</ul></li></td>
			</tr>
			<tr>
				<td><ul><li>Dilarang membuat karya yang terdapat unsur SARA</ul></li></td>
			</tr>
			<tr>
				<td><ul><li>Karya dalam bentuk tulisan minimal terdiri dari 1000 kata</ul></li></td>
			</tr>
			<tr>
				<td><ul><li>Karya dapat dikirim melalui <b>macakirimkaryamu@gmail.com</b></ul></li></td>
			</tr>
			
		</table>
	</body>
</html>
