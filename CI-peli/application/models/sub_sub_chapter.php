<?php
class Sub_sub_chapter extends CI_Model{

    private $id, $sub_ch_id, $sub_sub_ch_name,$order;
    private $table = 'sub_sub_ch';


    public function getSubSubCH(){

        $q = $this->db->get($this->table);
        return $q->result();

    }

    public function getSSChById($id){

        $this->db->where('id',$id);
        $$q = $this->db->get($this->table);
        return $q->row();
        
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
