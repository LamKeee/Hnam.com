<?php 
if(isset($_POST['search'])){ 
    $keyword = addslashes($_POST['search']);
    $sql_search = "SELECT tenFilm,namSanXuat,avt from film Where tenFilm like '%$keyword%'"; 

    $result_search = mysql_query($sql_search);
    if ($result_search->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
<div class="movie">
    <div class="movie_info">
        <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>" alt="" /></a>
        <span class="movieName"><?= $row["tenFilm"] ?></span>
        <span class="movie-year"><?= $row["namSanXuat"] ?></span>
    </div>
</div>
<?php
              }
            }
            ?>