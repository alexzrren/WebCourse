<?php
session_destroy();
$_SESSION = array();
//判断 cookie 中是否保存 Session ID
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-3600, '/');
}
echo "<script>window.history.back();</script>";