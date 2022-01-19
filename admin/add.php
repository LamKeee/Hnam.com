<!DOCTYPE html>
<html>

<head>
    <title>Thêm phim mới ở đây</title>
</head>

<body>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <th>Tiêu đề phim:</th>
                <td><input type="text" name="tenFilm" value=""></td>
            </tr>
            <tr>
                <th>Đạo diễn</th>
                <td><input type="text" name="daoDien" value=""></td>
            </tr>
            <tr>
                <th>Quốc gia:</th>
                <td><input type="text" name="quocGia" value=""></td>
            </tr>

            <tr>
                <th>Năm sản xuất:</th>
                <td><input type="text" name="namSanXuat" value=""></td>
            </tr>
            <tr>
                <th>Thời lượng film</th>
                <td><input type="text" name="thoiLuong" value=""></td>
            </tr>
            <tr>
                <th>Thể loại:</th>
                <td><input type="text" name="theLoai" value=""></td>
            </tr>

            <tr>
                <th>Avatar film</th>
                <td><input type="url" name="avt" value=""></td>
            </tr>

           

        </table>
        <button type="submit">Submit</button>
    </form>


</body>

</html>