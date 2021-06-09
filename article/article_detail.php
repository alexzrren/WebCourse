<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>

<body id="body">
<div id="page" class="hfeed">
    <?php
    include "./header.html"

    ?>
    <main style="padding:10px 60px 20px">
        <?php
        $art_name = './' . $_GET['article'] ;
        $fp = fopen("$art_name", 'r');
        $title = fgets($fp);
        echo '<div id="article-navi">';
        echo '<p>Location&nbsp;&nbsp;&nbsp;<a href="../index.php">Homepage</a>><a href="../pages/article/articles.php">Articles</a>>',$title,'</p>';
        echo '</div>';
        echo '<h1 style="text-align: center">',$title,'</h1>';
        $date = fgets($fp);
        echo '<p style="text-align: right; padding-right: 20px;">Date : ',$date,'</p>';
        while(!feof($fp)){
            $cont = fgets($fp);
            if(feof($fp)) {break;}
            $cont = str_replace('\n', '', $cont);
            echo '<p style="text-indent: 2em;">',$cont,'</p>';
            }
            fclose($fp);
            unset($fp);
        ?>
    </main>
    <?php
    include "../footer.html"
    ?>
</div>
<script src="../bootstrap/js/bootstrap.js"></script>

</body>

