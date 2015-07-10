<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:40 PM
 */

class SubSubCapitol {
    private $id;
    private $nume;
    private $sub_capitol_id;
    private $order;

    public function getSubSubCapitole(){
        global $db;

        $data = $db->fetch_all('Select * from sub_sub_capitol');

        return $data;
    }

    public function getSubSubCapitol($id){
        global $db;

        $data = $db->fetch_all('Select * from sub_sub_capitol where id =' . $id);

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


} 