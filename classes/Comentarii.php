<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/9/15
 * Time: 12:47 PM
 */

class Comentarii {
    private $id;
    private $sub_sub_capitol_id;
    private $commentText;
    private $dateAdded;
    private $tag;


    public function getComentarii(){
        global $db;

        $data = $db->fetch_all('Select * from comentarii');

        return $data;
    }

    public function getComentariu($id){
        global $db;

        $data = $db->fetch_all('Select * from comentarii where id =' . $id);

        return $data;
    }

    /**
     * @param mixed $dateAdded
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @param mixed $commentText
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;
    }

    /**
     * @return mixed
     */
    public function getCommentText()
    {
        return $this->commentText;
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


} 