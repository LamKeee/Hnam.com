<?php
include "dbConn.php"; 
$id=$_GET['id'];
$qry=mysqli_query($db,"SELECT * from film where id='$id'");

$data=mysqli_fetch_assoc($qry); // fetch data from database

if(isset($_POST['update'])){ // When click on Update button

    $tenFilm=$_POST['tenFilm'];
    $daoDien=$_POST['daoDien'];
    $quocGia=$_POST['quocGia'];
    $namSanXuat=$_POST['namSanXuat'];
    $thoiLuong=$_POST['thoiLuong'];
    $theLoai=$_POST['theLoai'];
    $avt=$_POST['avt'];

    $edit=mysqli_query($db,"UPDATE film SET tenFilm='$tenFilm', daoDien='$daoDien',quocGia='$quocGia',namSanXuat='$namSanXuat',
    thoiLuong='$thoiLuong',theLoai='$theLoai',avt='$avt' where id=$id");

    if($edit){
        mysqli_close($db);
        header("location:index.php");
        exit;
     }
     else{ 
         echo "Error";
     }



    
}
    





    ?>

<h3> Update film movie_information</h3>
<form method="POST">
    <input type="text" name="tenFilm" value="<?php echo $data['tenFilm'] ?>" placeholder="Nhập lại tên film ở đây"
        Required>



    <input type="submit" name="update" value="Update">
</form>