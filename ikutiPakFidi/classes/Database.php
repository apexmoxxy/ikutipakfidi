<?php
class Database{
    protected $host = "localhost", $userdb= "root", $passdb="", $namedb="studentclub";
    protected $db;
    function __construct(){
        $koneksi = "mysql:host=".$this->host.";dbname=".$this->namedb.";charsetutf8";
        $this->db = new PDO($koneksi, $this->userdb, $this->passdb);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>