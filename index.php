<?php
include_once 'system/libs/Main.php';
include_once 'system/libs/SController.php';

$url = $_GET['url'];
$url = rtrim($url , "/");
$url = explode("/" , $url);

include_once 'app/controllers/'.$url[0].'.php';
$ctrl = new $url[0]();
$m = $url[1];  //for avoiding array to string conversion we put into variable first then call
$ctrl->$m($url[2]);


//echo $controller = $url[0]."<br>";
//echo $method = $url[1]."<br>";
//echo $param = $url[2]."<br>";
?>