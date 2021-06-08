<?php
@$username = $_POST['username'];
@$password = $_POST['password'];
@$email = $_POST['email'];
$link=mysqli_connect('47.100.93.151','root','Bioinfo@2021','webserver','3306')
or die('Database Connection Failure, Please contact Admin');
mysqli_query($link,'set names UTF8');
$sql = "insert into users set username='$username', password='$password',email='$email', admin=0;";
echo $sql;
echo mysqli_query($link,$sql);
mysqli_close($link);
header("refresh:0;url=index.php");