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
  die("Connection failed:" . $con->connect_error);
}

$sql = "SELECT tenFilm,quocGia,namSanXuat,luotXem,avt FROM film ORDER BY luotXem DESC LIMIT 5   ";
$result = $conn->query($sql);

?>



<body>

  <div id="header">
    <div class="container">

      <a class="logo" href="/index.php" title="Hnam.com">
        <img src="/img/logo/logophim.png" style="width:200px;padding-top:2px;margin: 2px">
    </div>
    <div class="search-container relative">
      <form action="javascript:MakeSearch();" class="form-search">
        <input id="keyword" type="text" placeholder="Nhập tên phim, diễn viên ...">
      </form>
    </div>
  </div>



  <div id="main-menu">
    <ul class="container">
      <li><a class="active" href="#">Trang chủ</a></li>
      <li><a href="#">Phim lẻ </a></li>
      <li><a href="#">Phim chiếu rạp</a></li>
      <li><a href="#">Phim bộ</a></li>
      <li><a href="#">Phim bộ</a></li>
      <li><a href="#">Phim Vietsub</a></li>
      <li><a href="#">Phim Englishsub</a></li>
      <li><a href="#">Liên hệ quảng cáo</a></li>
    </ul>
  </div>

  <div id="content">
    <div class="main-content">
      <div class="container">
        <div class="film-hot">
          <div class="catalog">
            <h2 class="title-box">
              <a class="hothot">Phim hot</a>
            </h2>
          </div>
          <div class="list-films ">

            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
            ?>
                <div class="movie">
                  <div class="movie_info">
                    <a href="#"><img src="<?= $row["avt"] ?>" alt="" /></a>
                    <span class="movieName"><?= $row["tenFilm"] ?></span>
                    <span class="movie-year"><?=$row["namSanXuat"]?></span>
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

</html>