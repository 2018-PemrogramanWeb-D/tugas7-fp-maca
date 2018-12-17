<?php
require_once "config.php";

$username = $judul = $isi = "";
$username_err = $judul_err = $isi_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){

        $username_err = "Please enter a username.";
    } 
     
 	if(isset($_POST[""]))
    if(empty(trim($_POST["judul"]))){
        $judul_err = "Masukan judul ceritamu";     
    }
    else{
        $judul= trim($_POST["judul"]);
    }
    
	if(empty(trim($_POST["isi"]))){
        $judul_err = "Masukan ceritamu";     
    }
    else{
        $judul= trim($_POST["isi"]);
    }
 
        
    if(empty($username_err) && empty($judul_err) && empty($isi_err)){
        $sql = "INSERT INTO cerita (pengarang, icon, judul, isi) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
 
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password, $param_isi);
            $param_username = $username;
            $param_password = $judul;      
            $param_isi		= $isi;
    }
    mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MACA | Registrasi</title>
	
	<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;}
        .wrapper{ width: 350px; padding: 20px;}
    </style>
</head>
<body>
<div class="edit">
    <div class="wrapper">
	<link rel="stylesheet" href="css_index.css">
        <h2>MACA | Upload Cerita</h2>
        <p>Masukan namamu, judul, dan ceritamu disini!</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nama</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($judul_err)) ? 'has-error' : ''; ?>">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="<?php echo $judul; ?>">
                <span class="help-block"><?php echo $judul_err; ?></span>
            </div>
                <label>Punya gambar sampul? Bisa diupload di sini</label>
                <input type="file" name="icon" accept="image/*">
            </div>
            <div class="form-group <?php echo (!empty($isi_err)) ? 'has-error' : ''; ?>">
                <label>Ketik ceritamu disini</label>
                <textarea name="isi" class="form-control" value="<?php echo $isi; ?>"></textarea>
                <span class="help-block"><?php echo $isi_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
		<br>
        </form>
    </div>  
</div>	
</body>
</html>
