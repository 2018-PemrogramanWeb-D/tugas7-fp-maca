<!DOCTYPE html>
<html>
<head>
	<title>List Cerita | MACA</title>
	<link rel="stylesheet" href="css_cerita_list.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nunito">
</head>
<body>

<div class="nav">
<a href="cerita_list.php" class="active">Cerita List</a>
<a href="komik_list.php">Komik List</a>
<a href="kirim_cerita.html">Kirim Cerita</a>
</div>
<div class="kontent">

<?php
mysql_connect("localhost","root","");
mysql_select_db("pweb_maca");

$db = mysqli_connect("localhost","root","","pweb_maca");
$sql = "SELECT * FROM cerita";
$sth = $db->query($sql);
$baris = '<div class="row">';
$kolom = '<div class="column">';
$isi = '<div class="content">';

echo "$baris";

while ($result=mysqli_fetch_array($sth)){

$linknya="<a href='".$result['link']."'>";

echo $kolom;
echo $isi;
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['icon'] ).'" class="image"/><br>';
echo $linknya;
echo $result['judul'];
echo "</a><br>";
echo $result['pengarang'];
echo "</div> </div>";
}
?>


</div>
</div>
<footer>
  <p>Diajukan untuk memenuhi tugas Pemrograman Web 2018</p>
</footer>
</body>
</html>