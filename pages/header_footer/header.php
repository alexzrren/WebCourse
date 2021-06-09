<header id="branding" role="banner">
  <div>
    <ul id="login-bar">
        <?php
        session_start();
            if(isset($_SESSION['username'])){
                if(!$_SESSION['admin']){
                    echo '<li><span style="color: whitesmoke;">Login as:&nbsp;[USER]&nbsp;',$_SESSION['username'], '</span><span style="margin-left: 8px;"><a href="../login_register/logout.php">LOGOUT</a></span></li>';
                }
                else{
                    echo '<li><span  style="color: whitesmoke;">Login as:&nbsp;[ADMIN]&nbsp;',$_SESSION['username'], '</span><span style="margin-left: 8px;"><a href="../login_register/logout.php">LOGOUT</a></span></li>';
                }
            }
            else{
                echo '<li><a href="../login_register/login.php" title="Login" style="text-decoration: none;">LOGIN</a></li>';
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
        <li><a href="../../index.php" title="home">Home</a></li>
        <li><a href="../article/articles.php" title="Something about course and research">Articles</a></li>
        <li><a href="../album/photo.php" title="Something about my life">Photo</a></li>
        <li><a href="../tools.php" title="Useful Tools">Tools</a></li>
        <li><a href="../message/message.php" title="Something you want to say">Message</a></li>
        <li><a href="../about/about.php" title="Something about me">About</a></li>
          <?php
          if(isset($_SESSION['username'])&&$_SESSION['admin'])
          {
              echo '<li><a href="../control/management.php" title="Admin Management">Control Center</a></li>';
          }
          ?>
      </ul>
    </div>
  </div>
  <!-- END Menu -->
</header>