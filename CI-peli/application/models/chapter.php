<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chapter extends CI_Model{
    
    private $id;
    private $chapter_name;
    private $url;
    private $table = 'Chapters';

    public function getChapters(){
        $q = $this->db->get($this->table);
        return $q->result();
    }
    public function getChapterById($id){
        $this->db->where('id',$id);
        $q = $this->db->get($this->table);
        return $q->row();
    }

    public function addChapter($ch_name, $url){
        $info = array(
                'chapter_name'     =>  $ch_name,
                'url'              =>  $url
        );
        $q =  $this->db->insert($this->table,$info); 
        if(!$q){
            return FALSE;
        }else{
            return TRUE; 
        }  
    }

    public function updateChapter($id, $ch_name,$url){

        $info = array(
                'chapter_name'     =>  $ch_name,
                'url'              =>  $url
        );
        $this->db->where('id', $id);
        $q = $this->db->update($this->table,$info);
        if(!$q){
            return FALSE;
        }else{
            return TRUE;
        }

    }

    /**
     * @param mixed $chapter_name
     */
    public function setChapterName($chapter_name)
    {
        $this->chapter_name = $chapter_name;
    }

    /**
     * @return mixed
     */
    public function getChapterName()
    {
        return $this->chapter_name;
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
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }


}
