<?php

class Index_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
	
	public function getIndex()
	{
		$query = $this->db->query("Select * from index");
        
		return $query->result();
	}

	public function getTag($tag)
	{
		$query = $this->db->query("SELECT * FROM `index` WHERE tag = '$tag'");
		
		return $query->result() ;       
	}
}