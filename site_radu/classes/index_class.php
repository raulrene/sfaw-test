<?php


class Index {
    private $id;
    private $title;
    private $name;
    private $text;
    private $img;
    private $tag;
    private $table = "index";

    public function getIndex(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    /**
     * @param $tag
     * @return array|bool
     */
    public function getTag($tag){
        global $db;

        $data = $db->fetch_rows("SELECT * FROM `index` WHERE tag = '$tag'");

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTags($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }
}