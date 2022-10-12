<?php
    include("connect.php");
    if(isset($_GET['thutu'])){
        $key=$_GET['thutu'];
    }
    $sl="delete from sinhvien where thutu=".$_GET['thutu'];
    
    if(mysqli_query($connect,$sl)){
        echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='xuat.php';</script>";
    }
?>