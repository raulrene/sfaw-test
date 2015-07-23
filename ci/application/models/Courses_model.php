<?php

class Courses_model extends CI_Model {
    public function __construct()
        {
                $this->load->database();
        }

   public function getAll()
	{
		$query = $this->db->query("Select * from courses");
        
		return $query->result();
	}

    public function getCourse($id){

        $query = $this->db->query("Select * from courses where id = '$id'");

        return $query->row();
    }
	
	public function getAllJoins($url)
	{
		$query = $this->db->query("SELECT * FROM capitol X
		LEFT JOIN sub_capitol Y ON X.id = Y.capitol_id
		LEFT JOIN content C ON Y.id = C.sub_capitol_id
		WHERE X.url =" ."'". $url ."'");
        
		return $query->result();
	}
	public function getCapitol()
	{
		$query = $this->db->query("SELECT * FROM capitol");
        
		return $query->result();
	}
}