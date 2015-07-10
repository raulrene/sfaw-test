<?php
class Content{

    private $id, $sub_sub_ch_id, $text;
    private $table = 'content';


    public function getContent(){
        global $db;
        $q = 'SELECT * FROM $this->table';
        $data = $db->fetch_all($q);
        return $data;
    }
    public function getContentById($id){
        global $db;
        $q = 'SELECT * FROM $this->table WHERE id =$id';
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
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


}

?>