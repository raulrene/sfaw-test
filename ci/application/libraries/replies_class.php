<?php


class Replies {
    private $id;
    private $img;
    private $name;
    private $date;
    private $reply;
    private $comment_id;
	private $table = 'replies';

      public function getAllReplies(){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table");

        return $data;
    }

    public function getReply($id){
        global $db;

        $data = $db->fetch_rows("Select * from $this->table where id =" . $id);

		  return $data;
		  }
    }
    