<?php
class Index extends SController{
   public function __construct()
    {
        parent::__construct();
    }
public function home(){
       echo "home content from index controller";
}

}
?>