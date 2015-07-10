<?php

class configurare {
    private $id;
    private $logo;
    private $background;

    public function getConfigurare(){
        global $db;

        $data = $db->fetch_all('Select * from configurare');

        return $data;
    }

    public function getConfigurari($id){
        global $db;

        $data = $db->fetch_all('Select * from configurare where id =' . $id);

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
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param mixed $background
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }
}