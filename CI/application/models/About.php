<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 3:46 PM
 */

class About extends CI_Model{
    private $id,$title,$sub_title,$text,$course_link;
    private $table = 'about';

    //retrieve table object using prepared statements
    public function getAllAbout(){
        global $db;
        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getAbout($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

        return $data;
    }
    /**
     * @param mixed $course_link
     */
    public function setCourseLink($course_link)
    {
        $this->course_link = $course_link;
    }

    /**
     * @return mixed
     */
    public function getCourseLink()
    {
        return $this->course_link;
    }

    /**
     * @param mixed $sub_title
     */
    public function setSubTitle($sub_title)
    {
        $this->sub_title = $sub_title;
    }

    /**
     * @return mixed
     */
    public function getSubTitle()
    {
        return $this->sub_title;
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