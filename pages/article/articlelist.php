<div>
    <?php
    $link = mysqli_connect("47.100.93.151","root", "Bioinfo@2021", "webserver","3306")
    /* check connection */
    or die("Database connect failure");
    mysqli_query($link, "set names UTF8");
    $sql = 'select * from article order by date desc';
    $result = mysqli_query($link, $sql);
    while($row=mysqli_fetch_assoc($result)) {
        echo '<div class="m-daily-log" style="padding: 5px 20px 5px; border-bottom: 1px grey dashed">';
        echo '<div class="log-classify">',$row['catagory'],'</div>';
        echo '<div class="log-link"><a href="article_detail.php?article=',$row['filename'],'">',$row['title'],'</a></div>';
        echo '<div class="log-date">',$row['date'],'</div>';
        echo'</div>';
    }
    ?>
</div>
