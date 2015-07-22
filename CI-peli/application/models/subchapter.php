<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subchapter extends CI_Model{

    private $id, $chapter_id, $links, $id_html, $class, $friendly_url;
    private $table = 'sub_chapters';


    public function getsubChapter(){

        $q = $this->db->get($this->table);
        return $q->result();

    }

    public function getSubCHById($id){
        $this->db->where('id',$id);
        $$q = $this->db->get($this->table);
        return $q->result();
    }

    public function getCombined($url){

        $this->db->select('*');
        $this->db->from('sub_chapters');
        $this->db->join('sub_sub_ch', 'sub_sub_ch.sub_ch_id = sub_chapters.id','left');
        $this->db->join('content','sub_sub_ch.id = content.sub_sub_ch_id','left');
        $this->db->where('suc_chapters.friendly_url', $url);
        $q = $this->db->get();

    }

    /**
     * @param mixed $chapter_id
     */
    public function setChapterId($chapter_id)
    {
        $this->chapter_id = $chapter_id;
    }

    /**
     * @return mixed
     */
    public function getChapterId()
    {
        return $this->chapter_id;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $friendly_url
     */
    public function setFriendlyUrl($friendly_url)
    {
        $this->friendly_url = $friendly_url;
    }

    /**
     * @return mixed
     */
    public function getFriendlyUrl()
    {
        return $this->friendly_url;
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
     * @param mixed $id_html
     */
    public function setIdHtml($id_html)
    {
        $this->id_html = $id_html;
    }

    /**
     * @return mixed
     */
    public function getIdHtml()
    {
        return $this->id_html;
    }

    /**
     * @param mixed $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }



}
