<div>
    <?php
    $num=0;
    $dir='article/';
    $dirh=opendir($dir);
    while($file=readdir($dirh)) {
        if($file!='.' && $file!='..' &&$file!='article_detail.php'&&$file!='header.html'){
            $filename = $dir.$file;
            echo '<div class="m-daily-log" style="padding: 5px 20px 5px; border-bottom: 1px grey dashed">';
            echo '<div class="log-classify">学院新闻</div>';
            $fp = fopen("$filename", 'r');
            $title = fgets($fp);
            echo '<div class="log-link"><a href="article/article_detail.php?article=',$file,'">',$title,'</a></div>';
            $date = fgets($fp);
            echo '<div class="log-date">',$date,'</div>';
            echo'</div>';
            fclose($fp);
            unset($fp);
        }
    }
    ?>
    <p style="text-align: center; ">####文章列表由php自动生成####</p>
</div>
