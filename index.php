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
    <header id="branding" role="banner">
        <div>
            <ul id="login-bar">
                <?php
                session_start();
                if(isset($_SESSION['username'])){
                    if(!$_SESSION['admin']){
                        echo '<li><span style="color: whitesmoke;">Login as:&nbsp;[USER]&nbsp;',$_SESSION['username'], '</span><span style="margin-left: 8px;"><a href="pages/login_register/logout.php">LOGOUT</a></span></li>';
                    }
                    else{
                        echo '<li><span  style="color: whitesmoke;">Login as:&nbsp;[ADMIN]&nbsp;',$_SESSION['username'], '</span><span style="margin-left: 8px;"><a href="pages/login_register/logout.php">LOGOUT</a></span></li>';
                    }
                }
                else{
                    echo '<li><a href="pages/login_register/login.php" title="Login" style="text-decoration: none;">LOGIN</a></li>';
                }
                ?>
                <!--      <li><a href="./register.php" title="Register" style="text-decoration: none;">Register</a></li>-->
            </ul>
        </div>
        <hgroup id="header-group">
            <h1 id="site-title"><span><a href="../../index.php" title="myblog" rel="home">Alexrenzr's Blog</a></span></h1>
            <h2 id="site-desc">Welcome To My Blog!</h2>
        </hgroup>
        <!-- BEGIN Menu-->
        <div id="menu-container">
            <div class="menu">
                <ul id="ul-menu">
                    <li><a href="index.php" title="home">Home</a></li>
                    <li><a href="pages/article/articles.php" title="Something about course and research">Articles</a></li>
                    <li><a href="pages/album/photo.php" title="Something about my life">Photo</a></li>
<!--                    <li><a href="pages/tool/tools.php" title="Useful Tools">Tools</a></li>-->
                    <li><a href="pages/message/message.php" title="Something you want to say">Message</a></li>
                    <li><a href="pages/about/about.php" title="Something about me">About</a></li>
                    <?php
                    if(isset($_SESSION['username'])&&$_SESSION['admin'])
                    {
                        echo '<li><a href="pages/control/management.php" title="Admin Management">Control Center</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- END Menu -->
    </header>
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
