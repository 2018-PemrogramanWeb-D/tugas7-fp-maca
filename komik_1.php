<!DOCTYPE html>
<html>
<head>
	<title>Yawn | Maca </title>
	<link rel="stylesheet" href="css_komik.css">
</head>
<body>
<div class="nav">
		<a href="index.html"  ><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
		<a href="cerita_list.php" >Cerita</a>
		<a href="komik_list.php">Komik</a>
		<a href="halaman_kirim_email.html">Kirim Cerita</a>
		</div>
		
<h2>Yawn</h2>
<h3>by. Anonimous</h3>
		<div class="kontent">
<?php  

mysql_connect("localhost","root","");
mysql_select_db("pweb_maca");

$db = mysqli_connect("localhost","root","","pweb_maca");
$sql = "SELECT page FROM komik_isi where id_komik='k01'";
$sth = $db->query($sql);

while ($result=mysqli_fetch_array($sth)) {
	echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['page'] ).'" class="image"/><br>';
}

?>
</div>
</body>
</html>