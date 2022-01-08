<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "film_test";

// Create connection
$connection_2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection_2->connect_error) {
  die("Connection failed: " . $connection_2->connect_error);
}

// sql to delete a record
$sql_edit_data = "SELECT tenFilm from film ";

if ($connection_2->query($sql_edit_data)=== TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connection_2->error;
}

$result_data = $connection_2->query($sql_edit_data);


$connection_2->close();
?>

<!doctype html>
<html> 
<head> 
    <table> 
    <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
        </table> 
</head> 
<body>
</body>
    </html>
