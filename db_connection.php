<?php  

$hostname="localhost";
$username="root";
$password="";
$database="maca";

mysql_connect($hostname,$username,$password);
mysql_select_db($database)
or die("Connection failed":.mysql_error());

?>