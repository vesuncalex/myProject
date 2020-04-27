<?php

class DataBase
{
    public $conn;
    public $db;

    public function __construct($username = 'user', $password = 'secret', $host = 'localhost', $dbname = 'site')
    {
        $this->conn = true;
        try {
            $this->db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e - getMessage());
        }
    }
   public function getInsertSql(string $table, array $attributes)
    {
        $values = (implode('","',$attributes));
        $values = '"' . $values . '"';
        $columns = array_keys ($attributes) ;
        $columns = implode('`,`',$columns);
        $columns = '`' . $columns . '`';
        $sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        return $sql;
    }

    public function create( string $table, array $attributes)
    {

        $sql = $this->getInsertSql($table, $attributes);
        return $this->db->query($sql);
    }

//    public function delete( string $table,int $id)
//    {
//        $id = '`'.$id.'`';
//        $table = '`'.$table.'`';
//        $delete = "DELETE FROM $table WHERE id = $id";
//        return $this->db->query($delete);
//    }

//    public function getId($table, $email)
//    {
//        $table = '`'.$table.'`';
//        $id = ("SELECT `id` FROM $table WHERE `email` = '$email' ");
//        return $this->db->query($id);
//    }
    public function select(string $table, array $columns = [], $where)
    {

        if(empty($columns)){
            $columns = '*';
        }else{
          $columns = implode($columns, ',');
        }
        $table = "`" . $table . "`";
        $select = "SELECT $columns FROM $table WHERE $where";
        return $this->db->query($select);

    }


public function  getUpdateSql(string $table, array $attributes, int $id)
{
    $table = '`'.$table.'`';
    $result = '';
    foreach ($attributes as $key => $values) {
        $key  = '`' . $key . '`'  ;
        $values = "'" . $values . "'" . "," ;
        $result = $result . $key . '=' . $values;
    }

    $result = trim($result,',');
    $update = "UPDATE $table SET $result WHERE `id`=$id";

    return $update;


}
    public function update(string $table, array $attributes, int $id)
    {

        $update = $this->getUpdateSql($table, $attributes,$id);
        return $this->db->query($update);

    }
}

