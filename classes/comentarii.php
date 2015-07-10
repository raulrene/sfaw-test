<?php


class comentarii {
    private $id;
    private $comentarii;

    /**
     * @return mixed
     */
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
    public function getComentarii()
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