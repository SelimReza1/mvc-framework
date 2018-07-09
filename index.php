<?php
include_once 'system/libs/Main.php';
include_once 'system/libs/SController.php';

$url = isset($_GET['url'])? $_GET['url'] : NULL ;
if(isset($url)!=NULL){
    $url = rtrim($url , "/");
    $url = explode("/" , $url);
}
else{
    unset($url);
}

if(isset($url[0])){
    include_once 'app/controllers/'.$url[0].'.php';
    $ctrl = new $url[0]();
    if(isset($url[2])){
        $m = $url[1];  //for avoiding array to string conversion we put into variable first then call
        $ctrl->$m($url[2]);
    }
    else{
    if (isset($ur[1])){
        $ctrl->$url[1]();
    }
    else{
        #code
    }
    }
}
else{
#code
}



//echo $controller = $url[0]."<br>";
//echo $method = $url[1]."<br>";
//echo $param = $url[2]."<br>";
?>