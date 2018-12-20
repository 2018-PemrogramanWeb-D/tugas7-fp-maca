
<?php
  require_once "session.php";
  $db = mysqli_connect("localhost", "root", "", "pweb_maca");

  $sukses="ceritamu akan diseleksi terlebih dahulu, harap menunggu ya!";
  $imageerr = $texteerr = $judulerr=$namanyaerr="";
 
 
  if (isset($_POST['upload'])){


    if(empty($_FILES['image']['tmp_name'])){
                $imageerr="Please insert your pict";    
            }
    if(empty($_POST["namanya"])){
                $namanyaerr="Masukan nama penamu";    
            }
    if(empty($_POST["image_text"])){
                $texteerr="Masukan ceritamu";
            }
    if(empty($_POST["judulnya"])){
                $judulerr="Judul tidak boleh kosong";
            }
    else if(empty($imageerr)&&empty($texteerr)&&empty($judulerr)){
         $sukses="ceritamu berhasil dimasukan";
    $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $judulnya = mysqli_real_escape_string($db, $_POST['judulnya']);
    $namanya2= mysqli_real_escape_string($db, $_POST['namanya']);
    $usernya=$_SESSION['username'];

    $sql = "INSERT INTO cerita (pengarang,judul,icon,user, isi) VALUES ('$namanya2','$judulnya','$imgData','$usernya', '$image_text')";
    mysqli_query($db, $sql);
    }
    
  }
  $result = mysqli_query($db, "SELECT * FROM cerita");
?>


<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>

<link rel="stylesheet" href="css_index_kc.css">
<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<div id="content">
 <div class="nav">
    <a href="welcome.php"  ><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
    <a href="cerita_list.php" >Cerita</a>
    <a href="komik_list.php">Komik</a>
    <a href="kirimceritakomik.php" class="active">Kirim Cerita</a>
    </div>
    <br>
<h2>Tulis ceritamu di sini!</h2>

<?php
echo $sukses;
?>

<table bgcolor="#f2f2f2" style="padding:50px" align="center">

  <form method="POST" action="kirimcerita.php" enctype="multipart/form-data">

    <tr>
<td> Judul : </td><td><input type="text" name="judulnya"></td><td><?php echo $judulerr; ?></td>
</tr>
 <tr>
<td> Nama : </td><td><input type="text" name="namanya"></td><td><?php echo $namanyaerr; ?></td>
</tr>
 <tr>
<td> User : </td><td><?php echo $_SESSION['username']; ?>
</tr>
<tr>
<td> Teks Cerita : </td><td><textarea id="teks" cols="40" rows="4" name="image_text" ></textarea></td><td><?php echo $texteerr; ?>
</td>
</tr>
<tr>
<td> Cover : </td><td><input type="file" name="image" ></td><td><?php echo $imageerr; ?></td>
</tr>
<tr>
<td><input type="submit" name="upload"></td></tr>
  </form>
</table>
</div>
</body>
</html>