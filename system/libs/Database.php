<?php
class Database extends PDO{
    public function __construct($dsn , $user , $pass)
    {

        parent::__construct($dsn, $user, $pass);
    }
    public function select($table){
        $sql = "SELECT * FROM $table";
        $stmt = $this->prepare($sql);
        $stmt->execute();
         return $stmt->fetchAll();
            }
}
?>