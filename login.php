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
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body style="background-color: lightsteelblue">
<div class="sign-in">
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading" style="text-align: center; padding-bottom: 5px; border-bottom: #0a0a0a 2.5px solid; margin-bottom: 40px">LOGIN</h2>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text"
                   id="inputEmail"
                   class="form-control"
                   placeholder="Username"
                   style="border-radius: 0"
                   required autofocus >
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" style="border-radius: 0" required>
            <div style="height: 20px"></div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="border-radius: 0">Login</button>
        </form>
        <div style="width: 300px; margin:auto">
            <a href="register.php" style="text-decoration: none;">
                <button class="btn btn-lg btn-primary btn-block"
                        style="border-radius: 0;  background-color: green">
                    No account?  Register Now!
                </button>
            </a>
        </div>
        <div style="height: 15px;"></div>
        <div style="width: 300px; margin:auto">
            <button class="btn btn-lg btn-primary btn-block"
                    style="border-radius: 0;  background-color: orange"
                    onclick="javascript:window.history.back();">
                Go Back
            </button>
        </div>
        <div style="height: 15px"></div>
    </div> <!-- /container -->
</div>
<?php
include "footer.html"
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.8/assets/js/ie10-viewport-bug-workaround.js"></script>
</html>
