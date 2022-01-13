<?php 
include "dbConn.php"

// Get id through query 

$id=$_GET['id'];

$del=mysqli_query($db,"DELETE * from film where id=".$id); // delete item through id 



if($del){ 
    mysqli_close($db);
    header("location:/admin/index.php");
    exit;
}
else { 
    echo "Error deleting record"; 
}


?> 
