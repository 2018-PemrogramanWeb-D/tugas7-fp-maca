<?php  
session_start();
include "db_connection.php";

$query = "SELECT * FROM cerita";
$result = mysql_query($query);

<?php

while ($data = mysql_fetch_array($result)) {
	echo '<img src=".$data[ikon]." />';
	echo ".$data[judul].";
}



?>