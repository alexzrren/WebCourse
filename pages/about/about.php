<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBlog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/about.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
</head>
<body id="body" style="margin: auto;">
<div id="page" class="hfeed">
  <header id="branding" role="banner">
      <?php
      include "../header_footer/header.php"
      ?>
  </header>
    <div id="contact" style="overflow: hidden;">
        <div id="sign-bar" style="margin-top: 20px;">
            <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">About Me</span>
        </div>
        <div id="photo-container">
            <img src="../../img/myphoto.png" style="border: 4px lightgrey solid; box-shadow: 5px 4px 2px #696969;">
        </div>
        <div id="info-container">
            <ul style="margin-top: 15px;">
                <li><span class="title">NAME : </span><span class="content">Zirui Ren 任梓睿</span></li>
                <li><span class="title">BIRTHDAY : </span><span class="content">March 7th, 2000</span></li>
                <li><span class="title">LOCATION : </span><span class="content">Wuhan, Hubei Province, China</span></li>
                <li><span class="title">SCHOOL : </span><span class="content">College of Informatics, HZAU</span></li>
                <li><span class="title">MAJOR FIELD : </span><span class="content">Bioinformatics</span></li>
                <li><span class="title">GITHUB : </span><span class="content"><a href="https://github.com/alexzrren" target="_blank">https://github.com/alexzrren</a></span></li>
                <li><span class="title">MAIL : </span><span class="content"><a href="mailto:alexrenzr@gmail.com">alexrenzr@gmail.com</a></span></li>
            </ul>
        </div>
    </div>
    <!-- 学习高德地图API使用，参考自高德开放平台开发文档 -->
    <div id="sign-bar" style="margin-top: 20px;">
        <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">Find Me</span>
        <span style="font-size: 10px; color: gray; margin-left:5px">(powered by AutoNavi API)</span>
    </div>
    <div id="map-container" style="height: 400px; width: 600px; margin:auto;"></div>
    <script src="https://webapi.amap.com/maps?v=1.4.15&key=213c1df2864c113cdc0b461779570c8d"></script>
    <script>
        var map = new AMap.Map('map-container', {
            resizeEnable: true,
            zoom:14,
            center: [114.351661, 30.473903],
            lang: 'en',
        });
    </script>

    <div id="sign-bar" style="margin-top: 20px;">
        <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">Development Log</span>
    </div>
    <div id="dev-log" style="height: 350px; border: 3px #0c4128 solid">
        <h1>Development Log</h1>
        <p>Still Constructing...</p>
    </div>
  <footer>
      <?php
      include "../header_footer/footer.html"
      ?>
  </footer>
</div>
</body>
</html>