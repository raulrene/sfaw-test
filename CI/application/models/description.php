<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/15/15
 * Time: 9:03 PM
 */

class Description extends CI_Model{
    private $id,$course_id,$course_text,$about_text;
    private $table = 'description';

    public function getDescriptionAll(){
        $data = $this->db->get($this->table);

        return $data->result();
    }

    public function getDescription($id){
        $this->db->where('id', $id);
        $data = $this->db->get($this->table);
        return $data->result();
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