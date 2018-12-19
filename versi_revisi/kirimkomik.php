if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            }


<?php
  require_once "session.php";
  $db = mysqli_connect("localhost", "root", "", "pweb_maca");
  $imageerr = $texteerr = $judulerr="";
 
  if (isset($_POST['upload'])){

    $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    if(empty($imgData)){
                $imageerr="Pilih sampul komikmu";    
            }
    if(empty($_POST["judulnya"])){
                $judulerr="Judul tidak boleh kosong";
            }
    else if(empty($imageerr)&&empty($judulerr)){
        
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $judulnya = mysqli_real_escape_string($db, $_POST['judulnya']);
    $nama=$_SESSION['username'];

  	$sql = "INSERT INTO komik(pengarang,judul,icon) VALUES ('$nama','$judulnya','$imgData')";
  	if(mysqli_query($db, $sql)){
  		header("location:kirimkomikisi.php?");


  	}
    }
  	
  }
  $result = mysqli_query($db, "SELECT * FROM komik");
?>


<!DOCTYPE html>
<html>
<head>
<title>Upload Komik</title>

</head>

<body>
<div id="content">
 <form method="POST" action="m.php" enctype="multipart/form-data">
  	<div>
      <h3>Dear, <?php echo htmlspecialchars($_SESSION["username"]); ?> please insert your creation here!</h3>
      <input type="text" name="judulnya">
      <?php echo $judulerr; ?>
  	  <input type="file" name="image" ><br>
      <?php echo $imageerr; ?>
      <input type="file" name="imageisi" multiple>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "yang ini blob";
      	echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['icon'] ).'" class="image"/> <br>';
        echo $row['pengarang'];
        echo $row['judul'];
      echo "</div>";
    }
  ?>
</div>

</body>
</html>