<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBlog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/message.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
  <header id="branding" role="banner">
      <?php
      include "header.html"
      ?>
  </header>
    <!--  提交留言(允许匿名，但是必须输入用户名)  -->
    <form id="msg-form" method="post" action="message-submit.php" name="msgform"enctype="multipart/form-data" onsubmit="return check()">
        <div style="height: 10px"></div>
        <span style="margin-top: 15px; border-bottom: 3px #0a0a0a solid; font-size: 20px; font-weight: bold">Message Box</span>
        <textarea id="input-msg" name="message" rows="5" cols="70" placeholder="Something you want to say to me~"></textarea>
        <div>
            <span>Username</span>
            <span><input id="input-username" name="username" type="text" maxlength="20" style="margin-right: 15px;"></span>
            <span style="margin-right: 15px">
                <input id="anonymous-ckb" type="checkbox" name="anonymous[]" value="1" title="Your username will not be visible.">
                Anonymous
            </span>
            <span style="margin-right: 10px">
                <input type="button" id="clear-btn" class="msg-btn" value="Clear" onclick="
                    document.getElementById('input-msg').value='';
                    document.getElementById('input-username').value='';">
            </span>
            <span><input type="submit" id="submit-btn" class="msg-btn" value="Submit"></span>
            <script>
                // 表单非空检查，JavaScript代码参考自互联网
                function check() {
                    let content=document.msgform.message.value;
                    if (content == "" || content.length == 0) {
                        alert("Message cannot be empty!");
                        document.msgform.message.focus(); //focus on empty input
                        return false;
                    }
                    let username=document.msgform.username.value;
                    if (username == "" || username.length == 0) {
                        alert("Username cannot be empty!");
                        document.msgform.username.focus();
                        return false;
                    } else {
                        return true;
                    }
                }
            </script>
        </div>
        <p style="font-size: 10px; color: grey">* Username cannot be empty even if you choose anonymous. It will be invisible and only saved for database record.</p>
    </form>
    <div style="height: 10px;"></div>
    <!--显示数据库中的留言信息-->
    <div id="show-msg">
        <?php
        //使用了云服务器上搭建的数据库
        $link = mysqli_connect("47.100.93.151","root", "Bioinfo@2021", "webserver","3306")
        /* check connection */
        or die("Database connect failure");
        mysqli_query($link, "set names UTF8");
        $sql = 'select * from comment order by id desc';
        $result = mysqli_query($link, $sql);
        $rows =mysqli_num_rows($result);
        $pagesize=10;
        $pagecount=ceil($rows/$pagesize);
        if (!isset($_GET['pageno'])){
            $pageno=1;
        }
        else{
            $pageno=$_GET['pageno'];
        }
        if($pageno>$pagecount){
            $pageno=$pagecount;
        }
        $offset=($pageno-1)*$pagesize;
        mysqli_data_seek($result,$offset);
        $i=0;
        while($row=mysqli_fetch_object($result)){
            echo '<div class="msg-container">';
            echo '<p id="msg-content">',$row->content,'</p>';
            if($row->anonymous){
                echo '<p id="msg-info">ANONYMOUS','  ',$row->sub_date,'</p>';
            }
            else{
                echo '<p id="msg-info">',$row->user,'  ',$row->sub_date,'</p>';
            }
            echo '</div>';
            $i=$i+1;
            if ($i==$pagesize) {
                break;
            }
        }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    <div id="page-navi" style="display: flex">
        <?php
            echo '<div id="prev-pg">';
            if($pageno!=1){
                echo '<span align="left"><a href="./message.php?pageno=',$pageno-1,'">&lt;Previous Page</a></span>';
            }
            else{
                echo'<span style="color: #909090">&lt;Previous Page</span>';
            }
            echo '</div><div id="pg_slec" style="margin: auto"><span>[ Page ',$pageno,' / ',$pagecount,' ] </span>';
            for($i=1;$i<=$pagecount;$i++){
                if($i==$pageno){
                    echo '<span>',$i,'</span>';
                }
                else{
                    echo '<span style="padding: 0 2px 0;"><a href="./message.php?pageno=',$i,'">',$i,'</a></span>';
                }

            }
            echo '<span> [ ',$rows,' messages in total ]</span>';
            echo '</div><div id="next-pg">';
            if($pageno!=$pagecount){
                echo '<span align="right"><a href="./message.php?pageno=',$pageno+1,'">Next Page&gt;</a></span>';
            }
            else{
                echo '<span style="color: #909090; text-align: right;">Next Page&gt;</span>';
            }
            echo '</div>';
        ?>
    </div>
  <footer>
      <?php
      include "footer.html";
      ?>
  </footer>
</div>
</body>
</html>