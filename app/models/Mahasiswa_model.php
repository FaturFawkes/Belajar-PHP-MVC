<?php

class Mahasiswa_model{

    private $table = 'data_mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO data_mahasiswa VALUES ('', ':nis', ':nama', ':kelas', ':jurusan')";

        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}