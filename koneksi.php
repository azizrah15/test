<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'db_form';
    private $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }

    function tampilData() {
        $query = mysqli_query($this->koneksi, 'select * from users');
        while($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }
        return $data;
    }
    
    function simpanData($nama, $email, $wa, $alamat) {
        $query = mysqli_query($this->koneksi, "insert into users values('$nama', '$email', '$wa', '$alamat')");
    }
}