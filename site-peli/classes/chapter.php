<?php
class Chapter{
    private $id;
    private $chapter_name;
    private $url;

    public function getChapters(){
        global $db;
        $q = 'SELECT * FROM Chapters';
        $data = $db->fetch_all($q);
        return $data;
    }
    public function getChapterById($id){
        global $db;
        $q = 'SELECT * FROM Chapters WHERE id =$id';
        $data = $db->fetch_row($q);
        return $data;
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
?>