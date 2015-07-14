<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:20 PM
 */

class SubCapitol {
    private $id;
    private $nume;
    private $capitol_id;
    private $order;
    private $table = 'sub_capitol';

    public function getSubCapitole(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getSubCapitol($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

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