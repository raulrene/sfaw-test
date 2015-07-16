<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/15/15
 * Time: 9:03 PM
 */

class Description {
    private $id,$course_id,$course_text,$about_text;
    private $table = 'description';

    public function getDescriptionAll(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getDescription($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

        return $data;
    }

    /**
     * @param mixed $about_text
     */
    public function setAboutText($about_text)
    {
        $this->about_text = $about_text;
    }

    /**
     * @return mixed
     */
    public function getAboutText()
    {
        return $this->about_text;
    }

    /**
     * @param mixed $course_id
     */
    public function setCourseId($course_id)
    {
        $this->course_id = $course_id;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * @param mixed $course_text
     */
    public function setCourseText($course_text)
    {
        $this->course_text = $course_text;
    }

    /**
     * @return mixed
     */
    public function getCourseText()
    {
        return $this->course_text;
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