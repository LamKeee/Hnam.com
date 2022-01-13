<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_test";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $connection_2->connect_error);
}

?>