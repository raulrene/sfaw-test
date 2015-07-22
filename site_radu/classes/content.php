<?php


class content {
    private $id;
    private $content;

    public function getContent(){
    global $db;

    $data = $db->fetch_all('Select * from content');

    return $data;
}

    public function getContents($id){
        global $db;

        $data = $db->fetch_all('Select * from content where id =' . $id);

        return $data;
    }
    public function getId()
    {
        return $this->id;
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
    public function getContent1()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

}