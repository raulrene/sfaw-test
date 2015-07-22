<?php

class Comments_model extends CI_Model {
    public function __construct()
        {
            $this->load->database();
        }
		
	public function getAll(){
		
        $query = $this->db->query("Select * from comments");
		
        return $query->result();
		
		}
	public function getAllReplies(){
      
		
       $query = $this->db->query("Select * from replies");
		
        return $query->result();
    }
}