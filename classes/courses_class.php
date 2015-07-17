<?php

class Courses {
    private $id;
    private $name;
    private $price;
    private $img;
    private $author;
    private $users;
    private $stars;
    private $table = 'courses';

    public function getAll(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getCourse($id){
        global $db;

        $data = $db->fetch_row("Select * from $this->table where id = '$id'");

        return $data;
    }


    public function insertCourse($name,$price,$img,$author,$users,$stars) {
        global $db;
        $result = $db->query("
            INSERT INTO `courses`
                (`name`, `price`, `img`, `author`, `users`, `stars`)
            VALUES
                ('$name', '$price', '$img', '$author', '$users', '$stars')
        ");

        if(!$result) {
            return false;
        }

        return $db->insert_id;
    }

    public function updateCourse($id, $name,$price,$img,$author,$users,$stars) {
        global $db;
        $result = $db->query("
            UPDATE `courses`
                SET
                    name = '$name',
                    price = '$price',
                    img = '$img',
                    author = '$author',
                    users = '$users',
                    stars = '$stars'
            WHERE
                id = '$id'
        ");

        if(!$result) {
            return false;
        }

        return true;
    }

    public function deleteCourse($id) {
        global $db;
        $result = $db->query("
            DELETE
            FROM `courses`
            WHERE
                id = '$id'
        ");

        if(!$result) {
            return false;
        }

        return true;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
    public function getAuthor()
    {
        return $this->author;
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
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param mixed $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }

}