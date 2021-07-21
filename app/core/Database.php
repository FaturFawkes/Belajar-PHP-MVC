<?php

class Database{
    // Property DB
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    // Property Conn
    private $dbh; //database handler
    private $sth;

    public function __construct(){
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->sth = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->sth->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->sth->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->sth->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->sth->rowCount();
    }

}