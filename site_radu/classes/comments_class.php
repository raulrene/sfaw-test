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
    