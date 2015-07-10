<?php


class coding {
    private $id;
    private $coding;

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
    public function getCoding()
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