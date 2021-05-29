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
    <main style="padding:30px 60px 20px">
        <?php
        $art_name = './' . $_GET['article'] . '.txt';
        $fp = fopen("$art_name", 'r');
        $title = fgets($fp);
        ?>
        <h1 style="text-align: center"><?php echo "$title";?></h1>
        <?php
            $date = fgets($fp);
            ?>
        <p style="text-align: center"><?php echo "$date";?></p>
        <?php
            while(!feof($fp)){
                $cont = fgets($fp);
                if(feof($fp)) {break;}
                $cont = str_replace('\n', '', $cont);
                ?>
            <p style="text-indent: 2em;"><?php echo "$cont";?></p>
        <?php
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

