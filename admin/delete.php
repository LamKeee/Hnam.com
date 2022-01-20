<?php 
include "dbConn.php";

// Get id through query 

$id=$_GET['id'];

$delete=mysqli_query($db,"DELETE * from film where id='$id'"); // delete item through id 



if($delete){ 
    mysqli_close($db); // Close database connection
    
    header("location:/admin/index.php");
    exit;
}
else { 
    echo "Error deleting record"; 
}




?> 
