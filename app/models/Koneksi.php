<?php
// menghubungkan aplikasi dengan database menggunakan OOP
class Koneksi {
    private $host = '127.0.0.1';
    private $user = 'root';
    private $password = '';
    private $dbname = 'web_app';

    public function getConnection() {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->dbname
        );

        if ($this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    public function getConnection(){
        return $this->conn;
    }
}
