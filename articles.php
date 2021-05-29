<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBloc</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
  <header id="branding" role="banner">
      <?php
      include "./header.html"
      ?>
  </header>
    <main style="height: 600px">
        <?php
        include "articlelist.php"
        ?>
    </main>

  <footer>
      <?php
      include "./footer.html"
      ?>
  </footer>
</div>
</body>
</html>