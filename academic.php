<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBloc</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed">
  <header id="branding" role="banner">
    <hgroup id="header-group">
      <h1 id="site-title"><span><a href="./index.html" title="myblog" rel="home">MyBlog</a></span></h1>
      <h2 id="site-desc">Welcome to my blog.</h2>
    </hgroup>
    <div id="search-bar">
      <form method="get" id="search-form" action="./index.html">
        <label for="s" class="assistive-text" id="search-text" style="font-family: arial;">Search</label>
        <input type="text" class="field" name="s" id="s" placeholder="输入关键词  按Enter确定" width="24" maxlength="48">
        <!--                <input type="image" class="submit" name="submit" id="searchsubmit" alt="search" src="./search.svg" align="right">-->
        <input type="button" id="search-btn" value="Search" >
      </form>
    </div>
    <!-- BEGIN Menu-->
    <div id="menu-container">
      <div class="menu">
        <ul id="ul-menu">
          <li><a href="./index.html" title="home">Home</a></li>
          <li><a href="./academic.php" title="Something about course and research">Academic</a></li>
          <li><a href="./life.php" title="Something about my life">Life</a></li>
          <li><a href="./tools.php" title="Useful Tools">Tools</a></li>
          <li><a href="./board.php" title="Something you want to say">Notetable</a></li>
          <li><a href="./about.html" title="Something about me">About</a></li>
        </ul>
      </div>
    </div>
    <!-- END Menu -->
  </header>
  <footer>
    <p>
      Copyright reserved<br>
      Author:Zirui Ren, Bioinfo201801<br>
      Huazhong Agricultural University, Wuhan, China, 430070
    </p>
  </footer>
</div>
</body>
</html>