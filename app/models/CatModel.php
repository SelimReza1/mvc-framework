<?php
class CatModel{
    function __construct()
    {
    }
    public function catList(){
       return  array(
           array(
            'catOne' => 'education' ,
            'catTwo' => 'sports' ,
            'catThree' => 'health'
           ),
        array(
            'catOne' => 'education' ,
            'catTwo' => 'sports' ,
            'catThree' => 'health'
           )
           );
    }
}
?>