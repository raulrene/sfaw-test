<?php
class Comments{
    private $id, $content_id, $comments_content, $date, $tag;
    private $table = 'comments';


    public function getComments(){
        global $db;
        $q = 'SELECT * FROM $this->table';
        $data = $db->fetch_all($q);
        return $data;
    }
    public function getCommentsById($id){
        global $db;
        $q = 'SELECT * FROM $this->table WHERE id =$id';
        $data = $db->fetch_row($q);
        return $data;
    }
    /**
     * @param mixed $comments_content
     */
    public function setCommentsContent($comments_content)
    {
        $this->comments_content = $comments_content;
    }

    /**
     * @return mixed
     */
    public function getCommentsContent()
    {
        return $this->comments_content;
    }

    /**
     * @param mixed $content_id
     */
    public function setContentId($content_id)
    {
        $this->content_id = $content_id;
    }

    /**
     * @return mixed
     */
    public function getContentId()
    {
        return $this->content_id;
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
?>