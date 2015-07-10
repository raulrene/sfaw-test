<?php


class sub_capitol {
    private $id;
    private $sub_capitol;
    private $order;

    / public function getCapitol(){
    global $db;

    $data = $db->fetch_all('Select * from capitol');

    return $data;
}

    public function getCapitole($id){
        global $db;

        $data = $db->fetch_all('Select * from capitol where id =' . $id);

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
    public function getSubCapitol()
    {
        return $this->sub_capitol;
    }

    /**
     * @param mixed $sub_capitol
     */
    public function setSubCapitol($sub_capitol)
    {
        $this->sub_capitol = $sub_capitol;
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