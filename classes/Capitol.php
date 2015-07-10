<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 11:31 AM
 */

class Capitol {
    private $id;
    private $numeCapitol;
    private $url;
    private $order;


    public function getChapter(){

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