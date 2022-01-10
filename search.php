<html>
<meta httlp-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />


<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "film_test";
        $conn = new mysqli($servername, $username, $password, $dbname);
       

        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }
        
        if( isset($_REQUEST['ok']) ){ 
            // add slashes function to avoid sql injection
                $search = addslashes($_GET['search']);
                
                if(empty($search)){ 
                    echo '<script>alert("Ban chua nhap ten phim")</script>';
                }
                else { 
                        $query_film="SELECT tenFilm,id,avt,namSanXuat from film WHERE tenFilm LIKE '%$search%'"; 
    
                        $search_film_result=$conn->query($query_film);
                 
            // Check the return result 

                
               $num_search = mysqli_num_rows($search_film_result); 
                
                
                   

              
                

                
    
            }
        }
    
    ?>


    <?php include 'head.php'?>
    <div class="films-container">
        <div id="content">
            <div class="main-content">
                <div class="container">
                    <div class="timkiem">
                        <div class="catalog">
                            <h2 class="title-box">
                                <a class="Type_Of_Film">Kết quả tìm kiếm</a>
                            </h2>
                        </div>
                        <div class="list-films">
                            <?php
                            
                            if($num_search>0){ 
                                while($row=$search_film_result->fetch_assoc()){

                                    
                                    ?>
                            <div class="movie">
                                <div class="movie_info">
                                    <a href="/xemphim.php?id=<?= $row["id"] ?>"><img src="<?= $row["avt"] ?>"
                                            alt="" /></a>
                                    <span class="movieName"><?=$row["tenFilm"] ?></span>
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
    </div>
    
</body>



</html>