<?php
class About{

    private $id, $link, $h1, $p1, $p2, $p3;
    private $table = 'about';

    public function getInfo(){
        global $db;
        $sql = "SELECT * FROM $this->table";
        $data = $db->fetch_rows($sql);

         return $data;
    }
}
?>