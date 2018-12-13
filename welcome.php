<?php require_once "session.php"; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MACA | Ayo membaca!</title>
	<link rel="stylesheet" href="css_index.css">
	<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>	
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search_form.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
       $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
<header>
	<a href="logout.php"><img class="image" src="https://static.thenounproject.com/png/4930-200.png" width="50px" height="50px" alt="Logout"></a>
</header>
    <div class="page-header">
        <h2>Halo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat datang di MACA.</h2>
    </div>
    <br><br>
    <div class="content">
	<h1>MACA</h1>
	<h3>Ayo membaca!</h3>
	<div class="menu">
		<a href="cerita_list.php" class="button"><b>Cerita</b></a>
		<a href="komik_list.php" class="button"><b>Komik</b></a>
		<a href="halaman_kirim_email.php" class="button"><b>Kirim Cerita</b></a>
	</div>
		
	<div class="search-box">
        	<input type="text" autocomplete="off" placeholder="Cari judulnya di sini!" />
        	<div class="result"></div>
    	</div>
	<br><br><br><br>
</div>
	<br><br><br><br>
<footer>
  <p>Diajukan untuk memenuhi tugas Pemrograman Web 2018</p>
</footer>
</body>
</html>
