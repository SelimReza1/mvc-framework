<?php
class CatModel extends SModel {
    function __construct()
    {
        parent::__construct();
    }
    public function catList(){
        return $this->db->select('category');
          }
}
?>