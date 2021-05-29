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
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Register</title>
</head>

<body>
<div class="sign-up">
    <div class="container">
        <form class="form-signin" method="post">
            <h2 class="form-signin-heading">REGISTER</h2>

            <span class="tips">Email address</span>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email"
                   id="inputEmail"
                   name="email"
                   class="form-control"
                   placeholder="Email address"
                   style="margin-bottom: 10px"
                   required autofocus>
            <span class="tips">Password</span>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password"
                   id="inputPassword"
                   name="password"
                   class="form-control"
                   placeholder="Password" required>

            <span class="tips">Confirm password</span>
            <label for="inputRepeatPassword" class="sr-only">Confirm Password</label>
            <input type="password"
                   id="inputRepeatPassword"
                   class="form-control"
                   placeholder="Confirm password" required>
            <i class="password-error" style="color: red">Password Inconsistent</i>
        </form>
        <div style="width: 300px; margin: auto auto 10px;">
            <button class="btn btn-lg btn-primary btn-block" id="submit" type="button" style="border-radius: 0">Register Account</button>
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
        <button class="btn btn-lg btn-primary btn-block"
                style="border-radius: 0;  background-color: orange"
                onclick="javascript:window.history.back();">
            Go Back
        </button>
    </div>
    <div style="height: 30px;"></div>
</div>
<?php
include "footer.html"
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.8/assets/js/ie10-viewport-bug-workaround.js">
</script>
<script src="./js/jquery-3.6.0.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="./js/register.js"></script>
</html>
