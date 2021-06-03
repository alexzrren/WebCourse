<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBlog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/message.css">
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
    <form id="msg-form">
        <div style="height: 10px"></div>
        <span style="margin-top: 15px; border-bottom: 3px #0a0a0a solid; font-size: 20px; font-weight: bold">Message Box</span>
        <textarea id="input-msg" rows="5" cols="70">Something you want to say to me~</textarea>
        <div>
            <span>Username</span>
            <span><input id="input-username" type="text" maxlength="20" style="margin-right: 15px;"></span>
            <span style="margin-right: 15px">
                <input id="anonymous-ckb" type="checkbox" name="anonymous" value="Anonymous" title="Your username will not be visible.">
                Anonymous
            </span>
            <span style="margin-right: 10px">
                <input type="button" id="clear-btn" class="msg-btn" value="Clear" onclick="
                    document.getElementById('input-msg').value='';
                    document.getElementById('input-username').value='';">
            </span>
            <span><input type="button" id="submit-btn" class="msg-btn" value="Submit"></span>
        </div>
    </form>
    <div style="height: 10px;"></div>
    <div id="show-msg">
        <div class="msg-container">
            <p id="msg-content">We used to look up at the sky and wonder at our place in the stars, now we just look down and worry about our place in the dirt.</p>
            <p id="msg-info">EXAMPLE USERNAME 2021-06-01 13:48:55</p>
        </div>
    </div>
    <div id="show-msg">
        <div class="msg-container">
            <p id="msg-content"> I don't think that when people grow up, they will become more broad-minded and can accept everything. Conversely, I think it's a selecting process, knowing what's the most important and what's the least. And then be a simple man.</p>
            <p id="msg-info">EXAMPLE USERNAME 2021-06-01 13:48:55</p>
        </div>
    </div><div id="show-msg">
        <div class="msg-container">
            <p id="msg-content">Death is just a part of life, something we’re all destined to do.</p>
            <p id="msg-info">EXAMPLE USERNAME 2021-06-01 13:48:55</p>
        </div>
    </div><div id="show-msg">
        <div class="msg-container">
            <p id="msg-content">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            <p id="msg-info">EXAMPLE USERNAME 2021-06-01 13:48:55</p>
        </div>
    </div><div id="show-msg">
        <div class="msg-container">
            <p id="msg-content">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            <p id="msg-info">EXAMPLE USERNAME 2021-06-01 13:48:55</p>
        </div>
    </div><div id="show-msg">
        <div class="msg-container">
            <p id="msg-content">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            <p id="msg-info">EXAMPLE USERNAME 2021-06-01 13:48:55</p>
        </div>
    </div>



  <footer>
      <?php
      include "footer.html"
      ?>
  </footer>
</div>
</body>
</html>