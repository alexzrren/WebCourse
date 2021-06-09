<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBloc</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/photo.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
    <header id="branding" role="banner">
        <?php
        include "../header_footer/header.php"
        ?>
</div>
<!--用于显示相册中所含的照片，并显示其文件名-->
<div class="m-container">
    <div class="m-top">
        <div><a href="photo.php">My Albums</a><span style="font-size: 1rem; color: lightsteelblue">&gt;<?php echo $_GET['albumname'];?></span></div>
    </div>
    <div class="m-content">
        <?php
        $albumname=$_GET['albumname'];
        //循环读取相册文件夹中所有照片
        foreach(glob("../../photo/".$albumname.'/*') as $d) {
            $name = explode('/', $d);
            $photo_filename = end($name); //取文件名
            $pn = explode('.', $photo_filename);
            $photo_name = $pn[0]; //去后缀
            echo '<div class="m-imgbox">';
            $link='look_photo.php?photo='.$photo_filename.'&albumname='.$albumname;
            echo '<div class="m-img"><a href="',$link,'"><img src="',$d,'" alt="No Photo"></a></div>';
            echo '<div class="m-img-info">';
            echo '<a href="',$link,'">',$photo_name,'</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    </header>
    <footer>
        <?php
        include "../header_footer/footer.html"
        ?>
    </footer>
</div>
</body>
</html>