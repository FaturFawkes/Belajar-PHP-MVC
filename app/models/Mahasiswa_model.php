<?php

class Mahasiswa_model{
    private $mahasiswa = [
        [
            "nis" => "181910349",
            "nama" => "Nur Fatchurohman",
            "kelas" => "12",
            "jurusan" => "Rekayasa Perangkat Lunak"
        ],
        [  
            "nis" => "181910350",
            "nama" => "Pahlevi Zaqi Shah",
            "kelas" => "12",
            "jurusan" => "Teknik Komputer Jaringan"
        ]
    ];

    public function getAllMahasiswa(){
        return $this->mahasiswa;
    }
}