<?php
class CatModel extends SModel {
    function __construct()
    {
        parent::__construct();
    }
    public function catList($table){
        $sql = "select * from $table";
        return $this->db->select($sql);
          }
          public function catById($table , $id){
            $sql = "select * from $table WHERE id = :id";
            $data = array(":id" => $id);
           return $this->db->select($sql , $data);
          }

          public function insertCat($table , $data){
            return $this->db->insert($table, $data);
          }
          public function updateCat($table , $data , $cond){
              return $this->db->update($table , $data , $cond);
          }
          public function delCatById($table , $cond){
              return $this->db->delete($table , $cond);
          }
}
?>