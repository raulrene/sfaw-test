<?php
class Comments{
    private $id, $author, $author_img, $author_link,$date_posted, $comm_text;
    private $table = 'comments';


    public function getComments(){
        global $db;
        $q = 'SELECT * FROM $this->table';
        $data = $db->fetch_all($q);
        return $data;
    }
    public function getCommentsById($id){
        global $db;
        $q = 'SELECT * FROM $this->table WHERE id = $id';
        $data = $db->fetch_row($q);
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
     * @param mixed $author_img
     */
    public function setAuthorImg($author_img)
    {
        $this->author_img = $author_img;
    }

    /**
     * @return mixed
     */
    public function getAuthorImg()
    {
        return $this->author_img;
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
     * @param mixed $comm_text
     */
    public function setCommText($comm_text)
    {
        $this->comm_text = $comm_text;
    }

    /**
     * @return mixed
     */
    public function getCommText()
    {
        return $this->comm_text;
    }

    /**
     * @param mixed $date_posted
     */
    public function setDatePosted($date_posted)
    {
        $this->date_posted = $date_posted;
    }

    /**
     * @return mixed
     */
    public function getDatePosted()
    {
        return $this->date_posted;
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




}
?>