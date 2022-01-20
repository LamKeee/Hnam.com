<?php include_once'dbConn.php'; 

    if($_SERVER['REQUEST_METHOD']=="POST"){ 
        if(isset($_POST['tenFilm'])){$tenFilm=$_POST['tenFilm'];}
        if(isset($_POST['daoDien'])){$daoDien=$_POST['daoDien'];}
        if(isset($_POST['quocGia'])){$quocGia=$_POST['quocGia'];}
        if(isset($_POST['namSanXuat'])){$namSanXuat=$_POST['namSanXuat'];}
        if(isset($_POST['thoiLuong'])){$thoiLuong=$_POST['thoiLuong'];}
        if(isset($_POST['theLoai'])){$theLoai=$_POST['theLoai'];}
        if(isset($_POST['avt'])){$avt=$_POST['avt'];}
        

        $sql_insert="INSERT INTO film (tenFilm,daoDien,quocGia,namSanXuat,thoiLuong,theLoai,avt) 
           VALUES('$tenFilm','$daoDien','$quocGia','$namSanXuat','$thoiLuong','$theLoai','$avt')"; 


if(mysqli_query($db,$sql_insert)){
    echo "record data succesful"; 
    
}
else{ 
    echo "Error".$sql_insert."<br>". mysqli_error($db); 
}


    }
   
    mysqli_close($db);

?>
<html> 
<a href="index.php">
        <button>Bấm vào đây để quay lại kho quản lý film</button>
</a>