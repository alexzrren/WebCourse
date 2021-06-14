<div id="sys-name" style="margin-top: 20px;">
    <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">Message Management</span>
</div>
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
    while($row=mysqli_fetch_object($result)){
        echo '<div class="msg-container" style="margin:5px 0 0 15px;">';
        echo '<p id="msg-content" style="margin-bottom: 0;">',$row->content,'</p>';
        $mid = $row->id;
        echo '<div id="mgmt-btn" style="position:absolute; right:20px;"><a href="edit_message.php?mid=',$mid,'">Delete</a></div>';
        if($row->anonymous){
            echo '<p id="msg-info-mgmt">Username: ',$row->user,'(Anonymous)';
        }
        else{
            echo '<p id="msg-info-mgmt">Username: ',$row->user;
        }
        echo '<p id="msg-info-mgmt">Submit Time:',$row->sub_date,'</p>';
        echo '<span id="msg-info-mgmt">From IP:',$row->IP,'</span>';
        echo '</div>';
    }
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
    </div>