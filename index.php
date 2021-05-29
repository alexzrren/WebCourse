<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<body id="body">
<div id="page" class="hfeed">
    <?php
    include "./header.html"
    ?>
    <div id="search-bar">
        <form method="get" id="search-form" action="index.php">
            <label for="s" class="assistive-text" id="search-text" style="font-family: arial;">Search</label>
            <input type="text" class="field" name="s" id="s" placeholder="Input Keywords to Search" width="24" maxlength="48">
            <!--                <input type="image" class="submit" name="submit" id="searchsubmit" alt="search" src="./search.svg" align="right">-->
            <input type="button" id="search-btn" value="Search" >
        </form>
    </div>
    <div id="roll-img">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="main-body">
        <div id="left-container">
            <div id="left-content">
                <p class="bar"><a href="about.php">About Me</a></p>
                <img id="icon" src="icon.jpg">
                <ul>
                    <li>NAME</li>
                    <li>Zirui Ren</li>
                    <li>MAJOR</li>
                    <li>bioinformatics</li>
                    <li>MAIL</li>
                    <li><a href="mailto:alexrenzr@gmail.com">alexrenzr@gmail.com</a></li>
                    <li>TEL</li>
                    <li>(+86)11345671123</li>
                </ul>
            </div>
            <div id="left-content2">
                <p class="bar"><a href="tools.php">Tools</a></p>


            </div>
        </div>
        <div id="right-container">
            <p class="bar">Recent Posts</a></p>
            <?php
            include "articlelist.php";
            ?>
        </div>
    </div>
    <?php
    include "./footer.html";
    ?>
</div>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
