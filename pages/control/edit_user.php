<?php
    session_start();
    if(!isset($_SESSION['username'])&&$_SESSION['admin']) {
        echo '<script>alert("Permission Denied! Please Login as Admin!");</script>';
        header("refresh:0;url=../../index.php");
        exit;
    }
    $operation = $_GET['operation'];
    $uid = $_GET['uid'];
    $link = mysqli_connect("47.100.93.151","root", "Bioinfo@2021", "webserver","3306")
    or die("Database connect failure");
    mysqli_query($link, "set names UTF8");
    if($operation == 'del'){
        $sql = "delete from users where id=".$uid;
        mysqli_query($link, $sql);
        echo "<script>alert('Done!')</script>";
    }
    if($operation == 'adm'){
        $sql = "update users set admin=1 where id=".$uid;
        mysqli_query($link, $sql);
        echo "<script>alert('Done!')</script>";
    }
    header("refresh:0;url=management.php?mgmt=0");