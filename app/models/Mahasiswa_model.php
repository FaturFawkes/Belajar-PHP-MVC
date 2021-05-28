<?php

class Mahasiswa_model{
    // database handler
    private $dbh;
    private $statement;

    public function __construct(){
        // data source name
        $dsn = 'mysql:host=localhost;dbname=mahasiswa';

        try{
            $this->dbh = new PDO($dsn, 'root', ''); 
        } catch(PDOExceptioin $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->statement = $this->dbh->prepare('SELECT * FROM data_mahasiswa');
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}