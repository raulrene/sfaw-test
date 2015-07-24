<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:20 PM
 */

class SubCapitol extends CI_Model{
    private $id;
    private $capitol_id;
    private $nume;
    private $html_id,$class,$friendly_url;
    private $table = 'sub_capitol';


    public function getIdByUrl($url){
        $this->db->select('id');
        $this->db->from("$this->table X");
        $this->db->where("X.friendly_url ='".$url."'");

        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }

    }
    public function getJoinedData($friendlyUrl){
        $this->db->select('*');
        $this->db->from("$this->table X");
        $this->db->join('sub_sub_capitol Y', 'X.id = Y.sub_capitol_id', 'left');
        $this->db->join('content C', 'Y.id = C.sub_sub_capitol_id', 'left');
        $this->db->where("X.friendly_url ='".$friendlyUrl."'");

        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
        /*
        $query = "
            SELECT * FROM $this->table X
            LEFT JOIN sub_sub_capitol Y ON X.id = Y.sub_capitol_id
            LEFT JOIN content C ON Y.id = C.sub_sub_capitol_id
            WHERE X.friendly_url =" ."'". $friendlyUrl ."'";
        $data = $this->db->query($query);

        return $data->result();

        */
    }
    public function getSubCapitole(){
        $data = $this->db->get($this->table);

        return $data->result();
    }

    public function getSubCapitol($id){
        $this->db->where('id', $id);
        $data = $this->db->get($this->table);
        return $data->result();
    }

    /**
     * @param mixed $capitol_id
     */
    public function setCapitolId($capitol_id)
    {
        $this->capitol_id = $capitol_id;
    }

    /**
     * @return mixed
     */
    public function getCapitolId()
    {
        return $this->capitol_id;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $friendly_url
     */
    public function setFriendlyUrl($friendly_url)
    {
        $this->friendly_url = $friendly_url;
    }

    /**
     * @return mixed
     */
    public function getFriendlyUrl()
    {
        return $this->friendly_url;
    }

    /**
     * @param mixed $html_id
     */
    public function setHtmlId($html_id)
    {
        $this->html_id = $html_id;
    }

    /**
     * @return mixed
     */
    public function getHtmlId()
    {
        return $this->html_id;
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
     * @param mixed $nume
     */
    public function setNume($nume)
    {
        $this->nume = $nume;
    }

    /**
     * @return mixed
     */
    public function getNume()
    {
        return $this->nume;
    }


} 