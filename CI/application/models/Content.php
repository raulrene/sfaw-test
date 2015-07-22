<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:53 PM
 */

class Content extends CI_Model{

    private $id;
    private $sub_sub_capitol_id;
    private $contentText;
    private $table = 'content';

    public function getContents(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getContent($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

        return $data;
    }

    /**
     * @param mixed $contentText
     */
    public function setContentText($contentText)
    {
        $this->contentText = $contentText;
    }

    /**
     * @return mixed
     */
    public function getContentText()
    {
        return $this->contentText;
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
     * @param mixed $sub_sub_capitol_id
     */
    public function setSubSubCapitolId($sub_sub_capitol_id)
    {
        $this->sub_sub_capitol_id = $sub_sub_capitol_id;
    }

    /**
     * @return mixed
     */
    public function getSubSubCapitolId()
    {
        return $this->sub_sub_capitol_id;
    }



} 