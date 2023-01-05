<?php
require("Database.php");
class Student extends Database{
    private $nim, $nama, $prodi, $hp, $email;

    public function __construct($nim, $nama, $prodi, $hp, $email){
        parent::__construct();
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->hp = $hp;
        $this->email = $email;
    }

    public function insertMhs(){
        $query = "INSERT INTO `student` (`id`, `nim`, `nama`, `prodi`, `hp`, `email`) VALUES (NULL,?,?,?,?,?)";
        $statement = $this->db->prepare($query);
        $parameters = [$this->nim,$this->nama,$this->prodi,$this->hp,$this->email];
        if ($statement->execute($parameters)){
            echo "Insert success";
            echo "<pre>";
            var_dump($parameters);
            echo "</pre>";
        }else{
            echo $this->db->errorInfo();
        };
    }
}
?>