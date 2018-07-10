<?php
class Load{
    public function view($filename , $data = false){
        if($data == true){
            extract($data);
        }
        include 'app/views/'.$filename.'.php';
    }

    public function model($modelName){
        include 'app/models/'.$modelName.'.php';
        return new $modelName;
    }
}
?>


