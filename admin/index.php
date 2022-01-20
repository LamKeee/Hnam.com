

<!doctype html>
<html>
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />

<head>
    <div>
        <h1>Them sua xoa film</h1>
    </div>

</head>


<body>



    <div class id="display_film">
        
        <div class="container">

            <table style="width:80%">
                <tr>
                    <th>Tên phim</th>
                    <th>Đạo diễn</th>
                    <th>Năm sản xuất</th>
                    <th>Lượt xem</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                include "dbConn.php"; 
                $records=mysqli_query($db,"SELECT * from film"); 
                while($data=mysqli_fetch_assoc($records)){

                ?>


                <tr>
                    <td><?= $data["tenFilm"] ?></td>
                    <td><?= $data["daoDien"] ?></td>
                    <td><?= $data["namSanXuat"] ?></td>
                    <td><?= $data["luotXem"] ?></td>
                    <td><a href="update.php?id=<?php echo $data['id']; ?>">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
                    
                </tr>
                <?php 
                
  } 
?>
            </table>

            
            
        </div>
        
    </div>

    
    <a href="add.php">
        <button>Them phim moi</button>
</a>


</body>

</html>