<?php
include_once 'system/libs/main.php';

$url = $_GET['url'];
$url = rtrim($url , "/");
$url = explode("/" , $url);

include_once 'app/controllers/'.$url[0].'.php';
$selim = new $url['0']();
//echo $controller = $url[0]."<br>";
//echo $method = $url[1]."<br>";
//echo $param = $url[2]."<br>";
?>