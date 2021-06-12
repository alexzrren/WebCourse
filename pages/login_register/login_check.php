<?php
session_start();
if(! isset($_SESSION['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$link=mysqli_connect("47.100.93.151","root","Bioinfo@2021","webserver")
    or die('Database Connection Failure');
mysqli_query($link,"set names utf8");
$sql="select * from users where username='$username' and password='$password'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1){
    $_SESSION['username']=$row['username'];
    $_SESSION['admin']=$row['admin'];
    echo "<script>alert('Login Success!')</script>";
    header("refresh:0;url=../../index.php");
}
else{
    echo "<script>alert('Username or Password Incorrect!')</script>";
    header("refresh:0;url=login.php");
}