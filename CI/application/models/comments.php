<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 1:53 PM
 */

class Comments extends CI_Model{
    private $id;
    private $img;
    private $author;
    private $date;
    private $text;
    private $author_link;
    private $table = 'comments';

    public function get_comm_by_sscid($sscid){
        $this->db->select('*');
        $this->db->from("$this->table X");
        $this->db->where("X.subsubcapitol_id ='".$sscid."'");

        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    //retrieve table object using prepared statements
    public function getComments(){
        $data = $this->db->get($this->table);

        return $data->result();
    }

    public function getComment($id){
        $this->db->where('id', $id);
        $data = $this->db->get($this->table);
        return $data->result();
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


} 