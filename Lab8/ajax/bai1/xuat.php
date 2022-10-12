<?php
include("connect.php");
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $key = $_GET['search'];
    $sql = "select * from sinhvien where thutu LIKE '%$key%' OR maso 'LIKE '%$key%' OR hoten LIKE '%$key%' OR diachi LIKE '%$key%";
} else {
    $sql = "select * from sinhvien";
}
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px" align="center" >
        <?php include("connect.php"); ?>
        <a href="them.php">Thêm sinh viên</a><br>
        <h2>Tìm kiếm</h2>
        <form action="" method="GET">
            <input type="text" name="search" value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>" placeholder="Nhập từ khóa cần tìm kiếm!">\
            <input type="submit" value="Tìm">
            <input type="button" value="Tất cả" onclick="window.location.href='xuat.php'">
        </form>
        <?php
            while(($row=mysqli_fetch_assoc($result)) != NULL){
        ?>
        <tr align="center">
            <td><?php echo $row['thutu']; ?></td>
            <td> <?php echo $row['maso']; ?></td>
            <td><?php echo $row['hoten']; ?></td>
            <td><?php echo $row['diachi']; ?></td>
            <td><a href="delete.php?thutu=<?php echo $row['thutu']; ?>" onclick="return confirm('Bạn có chắc chắn không');">Xóa</a></td>
            <td><a href="update.php?thutu=<?php echo $row['thutu']; ?>">update</a></td>
        </tr>
        <?php }
            mysqli_close($connect);
        ?>
    </table>
</body>
</html>