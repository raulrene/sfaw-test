<?php
    class Database1{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '6636';
    private $db   = 'site';
    private $conn;

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                                    "mysql:host=". $this->host .
                                    ";dbname=".$this->db,
                                    $this->user,
                                    $this->pass
                                );
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $this->conn;
    }
}
?>