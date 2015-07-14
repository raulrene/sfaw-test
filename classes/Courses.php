<?php

class Course{
    private $id, $courseName,$coursePrice, $img, $author, $user, $stars;
    private $table = 'courses';

    //retrieve table object using prepared statements
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
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->courseName;
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
    public function setCoursePrice($coursePrice)
    {
        $this->coursePrice = $coursePrice;
    }

    /**
     * @return mixed
     */
    public function getCoursePrice()
    {
        return $this->coursePrice;
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
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
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
