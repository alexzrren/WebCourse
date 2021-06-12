<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
</head>

<body id="body">
<div id="page" class="hfeed">
    <?php
    include "../header_footer/header.php"

    ?>
    <main style="padding:10px 60px 20px">
        <?php
        $filename = $_GET['article'];
        $art_name = '../../article/' . $filename ;
        $link = mysqli_connect("47.100.93.151","root", "Bioinfo@2021", "webserver","3306")
        /* check connection */
        or die("Database connect failure");
        mysqli_query($link, "set names UTF8");
        $sql = 'select * from article where filename="'.$filename.'";';
        $result = mysqli_query($link, $sql);
        $row=mysqli_fetch_assoc($result);
        $fp = fopen("$art_name", 'r');
        $title = fgets($fp);
        echo '<div id="article-navi">';
        echo '<p>Location&nbsp;&nbsp;&nbsp;<a href="../../index.php">Homepage</a>><a href="articles.php">Articles</a>>',$row['title'],'</p>';
        echo '</div>';
        echo '<h1 style="text-align: center">',$row['title'],'</h1>';
        $date = fgets($fp);
        echo '<p style="text-align: right; padding-right: 20px;">Date : ',$row['date'],'</p>';
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
    include "../header_footer/footer.html"
    ?>
</div>
<script src="../../bootstrap/js/bootstrap.js"></script>

</body>

