<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 11:31 AM
 */

include('config/config.php');
class Capitol {
    private $id;
    private $numeCapitol;
    private $url;
    private $order;


    public function getCapitole(){
        global $db;

        $data = $db->fetch_all('Select * from capitol');

        return $data;
    }

    public function getCapitol($id){
        global $db;

        $data = $db->fetch_all('Select * from capitol where id =' . $id);

        return $data;
    }
    /**
     * @param mixed $numeCapitol
     */
    public function setNumeCapitol($numeCapitol)
    {
        $this->numeCapitol = $numeCapitol;
    }

    /**
     * @return mixed
     */
    public function getNumeCapitol()
    {
        return $this->numeCapitol;
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
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
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





} 