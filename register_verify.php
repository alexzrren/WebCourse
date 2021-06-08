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
<?php
    @$username = $_POST['username'];
    @$password = $_POST['password'];
    @$email = $_POST['email'];
    $link=mysqli_connect("47.100.93.151","root","Bioinfo@2021","webserver")
    or die('Database Connection Failure');
    mysqli_query($link,"set names utf8");
    $sql="select * from users where username='$username'";
    $result=mysqli_query($link,$sql);
    $exist = (mysqli_num_rows($result)!=0);
    mysqli_close($link);
    $codeint = rand(100000,999999);
    $code = (string)$codeint;
    if(!$exist){
    exec("python send_code.py ".$email.' '.$code, $return_var);
    }
?>
<body>
<div class="sign-up">
    <div class="container">
        <form class="form-signin" method="post" onsubmit="return check()" action="./register_sql.php" name="regform">
            <h2 class="form-signin-heading">REGISTER</h2>
            <span class="tips">Username</span>
            <input type="text"
                   id="inputUsername"
                   name="username"
                   class="form-control"
                   <?php echo 'value="',$username,'"'; ?>
                   style="margin-bottom: 10px"
                   required autofocus>
            <?php
            if($exist){
                echo '<p style="color: red">Username already exist!</p>';
                header("refresh:3;url=register.php");
            }
            ?>
            <span class="tips">Password</span>
            <input type="password"
                   id="inputPassword"
                   name="password"
                   class="form-control"
                <?php echo 'value="',$password,'"'; ?> required>
            <span class="tips">Confirm password</span>
            <input type="password"
                   id="inputConfirmPassword"
                   class="form-control"
                <?php echo 'value="',$password,'"'; ?> required>
            <i class="password-error" style="color: red">Password Inconsistent</i>
            <span class="tips">Email</span>
            <input type="email"
                   name="email"
                   id="inputEmail"
                   class="form-control"
                <?php echo 'value="',$email,'"'; ?> required>
            <span><input type="text" id="inputCode" class="form-control" placeholder="Verification Code" name="code"
                         style="height:25px; width:210px; margin:10px 0 0 0; display:inline-block" required></span>
            <span><button type="submit" id="send-mail" disabled>Send Code</button></span>
            <?php
            if(!$exist){
                if(@$return_var[0] == 'True'){
                    echo '<p>Mail has successfully sent!</p>';
                }else{
                    echo '<p style="color: red;">Mail send failure, Make sure you have input correct email address! 
                                             Or mail system is temporarily unavailable.</p>';
                }
            }
            ?>
            <script>
                function check() {
                    let code=document.regform.code.value;
                    if (code != <?php echo $code ?>) {
                        alert("Verification Code Error!");
                        document.getElementById("inputCode").value="";
                        document.regform.code.focus();
                        return false;
                    }
                    else {
                        return true;
                    }
                }

            </script>
            <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" style="border-radius: 0">Register Account</button>
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
        <a href="index.php" style="text-decoration:none;"><button class="btn btn-lg btn-primary btn-block"
                style="border-radius: 0;  background-color: orange">
            Go Homepage
        </button></a>
    </div>
    <div style="height: 30px;"></div>
</div>
<?php
include "footer.html"
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.8/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="./js/jquery-3.6.0.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="./js/register.js"></script>
</html>
