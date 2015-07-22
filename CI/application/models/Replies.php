<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 1:53 PM
 */

class Replies extends CI_Model{
    private $id;
    private $id_parent;
    private $img;
    private $author;
    private $date;
    private $text;
    private $author_link;
    private $table = 'replies';

    //retrieve table object using prepared statements
    public function getReplies(){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getReply($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

        return $data;
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
     * @param mixed $author_link
     */
    public function setAuthorLink($author_link)
    {
        $this->author_link = $author_link;
    }

    /**
     * @return mixed
     */
    public function getAuthorLink()
    {
        return $this->author_link;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
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
     * @param mixed $id_parent
     */
    public function setIdParent($id_parent)
    {
        $this->id_parent = $id_parent;
    }

    /**
     * @return mixed
     */
    public function getIdParent()
    {
        return $this->id_parent;
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
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


} 