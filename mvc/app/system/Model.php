<?php

class Model
{
    private $dbh;
    private $stmt;
    public function __construct()
    {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;

        try{
            $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
        } catch(PDOException $e){
            die($e->message());
        }
    }

    public function bind($param, $value, $type=null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    private function execute()
    {
        $this->stmt->execute();
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function get($table)
    {
        $query = 'SELECT * FROM '.$table;
        $this->query($query);
    }

    public function all()
    {
        $this->execute();
        // var_dump($this->stmt);
        // die();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    
}