<?php
$category = $_POST['category'];
$title = $_POST['title'];
date_default_timezone_set('Asia/Shanghai');
$currdate=date("Y-m-d");
$content = $_POST['content'];

$link=mysqli_connect('47.100.93.151','root','Bioinfo@2021','webserver','3306')
or die('Database Connection Failure, Please contact Admin');
mysqli_query($link,'set names UTF8');
$articlefiles=glob('../../article/*');
$filenum = count($articlefiles);

$newfileid = $filenum+1;
$filename = 'article'.$newfileid.'.txt';
$file=fopen('../../article/'.$filename,"w+");
fwrite($file,$content);
fclose($file);
$sql = "insert into article set title='$title', category='$category', filename='$filename'";
mysqli_query($link,$sql) or die('Submission Failure, Database Error!');
header("refresh:0;url=management.php?mgmt=3");
echo "<script>alert('Article Submit Successful!')</script>";