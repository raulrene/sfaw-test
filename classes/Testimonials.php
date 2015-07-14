<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/14/15
 * Time: 12:00 PM
 */

class Testimonials {
    private $id,$title,$author,$text,$img,$tag;
    private $table = 'testimonials';

    public function getByTag($tag){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where tag = $tag");

        return $data;
    }

    public function getTestimonials(){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getTestimonial($id){
        global $db;

        $data = $db->fetch_row("Select * from $this->table where id =" . $id);

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
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
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
    public function getTitle()
    {
        return $this->title;
    }


} 