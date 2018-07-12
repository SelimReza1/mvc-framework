<?php

class Database extends PDO
{
    public function __construct($dsn, $user, $pass)
    {

        parent::__construct($dsn, $user, $pass);
    }

    public function select($sql, $data = array(), $fethstyle = PDO::FETCH_ASSOC)
    {
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindParam($key, $value);
        }
        $stmt->execute();
        return $stmt->fetchAll($fethstyle);
    }

    public function insert($table, $data)
    {
        $keys = implode(",", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "insert into $table ($keys) VALUES ($values)";
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
        return $stmt->execute();
    }

    public function update($table, $data, $cond)
    {
        $updatekeys = NULL;
        foreach ($data as $key => $value) {
            $updatekeys .= "$key=:$key,";
        }
        $updatekeys = rtrim($updatekeys, ",");
        $sql = "update $table set $updatekeys WHERE $cond";
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
     return $stmt->execute();

    }
    public function delete($table , $cond , $limit=1){
        $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
       return $this->exec($sql);
    }
}

?>