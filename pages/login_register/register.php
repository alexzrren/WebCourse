<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/signin/">
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.8/examples/signin/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/register.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Register</title>
</head>


<body>
<div class="sign-up">
    <div class="container">
        <form class="form-signin" method="post" action="register_verify.php">
            <h2 class="form-signin-heading">REGISTER</h2>
            <span class="tips">Username</span>
            <input type="text"
                   id="inputUsername"
                   name="username"
                   class="form-control"
                   placeholder="Username"
                   style="margin-bottom: 10px"
                   required autofocus>
            <span class="tips">Password</span>
            <input type="password"
                   id="inputPassword"
                   name="password"
                   class="form-control"
                   placeholder="Password" required>
            <span class="tips">Confirm password</span>
            <input type="password"
                   id="inputConfirmPassword"
                   class="form-control"
                   placeholder="Confirm password" required>
            <i class="password-error" style="color: red">Password Inconsistent</i>
            <span class="tips">Email</span>
            <input name="email"
                    type="email"
                   id="inputEmail"
                   class="form-control"
                   placeholder="Email" required>
            <span><input type="text" id="inputCode" class="form-control" placeholder="Verification Code"
                         style="height:25px; width:210px; margin:10px 0 0 0; display:inline-block"></span>
            <span><button type="submit" id="send-mail">Send Code</button></span>
            <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" disabled style="border-radius: 0">Register Account</button>
        </form>
        </div>
    </div> <!-- /container -->
</div>
<div class="container-other">
    <div style="width: 300px; margin:auto">
        <a href="login.php" style="text-decoration: none;">
            <button class="btn btn-lg btn-primary btn-block"
                    style="border-radius: 0;  background-color: green">
                Have an account?  Login Now!
            </button>
        </a>
    </div>
    <div style="height: 10px;"></div>
    <div style="width: 300px; margin:auto">
        <div style="width: 300px; margin:auto">
            <a href="../../index.php" style="text-decoration:none;">
                <button class="btn btn-lg btn-primary btn-block" style="border-radius: 0;  background-color: orange">
                    Go Homepage
                </button></a>
    </div>
    <div style="height: 30px;"></div>
</div>
<?php
include "../header_footer/footer.html"
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.8/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../../js/jquery-3.6.0.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="../../js/register.js"></script>
</html>
