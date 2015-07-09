<?php
class Content{

    private $id, $sub_sub_ch_id, $text;

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
     * @param mixed $sub_sub_ch_id
     */
    public function setSubSubChId($sub_sub_ch_id)
    {
        $this->sub_sub_ch_id = $sub_sub_ch_id;
    }

    /**
     * @return mixed
     */
    public function getSubSubChId()
    {
        return $this->sub_sub_ch_id;
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


}

?>