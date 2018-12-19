<?php
  require_once "session.php";
  $db = mysqli_connect("localhost", "root", "", "pweb_maca");

  $name_error=$judul_error=$teks_error=$image_error="";
 
  if (isset($_POST['submit'])){

    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    if(empty($image)){
                $image_error="eror";    
            }
	if(empty($_POST["name"])){
                $name_error="eror";
            }
    if(empty($_POST["judul"])){
                $judul_error="eror";
            }
	if(empty($_POST["teks"])){
                $teks_error="eror";
            }
    else if(empty($name_error)&&empty($judul_error)&&empty($teks_error)&&empty($image_error)){    
    $name = mysqli_real_escape_string($db, $_POST['name']);
	$user = $_SESSION['username'];
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
	$teks = mysqli_real_escape_string($db, $_POST['teks']);

  	$sql = "INSERT INTO comment_table (name,user,judul,teks,image) VALUES ('$name','$user','$judul','$teks','$image')";
  	mysqli_query($db, $sql);
    }
  }
  
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MACA | Kirim Cerita</title>
<link rel="stylesheet" href="css_index_kc.css">
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
  $(function() {
    $("#usermsg").keypress(function (e) {
        if(e.which == 13) {
            $("#chatbox").append($(this).val() + "<br/>");
            $(this).val("");
            e.preventDefault();
        }
    });
});

</script>


</head>

<body>
 <div class="nav">
    <a href="welcome.php"  ><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
    <a href="cerita_list.php" >Cerita</a>
    <a href="komik_list.php">Komik</a>
    <a href="kirimceritakomik.php" class="active">Kirim Cerita</a>
    </div>
    <br>
<h2>Tulis ceritamu di sini!</h2>
	ceritamu akan diseleksi terlebih dahulu, harap menunggu ya!
<br><br>
<table bgcolor="#f2f2f2" style="padding:50px" align="center">
<form action="kirimcerita.php" method="POST" enctype="multipart/form-data">
<tr>
<td> Nama : </td><td><input type="text" name="name"></td><?php echo $name_error; ?>
</tr>
<tr>
<td> Username : </td><td><?php echo $_SESSION['username']; ?></td>
</tr>
<tr>
<td> Judul : </td><td><input type="text" name="judul"></td><?php echo $judul_error; ?>
</tr>
<tr>
<td> Teks Cerita : </td><td><textarea id="teks" cols="40" rows="4" name="teks" ></textarea><br>
<?php echo $teks_error; ?></td>
</tr>
<tr>
<td> Cover : </td><td><input type="file" name="image" ></td><?php echo $image_error; ?>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>
 
</body>
</html>
