<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:40 PM
 */

class subsubcapitol extends CI_Model{
    private $id;
    private $nume;
    private $sub_capitol_id;
    private $table = 'sub_sub_capitol';

    public function get_sscid_by_scid($scid){
        $this->db->select('id');
        $this->db->from("$this->table X");
        $this->db->where("X.sub_capitol_id ='".$scid."'");

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

    public function getSubSubCapitole(){
        $data = $this->db->get($this->table);

        return $data->result;
    }

    public function getSubSubCapitol($id){
        $this->db->where('id', $id);
        $data = $this->db->get($this->table);
        return $data->result();
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

    /**
     * @param mixed $sub_capitol_id
     */
    public function setSubCapitolId($sub_capitol_id)
    {
        $this->sub_capitol_id = $sub_capitol_id;
    }

    /**
     * @return mixed
     */
    public function getSubCapitolId()
    {
        return $this->sub_capitol_id;
    }

} 