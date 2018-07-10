<?php
class Load{
    public function view($filename , $data = NULL){
        include 'app/views/'.$filename.'.php';
    }

    public function model($modelName){
        include 'app/models/'.$modelName.'.php';
        return new $modelName;
    }
}
?>


