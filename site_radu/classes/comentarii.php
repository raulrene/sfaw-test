<?php


class Comments {
    private $id;
    private $img;
    private $name;
    private $date;
    private $comment;
	private $table = 'comments';

      public function getAll(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getComment($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

		  return $data;
		  }
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
    public function getComentarii1()
    {
        return $this->comentarii;
    }

    /**
     * @param mixed $comentarii
     */
    public function setComentarii($comments)
    {
        $this->comentarii = $comments;
    }
}