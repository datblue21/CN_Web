<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="them_sinhvien.php" method="POST" name="form" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Mã Số</td>
                <td><input type="text" name="maso"></td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="hoten"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Thêm" value="Them"></td>
            </tr>
        </table>
    </form>
</body>
</html>