<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBloc</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>MyBlog</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
</head>
<body id="body">
<div id="page" class="hfeed" style="overflow: hidden;">
    <header id="branding" role="banner" style="border-bottom: 5px #0a53be solid;">
        <div>
            <ul id="login-bar">
                <?php
                session_start();
                if(isset($_SESSION['username'])&&$_SESSION['admin']) {
                    echo '<li><span>Login as:&nbsp;[ADMIN]&nbsp;', $_SESSION['username'], '</span><span style="margin-left: 8px;"><a href="../login_register/logout.php">LOGOUT</a></span></li>';
                }
                else{
                    echo '<script>alert("Permission Denied! Please Login as Admin!");</script>';
                    header("refresh:0;url=index.php");
                }
                ?>
                <!--      <li><a href="./register.php" title="Register" style="text-decoration: none;">Register</a></li>-->
            </ul>
        </div>
        <hgroup id="header-group">
            <h1 id="site-title"><span style="font-weight: bold; color: whitesmoke;">Control Center</span></h1>
            <h2 id="site-desc"><a href="../../index.php">EXIT CONTROL CENTER</a></h2>
        </hgroup>
        <!-- BEGIN Menu-->
        <!-- END Menu -->
    </header>
    <div id="control-menu">
        <p style="margin: 10px 5px 10px; font-weight: bold; font-size: 20px">Control Menu</p>
        <ul>
            <?php
            if(isset($_GET['mgmt'])){
                $mgmt=$_GET['mgmt'];
            }
            else{
                $mgmt=0;
            }
            $mgmt_menu=array("User Management", "Message Management", "Photo Management", "Article Management");
            $mgmt_pgrm=array("user_management.php","message_management.php","photo_management.php","article_management.php");
            for($i=0;$i<count($mgmt_menu);$i++){
                if($i!=$mgmt){
                    echo '<li  class="unselected"><a href="management.php?mgmt=',$i,'">',$mgmt_menu[$i],'</a></li>';
                }
                else{
                    echo '<li  class="selected" style="background-color: #0d6efd"><a href="management.php?mgmt=',$i,'">',$mgmt_menu[$i],'</a></li>';
                }
            }
            ?>
        </ul>
    </div>
    <div id="control-sys">
        <?php
        include $mgmt_pgrm[$mgmt];
        ?>
    </div>
</div>
