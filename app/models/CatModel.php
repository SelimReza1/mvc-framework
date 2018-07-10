<?php
class CatModel{
    function __construct()
    {
    }
    public function catList(){
       return  array(
            'catOne' => 'education' ,
            'catTwo' => 'sports' ,
            'catThree' => 'health'
        );
    }
}
?>