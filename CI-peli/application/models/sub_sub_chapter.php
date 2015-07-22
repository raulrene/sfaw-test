<?php
class SubSubChapter extends CI_Model{

    private $id, $sub_ch_id, $sub_sub_ch_name,$order;
    private $table = 'sub_sub_ch';


    public function getSubSubCH(){
        global $db;
        $q = 'SELECT * FROM $this->table';
        $data = $db->fetch_all($q);
        return $data;
    }
    public function getSSChById($id){
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
     * @param mixed $sub_ch_id
     */
    public function setSubChId($sub_ch_id)
    {
        $this->sub_ch_id = $sub_ch_id;
    }

    /**
     * @return mixed
     */
    public function getSubChId()
    {
        return $this->sub_ch_id;
    }

    /**
     * @param mixed $sub_sub_ch_name
     */
    public function setSubSubChName($sub_sub_ch_name)
    {
        $this->sub_sub_ch_name = $sub_sub_ch_name;
    }

    /**
     * @return mixed
     */
    public function getSubSubChName()
    {
        return $this->sub_sub_ch_name;
    }


}
