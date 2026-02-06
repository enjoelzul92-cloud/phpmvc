<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Zulkifli Sabili Rosad",
            "npm" => "40222200064",
            "email" => "enjoelzul92@gmail.com",
            "jurusan" => "Manajemen Bisnis"
        ],
        [
            "nama" => "Udel Subagjo",
            "npm" => "40222200065",
            "email" => "udelsubagjo@gmail.com",
            "jurusan" => "Akuntansi"
        ],
        [
            "nama" => "Wastukancana",
            "npm" => "40222200066",
            "email" => "wastukancana@gmail.com",
            "jurusan" => "Manajemen Bisnis"
        ],
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}