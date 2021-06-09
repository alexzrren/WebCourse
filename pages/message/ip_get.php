<?php
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
echo $ip;
