<?php
    class Database1{

    private $host;
    private $user;
    private $pass;
    private $dbase;
    private $conn;

    public function __construct($host,$user,$pass,$dbase){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbase = $dbase;
    }

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                                    "mysql:host=". $this->host .
                                    ";dbname=".$this->dbase,
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