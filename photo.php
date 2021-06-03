<!DOCTYPE html>
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
        <div>My Albums</div>
        <div></div>
    </div>
    <div class="m-content">
        <?php
            for ($i=0;$i<8;$i++) {
                echo '<div class="m-imgbox">';
                echo '<div class="m-img"><a href=""><img src="./photo/cover/nophoto.jpg" alt="No Photo"></a></div>';
                echo '<div class="m-img-info">';
                echo '<a href="">Album-0',$i,'<span id="m-img-counts">0</span></a>';
                echo '</div>';
                echo '</div>';
            }
        ?>
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