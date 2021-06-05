<?php
    $url='./message.php';
    $message=$_POST["message"];
    $username=$_POST["username"];
    if(@$_POST["anonymous"]){
        $anonymous=1;
    }
    else{
        $anonymous=0;
    }
    $currtime=date("Y-m-d H:i:s");
    $link=mysqli_connect('127.0.0.1','root','Bioinfo@2021','webserver','33306')
    or die('Database Connection Failure, Please contact Admin');
    mysqli_query($link,'set names UTF8');
    if($anonymous) {
        $sql = "insert into comment set user='$username', content='$message', sub_date='$currtime',anonymous=1";
        }
    else{
        $sql = "insert into comment set user='$username', content='$message', sub_date='$currtime',anonymous=0";
    }
    mysqli_query($link,$sql);
    mysqli_close($link);

    ?>

<!--下方计时器JavaScript代码引用自互联网，功能：跳回留言板-->
<script language="javascript">
        location.href = "<?php echo $url?>";
</script>

