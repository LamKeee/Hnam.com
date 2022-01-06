<html>
<meta httlp-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />


<head>

</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_test";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}

$sql = "SELECT tenFilm,quocGia,namSanXuat,luotXem,avt,id FROM film ORDER BY luotXem DESC LIMIT 5   ";
$result = $conn->query($sql);

$sql_01 = "SELECT tenFilm,quocGia,namSanXuat,luotXem,avt,id FROM film WHERE luotXem between 10 AND 100 LIMIT 5  ";
$result_01 = $conn->query($sql_01);

$sql_02 = "SELECT tenFilm,quocGia,namSanXuat,luotXem,avt,id FROM film WHERE quocGia='America' LIMIT 5  ";
$result_02 = $conn->query($sql_02);

$sql_03 = "SELECT tenFilm,namSanXuat,avt,id FROM film WHERE theLoai='Hành động' LIMIT 5 ";
$result_03 = $conn->query($sql_03);

$sql_04 = "SELECT tenFilm,namSanXuat,avt,id FROM film WHERE theLoai='Tâm lý' LIMIT 5";
$result_04 = $conn->query($sql_04);
$conn->close();

?>



<body>

    <?php include"head.php" ?>

    <div class="films-container">
        <div id="content">
            <div class="main-content">
                <div class="container">
                    <div class="film-hot">
                        <div class="catalog">
                            <h2 class="title-box">
                                <a class="Type_Of_Film">Phim hot hòn họt !!!</a>
                            </h2>
                        </div>
                        <div class="list-films ">
                            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
            ?>
                            <div class="movie">
                                <div class="movie_info">
                                    <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>"
                                            alt="" /></a>
                                    <span class="movieName"><?= $row["tenFilm"] ?></span>
                                    <span class="movie-year"><?= $row["namSanXuat"] ?></span>
                                </div>
                            </div>
                            <?php
              }
            }
            ?>
                        </div>
                    </div>

                    <div class="film-le">
                        <div class="catalog">
                            <h2 class="title-box">
                                <a class="Type_Of_Film">Phim lẻ</a>
                            </h2>
                        </div>
                        <div class="list-films">
                            <?php
            if ($result_01->num_rows > 0) {
              while ($row = $result_01->fetch_assoc()) {
            ?>
                            <div class="movie">
                                <div class="movie_info">
                                    <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>"
                                            alt="" /></a>
                                    <span class="movieName"><?= $row["tenFilm"] ?></span>
                                    <span class="movie-year"><?= $row["namSanXuat"] ?></span>
                                </div>
                            </div>
                            <?php
              }
            }
            ?>
                        </div>
                    </div>

                    <div class="film-le">
                        <div class="catalog">
                            <h2 class="title-box">
                                <a class="Type_Of_Film">Phim Mỹ </a>
                            </h2>
                        </div>
                        <div class="list-films">
                            <?php
            if ($result_02->num_rows > 0) {
              while ($row = $result_02->fetch_assoc()) {
            ?>
                            <div class="movie">
                                <div class="movie_info">
                                    <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>"
                                            alt="" /></a>
                                    <span class="movieName"><?= $row["tenFilm"] ?></span>
                                    <span class="movie-year"><?= $row["namSanXuat"] ?></span>
                                </div>
                            </div>
                            <?php
              }
            }
            ?>
                        </div>
                    </div>

                    <div class="film-le">
                        <div class="catalog">
                            <h2 class="title-box">
                                <a class="Type_Of_Film">Phim hành động</a>
                            </h2>
                        </div>
                        <div class="list-films">
                            <?php
            if ($result_03->num_rows > 0) {
              while ($row = $result_03->fetch_assoc()) {
            ?>
                            <div class="movie">
                                <div class="movie_info">
                                    <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>"
                                            alt="" /></a>
                                    <span class="movieName"><?= $row["tenFilm"] ?></span>
                                    <span class="movie-year"><?= $row["namSanXuat"] ?></span>
                                </div>
                            </div>
                            <?php
              }
            }
            ?>
                        </div>
                    </div>


                    <div class="film-le">
                        <div class="catalog">
                            <h2 class="title-box">
                                <a class="Type_Of_Film">Phim tâm lý</a>
                            </h2>
                        </div>
                        <div class="list-films">
                            <?php
            if ($result_04->num_rows > 0) {
              while ($row = $result_04->fetch_assoc()) {
            ?>
                            <div class="movie">
                                <div class="movie_info">
                                    <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>"
                                            alt="" /></a>
                                    <span class="movieName"><?= $row["tenFilm"] ?></span>
                                    <span class="movie-year"><?= $row["namSanXuat"] ?></span>
                                </div>
                            </div>
                            <?php
              }
            }
            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>




</body>
<footer>
    <div id="contact">
        <p>Author: HNAM Nguyen</p>
        <p>SDT lien he : 012345678910JQK</p>
        <p><a href="mailto:hege@example.com">namhoangIT2021@gmail.com</a></p>


    </div>
</footer>

</html>