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



$sql_05="SELECT * FROM film where tenFilm='Brazil' ";
$result_05=$conn->query($sql_05);

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
            <li><a href="#">Phim lẻ </a></li>
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
                    <?php 
                        if ($result_05->num_rows > 0) {
                          while ($row = $result_05->fetch_assoc()) {
                        
                        ?>
                    <div id="avatar-film">
                        <a href="#"><img src="<?= $row["avt"] ?>" alt="" /></a>
                    </div>
                    <div id="film-info-detail">
                        Tên phim: <span class="movie_information"><?= $row["tenFilm"] ?></span>
                        Năm phát hành: <span class="movie_information"><?=$row["namSanXuat"]?></span>
                        Đạo diễn: <span class="movie_information"><?= $row["daoDien"]?></span>
                        Lượt xem: <span class="movie_information"><?=$row["luotXem"]?></span>
                        Mô tả:<span class="movie_information"><?=$row["moTa"]?></span>



                        <?php
              }
            }
           ?>

                    </div>

                </div>


            </div>





        </div>
        <div id="playing-film">
            <div class="container">
                <object id="xem" width="1400" height="768">
                    <param name="movie" value="<?= $row["link"] ?>">
                    </param>

                </object>


                <div id="comment">


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