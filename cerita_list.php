<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
mysql_connect("localhost","root","");
mysql_select_db("pweb_maca");

$res=mysql_query("SELECT * from cerita");
while ($row=mysql_fetch_array($res)) {
	echo '<img src="data:icon/jpeg;base64,'.base64_encode($row['icon']).'width="300" height="250">' 
	;}

?>
</body>
</html>