<?php
$sqli = mysqli_connect("localhost", "root", "", "pweb_maca");
if($sqli === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM daftar WHERE judul LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $term);
        $term = $_REQUEST["term"] . '%';
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["judul"] . "</p>";}
            } 
            else{
                echo "<p>       </p>";}
        }   
    }    
    mysqli_stmt_close($stmt);
}
mysqli_close($sqli);
?>
