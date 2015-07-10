<?php
class SubChapter{

    private $id, $chapter_id, $sub_ch_name,$order;
    private $table = 'sub_chapters';


    public function getsubChapter(){
        global $db;
        $q = 'SELECT * FROM $this->table';
        $data = $db->fetch_all($q);
        return $data;
    }
    public function getSubCHById($id){
        global $db;
        $q = 'SELECT * FROM $this->table WHERE id =$id';
        $data = $db->fetch_row($q);
        return $data;
    }

    /**
     * @param mixed $chapter_id
     */
    public function setChapterId($chapter_id)
    {
        $this->chapter_id = $chapter_id;
    }

    /**
     * @return mixed
     */
    public function getChapterId()
    {
        return $this->chapter_id;
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
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $sub_ch_name
     */
    public function setSubChName($sub_ch_name)
    {
        $this->sub_ch_name = $sub_ch_name;
    }

    /**
     * @return mixed
     */
    public function getSubChName()
    {
        return $this->sub_ch_name;
    }



}
?>