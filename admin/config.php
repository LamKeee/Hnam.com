<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_test";

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'film_test');


 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>