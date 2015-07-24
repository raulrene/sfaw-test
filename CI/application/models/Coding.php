<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:51 PM
 */

class Coding extends CI_Model{
    private $id;
    private $sub_sub_capitol_id;
    private $codingText;

    public function getCodings(){
        global $db;

        $data = $db->fetch_all('Select * from coding');

        return $data;
    }

    public function getCoding($id){
        global $db;

        $data = $db->fetch_all('Select * from coding where id =' . $id);

        return $data;
    }
    /**
     * @param mixed $sub_sub_capitol_id
     */
    public function setSubSubCapitolId($sub_sub_capitol_id)
    {
        $this->sub_sub_capitol_id = $sub_sub_capitol_id;
    }

    /**
     * @return mixed
     */
    public function getSubSubCapitolId()
    {
        return $this->sub_sub_capitol_id;
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
     * @param mixed $codingText
     */
    public function setCodingText($codingText)
    {
        $this->codingText = $codingText;
    }

    /**
     * @return mixed
     */
    public function getCodingText()
    {
        return $this->codingText;
    }



} 