<?php require_once "session.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Cerita | MACA</title>
	<link rel="stylesheet" href="css_cerita_list.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nunito">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>	
	<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search_form_cerita.php", {term: inputVal}).done(function(data){
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
	<div class="nav">
		<a href="welcome.php"><img src="https://image.flaticon.com/icons/svg/25/25694.svg" alt="Home" class="home"></a>
		<a href="cerita_list.php" class="active">Cerita</a>
		<a href="komik_list.php">Komik</a>
		<a href="kirimceritakomik.php">Kirim Cerita</a>
		
	</div>
	<div class="kontent">
		<div class="search-box">
        	<input type="text" autocomplete="off" placeholder="Cari judulnya di sini!" />
        	<div class="result"></div>
    	</div>
		<?php
			$db = mysqli_connect("localhost","root","","pweb_maca");
		//	$sql = "SELECT * FROM cerita WHERE show_this='1'";
			if(isset($_SESSION['admin'])&&$_SESSION['admin']==true){
				$sql = "SELECT * FROM cerita";
			}
			else{
				$sql = "SELECT * FROM cerita WHERE show_this='1'";
			}
			$sth = $db->query($sql);
			$baris = '<div class="row">';
			$kolom = '<div class="column">';
			$isi = '<div class="content">';
			echo "$baris";

			while ($result=mysqli_fetch_array($sth)){
				$idnya=$result['id'];
				$url="isicerita.php?idcerita=$idnya";
				$linknya ="<a href=$url>" . $result['judul'] . "</a>";
				echo $kolom;
				echo $isi;
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['icon'] ).'" class="image"><br>';
				echo $linknya;
				echo "<br>";
				echo $result['pengarang'];
				if(isset($_SESSION['admin'])&&$_SESSION['admin']==true){
										echo "<br>";
					echo $result['show_this'];
					echo "<div><a href=delete_cerita.php?idcerita=$idnya>Hapus</a> </div>";
				echo "<div><a href=showthis_cerita.php?idcerita=$idnya>Tampilkan</a></div>";
				}
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
