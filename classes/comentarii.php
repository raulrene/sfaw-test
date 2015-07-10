<?php


class comentarii {
    private $id;
    private $comentarii;

    public function getComentariu(){
        global $db;

        $data = $db->fetch_all('Select * from comentarii');

        return $data;
    }

    public function getComentarii($id){
        global $db;

        $data = $db->fetch_all('Select * from comentarii where id =' . $id);

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
    public function getComentarii1()
    {
        return $this->comentarii;
    }

    /**
     * @param mixed $comentarii
     */
    public function setComentarii($comentarii)
    {
        $this->comentarii = $comentarii;
    }
}