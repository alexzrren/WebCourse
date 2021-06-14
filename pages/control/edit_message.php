<?php
    session_start();
    if(!isset($_SESSION['username'])&&$_SESSION['admin']) {
        echo '<script>alert("Permission Denied! Please Login as Admin!");</script>';
        header("refresh:0;url=../../index.php");
        exit;
    }
    $mid = $_GET['mid'];
    $link = mysqli_connect("47.100.93.151","root", "Bioinfo@2021", "webserver","3306")
    or die("Database connect failure");
    mysqli_query($link, "set names UTF8");
    $sql = "delete from comment where id=".$mid;
    mysqli_query($link, $sql);
header("refresh:0;url=management.php?mgmt=1");
echo "<script>alert('Done!')</script>";