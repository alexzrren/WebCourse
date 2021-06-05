<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBloc</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/photo.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
    <header id="branding" role="banner">
        <?php
        include "header.html"
        ?>
</div>
<div class="m-container">
    <div class="m-top">
        <div>
            <a href="photo.php">My Albums</a>
            <span style="font-size: 1rem; color: lightsteelblue">&gt;
                <a href="look_album.php?albumname=<?php echo $_GET['albumname'];?>"><?php echo $_GET['albumname'];?></a>
            </span>
            <span style="font-size: 14px; color: lightsteelblue">&gt;
                <?php echo $_GET['photo'];?>
            </span>
        </div>
    </div>
    <div id="photo-looker">
        <?php
        $albumname=$_GET['albumname'];
        $filename=$_GET['photo'];
            $photoname=explode('.',$filename)[0];
            echo '<h1 style="text-align: center">',$photoname,'</h1>';
            echo '<img src="./photo/',$albumname.'/'.$filename,'">';
        ?>
        <p style="color: lightsteelblue; text-align: center; margin-bottom: 2rem">Copyright Reserved, reproduce is prohibited without permission.</p>
    </div>
    </header>
    <footer>
        <?php
        include "footer.html"
        ?>
    </footer>
</div>
</body>
</html>