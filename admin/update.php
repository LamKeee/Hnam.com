<?php
include "dbConn.php"; 
$id=$_GET['id'];
$qry=mysqli_query($db,"SELECT * from film where id=").$id;


$data=mysqli_fetch_assoc($qry)






    ?>

    <h3> Sửa xóa film data</h3>
   

    