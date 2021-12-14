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

$id =$_GET['id']; 

$sql = "SELECT * FROM film where id=" .$id; 
$result = $conn->query($sql);
$row   = mysqli_fetch_assoc($result);


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
      <li><a class="active" href="/index.php">Trang chủ</a></li>
      <li><a href="#">Phim hot </a></li>
      <li><a href="#">Phim chiếu rạp</a></li>
      <li><a href="#">Phim bộ</a></li>
      <li><a href="#">Phim bộ</a></li>
      <li><a href="#">Phim Mỹ</a></li>
      <li><a href="#">Phim Englishsub</a></li>
      <li><a href="#">Liên hệ quảng cáo</a></li>
    </ul>
  </div>

  <div id="main-content-detail">
    <div id="content-detail">
      <div class="container" id="detail-page">
        <div class="film-info">

          <div id="avatar-film">
            <a href="#"><img src="<?= $row["avt"] ?>" alt="" /></a>
          </div>
          <div id="film-info-detail">
            Tên phim: <span class="movie_information"><?= $row["tenFilm"] ?></span>
            Năm phát hành: <span class="movie_information"><?= $row["namSanXuat"] ?></span>
            Đạo diễn: <span class="movie_information"><?= $row["daoDien"] ?></span>
            Lượt xem: <span class="movie_information"><?= $row["luotXem"] ?></span>
            Mô tả:<span class="movie_information"><?= $row["moTa"] ?></span>

          </div>

        </div>


      </div>





    </div>
    <div id="playing-film">
      <div class="container">
        <video width="1200" height="800" controls>
          <source src="<?= $row["link"] ?>" type="video/mp4">


        </video>




      </div>
    </div>


    <?php
    mysqli_close($conn);
    ?>





</body>
<footer>
  <div id="contact">
    <p>Author: HNAM Nguyen</p>
    <p>SDT lien he : 012345678910JQK</p>
    <p><a href="mailto:hege@example.com">namhoangIT2021@gmail.com</a></p>


  </div>
</footer>

</html>
