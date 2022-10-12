<?php
    include("connect.php");
    $maso=$_POST['maso'];
    $hoten=$_POST['hoten'];
    $diachi=$_POST['diachi'];
    
    $sl="insert into sinhvien (maso,hoten,diachi) Values('$maso','$hoten','$diachi')";

    if(mysqli_query($connect,$sl)){
        echo "<script language='javascript'>alert('thêm thành công');";
		echo "location.href='xuat.php';</script>";
    } 
    else{
        echo "lỗi";
    }
?>