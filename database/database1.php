<?php
$host = 'localhost';
$user = 'root';
$pass = '6636';
$db   = 'site';
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*    class Database1{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '6636';
    private $db   = 'site';
    private $conn;

    public function __construct($host, $user, $pass, $db){
        $this->host   = $host;
        $this->user   = $user;
        $this->pass   = $pass;
        $this->db     = $db;
    }

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
*/

?>