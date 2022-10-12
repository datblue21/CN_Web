<?php
    $local='localhost';
    $user='root';
    $pass='';
    $db='sinhvien';
    $connect=mysqli_connect($local,$user,$pass,$db);
    mysqli_set_charset($connect,'utf8');
?>