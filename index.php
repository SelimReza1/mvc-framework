<?php
include_once 'system/libs/Main.php';
include_once 'system/libs/SController.php';
include_once 'system/libs/Load.php';

$url = isset($_GET['url'])? $_GET['url'] : NULL ;
if(isset($url)!=NULL){
    $url = rtrim($url , "/");
    $url = explode("/" , filter_var($url ,FILTER_SANITIZE_URL));
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
    if (isset($url[1])){
        $m = $url[1];
        $ctrl->$m();
    }
    else{
        #code
    }
    }
}
else{
include_once 'app/controllers/Index.php';
$ctrl = new Index();
$ctrl->home();
}



//echo $controller = $url[0]."<br>";
//echo $method = $url[1]."<br>";
//echo $param = $url[2]."<br>";
?>