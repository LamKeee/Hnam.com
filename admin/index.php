<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_test";

// Create connection
$connection_2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection_2->connect_error) {
  die("Connection failed: " . $connection_2->connect_error);
}

// sql to delete a record
$sql_edit_data = "SELECT tenFilm,daoDien,namSanXuat from film ";

if ($connection_2->query($sql_edit_data)== TRUE) {
  echo "";
} else {
  echo "Failed to connect to database: " . $connection_2->error;
}

$result_data = $connection_2->query($sql_edit_data);


$connection_2->close();
?>

<!doctype html>
<html> 
<head>
  <div>
    <h1>Them sua xoa film</h1>
  </div>
    
</head> 
<body>
    
    <div class="container">
<table style="width:80%" >
<tr>
    <th>Tên phim</th>
    <th>Đạo diễn</th>
    <th>Năm sản xuất</th>  
  </tr>
  <?php
            if ($result_data->num_rows > 0) {
              while ($row = $result_data->fetch_assoc()) {
            ?>
  <tr>    
    <td><?= $row["tenFilm"] ?></td>
    <td><?= $row["daoDien"] ?></td>
    <td><?= $row["namSanXuat"] ?></td>
    </tr>
  <?php 
  } 
}?> 
</table> 
</div>
</body>
</html>
