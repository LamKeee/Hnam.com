<html>
<meta httlp-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_test";
$search = $_POST['search']; 




$connection = new mysqli($servername, $username, $password, $dbname); 


if($connection->connect_error){ 
    die("Connection failed:".$connection->connect_error); 

}

$sql_search= "SELECT tenFilm,namSanXuat,avt from film where tenFilm like '%$search%'"; 

$result_search= $connection->query($sql_search); 

if($result_search->num_rows>0){ 
    while($row=$result_search->fetch_assoc()){ 
        ?>
        <div class="movie">
            <div class="movie_info">
                
                <span class="movieName"><?= $row["tenFilm"] ?></span>
                <span class="movie-year"><?= $row["namSanXuat"] ?></span>
            </div>
        </div>
        <?php
              }
            }
            ?>
}
