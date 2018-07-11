<?php
class CatModel extends SModel {
    function __construct()
    {
        parent::__construct();
    }
    public function catList($table){
        return $this->db->select($table);
          }
          public function catById($table , $id){
            $sql = "select * from $table WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll();

          }
}
?>