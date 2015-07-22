<?php


class coding {
    private $id;
    private $coding;

    public function getCoding(){
        global $db;

        $data = $db->fetch_all('Select * from codingl');

        return $data;
    }

    public function getCodings($id){
        global $db;

        $data = $db->fetch_all('Select * from coding where id =' . $id);

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
    public function getCoding1()
    {
        return $this->coding;
    }

    /**
     * @param mixed $coding
     */
    public function setCoding($coding)
    {
        $this->coding = $coding;
    }
}