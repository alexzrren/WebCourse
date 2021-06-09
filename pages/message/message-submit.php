<?php
    session_start();
    $url='./message.php';
    $message=$_POST["message"];
    $username=$_POST["username"];
    if(@$_POST["anonymous"]){
        $anonymous=1;
    }
    else{
        $anonymous=0;
    }
    date_default_timezone_set('Asia/Shanghai');
    $currtime=date("Y-m-d H:i:s");
    $ip = $_SERVER["REMOTE_ADDR"];
    $link=mysqli_connect('47.100.93.151','root','Bioinfo@2021','webserver','3306')
    or die('Database Connection Failure, Please contact Admin');
    mysqli_query($link,'set names UTF8');
    $sql_ipcheck = "select sub_date from comment where IP='$ip' order by sub_date desc;";
    $ipresult = mysqli_query($link, $sql_ipcheck);
    $row=mysqli_fetch_row($ipresult);
//    这里的功能是没有登录的情况下同一IP每5分钟才能发送一条留言，如果5分钟之内连续发送，则会返回拒绝信息
    if(!(isset($_SESSION['username']))) {
        if (mysqli_num_rows($ipresult)!=0) {
            $time_lapse = strtotime($currtime) - strtotime($row[0]);
            if ($time_lapse < 300) {
                echo '<div id="submit-error" style="width: 880px; background-color: lightsteelblue; margin: auto; padding: 40px 0 40px">';
                echo '<h1 style="text-align: center; color: red">MESSAGE SUBMISSION REJECTED</h1>';
                echo '<h3 style="text-align: center;">User without login is allowed to submit one message in 5 minutes!</h3>';
                echo '<h3 style="text-align: center;">Please <a href="../login_register/login.php">log in</a> or wait for a while!</h3>';
                echo '<div style="margin: 40px auto 50px;">';
                echo '<p style="margin-left: 10px">
                        <span style="font-weight: bold;">Last Submit: </span>',$row[0],'&nbsp;&nbsp;&nbsp;','
                        <span style="font-weight: bold;">From IP:</span>',$ip,'</p>';
                echo '<p style="margin-left: 10px"><span style="font-weight: bold;">',300-$time_lapse,' seconds</span> for next available submit</p>';
                echo '<h1 style="text-align: center;"><a href="message.php" style="margin-left: 10px;">RETURN</a></h1>';
                exit;
            }
        }
    }
    mysqli_free_result($ipresult);
    if($anonymous) {
        $sql = "insert into comment set user='$username', content='$message', sub_date='$currtime',anonymous=1,IP='$ip'";
        }
    else{
        $sql = "insert into comment set user='$username', content='$message', sub_date='$currtime',anonymous=0,IP='$ip'";
    }
    mysqli_query($link,$sql);
    mysqli_close($link);
    ?>
<!--下方计时器JavaScript代码引用自互联网，功能：跳回留言板-->
<script language="javascript">
        location.href = "<?php echo $url?>";
</script>

