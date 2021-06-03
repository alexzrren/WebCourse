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
      <div id="search-bar" style="border-bottom: 3px grey solid; margin-bottom: 5px;">
          <form method="get" id="search-form" action="index.php">
              <label for="s" class="assistive-text" id="search-text" style="font-family: arial;">Search</label>
              <input type="text" class="field" name="s" id="s" placeholder="Input Keywords to Search" width="24" maxlength="48">
              <!--                <input type="image" class="submit" name="submit" id="searchsubmit" alt="search" src="./search.svg" align="right">-->
              <input type="button" id="search-btn" value="Search" >
          </form>
      </div>
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