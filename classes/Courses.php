<?php

class Course{
    private $id, $name,$price, $picture, $author, $user, $stars;
    private $table = 'courses';

    //retrieve table object using prepared statements
    public function getAllLimit(){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table LIMIT 4");

        return $data;
    }

    public function getAllRange($first,$last){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table where id > '$first' AND id < '$last'");

        return $data;
    }

    public function getAll(){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getCapitol($id){
        global $db;

        $data = $db->fetch_row("Select * from $this->table where id =" . $id);

        return $data;
    }

    /**
     * @param mixed $courseName
     */
    public function setName($courseName)
    {
        $this->name = $courseName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $coursePrice
     */
    public function setPrice($coursePrice)
    {
        $this->price = $coursePrice;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
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

    /**
     * @param mixed $img
     */
    public function setPicture($img)
    {
        $this->picture = $img;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


}
