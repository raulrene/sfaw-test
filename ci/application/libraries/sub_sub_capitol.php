<?php


class sub_sub_capitol {
    private $id;
    private $sub_sub_capitol;
    private $order;

    public function getSubSubCapitol(){
        global $db;

        $data = $db->fetch_all('Select * from sub_sub_capitol');

        return $data;
    }

    public function getSubSubCapitole($id){
        global $db;

        $data = $db->fetch_all('Select * from sub_sub_capitol where id =' . $id);

        return $data;
    }
    public function getId()
    {
        return $this->id;
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
    public function getSubSubCapitol1()
    {
        return $this->sub_sub_capitol;
    }

    /**
     * @param mixed $sub_sub_capitol
     */
    public function setSubSubCapitol($sub_sub_capitol)
    {
        $this->sub_sub_capitol = $sub_sub_capitol;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

}