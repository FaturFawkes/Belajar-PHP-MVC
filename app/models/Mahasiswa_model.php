<?php

class Mahasiswa_model{

    private $table = 'data_mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM data_mahasiswa');
        return $this->db->resultSet();
    }

    public function getDetail(){
        $this->db->query('SELECT FROM data_mahasiswa WHERE id = ' . $data['id']);
    }
}