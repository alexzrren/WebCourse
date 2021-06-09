<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>MyBlog</title>
    <!--bootstrap样式表用于支持轮播图运行，引用自网络-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<body id="body">
<div id="page" class="hfeed">
    <?php
    include "header.php"
    ?>
    <div id="search-bar">
        <form method="get" id="search-form" action="index.php">
            <label for="s" class="assistive-text" id="search-text" style="font-family: arial;">Search</label>
            <input type="text" class="field" name="s" id="s" placeholder="Input Keywords to Search" width="24" maxlength="48">
            <!--                <input type="image" class="submit" name="submit" id="searchsubmit" alt="search" src="./search.svg" align="right">-->
            <input type="button" id="search-btn" value="Search" >
        </form>
    </div>
    <?php
//    roll-img.html中轮播图内容引用自互联网，非原创
    include "./pages/roll-img.html"
    ?>
    <div id="main-body">
        <div id="left-container">
            <div id="left-content">
                <p class="bar"><a href="pages/about/about.php">About Me</a></p>
                <img id="icon" src="img/icon.jpg">
                <ul>
                    <li>NAME</li>
                    <li>Zirui Ren</li>
                    <li>MAJOR</li>
                    <li>bioinformatics</li>
                    <li>MAIL</li>
                    <li><a href="mailto:alexrenzr@gmail.com">alexrenzr@gmail.com</a></li>
                    <li>TEL</li>
                    <li>(+86)123****1234</li>
                </ul>
            </div>
            <div id="left-content2">
                <p class="bar"><a href="pages/tool/tools.php">Tools</a></p>

            </div>
        </div>
        <div id="right-container">
            <p class="bar">Recent Posts</a></p>
            <?php
            include "./pages/article/articlelist_index.php";
            ?>
        </div>
    </div>
    <?php
    include "./pages/header_footer/footer.html";
    ?>
</div>
<!--下方bootstrap脚本用于支持轮播图运行-->
<script src="bootstrap/js/bootstrap.js"></script>
</body>
