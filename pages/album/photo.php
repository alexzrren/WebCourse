<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/photo.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
  <header id="branding" role="banner">
      <?php
      include "../header_footer/header.php"
      ?>
    </div>
<div class="m-container">
    <div class="m-top">
        <div>My Albums</div>
        <div></div>
    </div>
    <div class="m-content">
        <?php
        foreach(glob("../../photo/*") as $d) {
            $photo_paths=glob($d.'/*');
            $num_photo = count($photo_paths);
            $tmp = explode('/', $d);
            $album_name = end($tmp);
            echo '<div class="m-imgbox">';
            $link='look_album.php?albumname='.$album_name;
            if ($num_photo>0) {
                $cover_photo_path=$photo_paths[0];
                echo '<div class="m-img"><a href="',$link,'"><img src="',$cover_photo_path,'" alt="No Photo"></a></div>';
                echo '<div class="m-img-info">';
                echo '<a href="',$link,'">',$album_name,'<span id="m-img-counts">',$num_photo,'</span></a>';
            }
            else{
                echo '<div class="m-img"><img src="../../img/nophoto.jpg" alt="No Photo"></div>';
                echo '<div class="m-img-info">';
                echo '<span>',$album_name,'</span><span id="m-img-counts">',$num_photo,'</span>';
            }

            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
  </header>
  <footer>
      <?php
      include "../header_footer/footer.html";
      ?>
  </footer>
</div>
</body>
</html>