<?php


class capitol {
    private $id;
    private $capitol;
    private $order;

    public function getCapitol(){
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
    public function getCapitol1()
    {
        return $this->capitol;
    }

    /**
     * @param mixed $capitol
     */
    public function setCapitol($capitol)
    {
        $this->capitol = $capitol;
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