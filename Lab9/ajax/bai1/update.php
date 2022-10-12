<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("connect.php");
    if (isset($_GET['thutu'])) {
        $sl = "select * from sinhvien where thutu=" . $_GET['thutu'];
    }
    $result = mysqli_query($connect, $sl);
    $d = mysqli_fetch_array($result);

    ?>
    <form action="" name="form" enctype="multipart/form-data" method="POST">
        <table>
            <tr>
                <td>Mã số</td>
                <td><input type="text" name="maso" value="<?php echo $d['maso']; ?>"></td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="hoten" value="<?php echo $d['hoten'];?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" value="<?php echo $d['diachi'];?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="thutu" value="<?php echo $d['thutu']; ?>" >
                <td><input type="submit" name="update" value="Cập nhật"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
    if(isset($_POST['maso'])) $maso=$_POST['maso'];
    if(isset($_POST['hoten'])) $hoten=$_POST['hoten'];
    if(isset($_POST['diachi'])) $diachi=$_POST['diachi'];

    if(isset($_GET['thutu'])) $key=$_GET['thutu'];
    
    if(isset($_POST['update'])){
        $sl="update sinhvien set maso='$maso',hoten='$hoten',diachi='$diachi' where thutu='$key'";
        if(mysqli_query($connect,$sl)){
            echo "<script language='javascript'>alert('Update Success!');";
            echo "<script language='javascript'>location.href='xuat.php';</script>";
        }
        else{
            echo "<script language='javascript'>alert('Update false!');";
            echo "location.href='xuat.php';</script>";
        }
    }
?>