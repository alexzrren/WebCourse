<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBloc</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
  <header id="branding" role="banner">
      <?php
      include "header.html"
      ?>
  </header>
    <div id="contact" style="overflow: hidden;">
        <div id="sign-bar" style="margin-top: 20px;">
            <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">About Me</span>
        </div>
        <div id="photo-container">
            <img src="img/myphoto.png">
        </div>
        <div id="info-container">

        </div>
    </div>
    <div id="dev-log" style="height: 350px; border: 3px #0c4128 solid">
        <h1>Development Log</h1>
        <p>Still Constructing...</p>
    </div>
  <footer>
      <?php
      include "footer.html"
      ?>
  </footer>
</div>
</body>
</html>