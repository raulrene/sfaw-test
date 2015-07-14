<?php
class Content{

    private $id, $sub_sub_ch_id, $text_1, $text_2, $text_3;
    private $table = 'content';


    public function getContent(){
        global $db;
        $q = "SELECT * FROM $this->table";
        $data = $db->fetch_rows($q);
        return $data;
    }
    public function getContentById($id){
        global $db;
        $q = "SELECT * FROM $this->table WHERE id = $id";
        $data = $db->fetch_row($q);
        return $data;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $sub_sub_ch_id
     */
    public function setSubSubChId($sub_sub_ch_id)
    {
        $this->sub_sub_ch_id = $sub_sub_ch_id;
    }

    /**
     * @return mixed
     */
    public function getSubSubChId()
    {
        return $this->sub_sub_ch_id;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $text_1
     */
    public function setText1($text_1)
    {
        $this->text_1 = $text_1;
    }

    /**
     * @return mixed
     */
    public function getText1()
    {
        return $this->text_1;
    }

    /**
     * @param mixed $text_2
     */
    public function setText2($text_2)
    {
        $this->text_2 = $text_2;
    }

    /**
     * @return mixed
     */
    public function getText2()
    {
        return $this->text_2;
    }

    /**
     * @param mixed $text_3
     */
    public function setText3($text_3)
    {
        $this->text_3 = $text_3;
    }

    /**
     * @return mixed
     */
    public function getText3()
    {
        return $this->text_3;
    }

}

?>