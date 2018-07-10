<?php
class SController{
    protected $load = array();
    public function __construct()
    {
        $this->load=new Load();
    }
}
?>