 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pweb_maca";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$_SESSION['idcerita'] = $_GET['idcerita'];
$idcerita=$_SESSION['idcerita'];
$sql = "DELETE FROM komik WHERE id=$idcerita";

if(mysqli_query($conn, $sql)){
	echo "bisa";
}
mysqli_close($conn);

header("location: komik_list.php");
exit;
?> 