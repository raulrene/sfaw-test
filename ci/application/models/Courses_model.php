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
	
	/*
	public function getAllJoins()
	{
		$query = $this->db->query("SELECT * FROM capitol X
		LEFT JOIN sub_capitol Y ON X.id = Y.capitol_id");
        
		return $query->result();
	}
	public function getCapitol()
	{
		$query = $this->db->query("SELECT * FROM capitol");
        
		return $query->result();
	}
	public function getAllSub()
	{
		$query = $this->db->query("SELECT * FROM sub_capitol X
		LEFT JOIN sub_sub_capitol Y ON X.id = Y.sub_capitol_id");
        
		return $query->result();
	}
	
	
	
	public function getAllCapitols()
	{
		$query = $this->db->query("SELECT * FROM capitol");
		return $query->result();

	}
	*/
	
	public function getAllSubCapitols()
	{
		$query = $this->db->query("SELECT 
				sub_capitol.id AS sub_capitol_id,
				sub_capitol.nume,
				capitol.capitol,
				capitol.url,
				sub_capitol.capitol_id
			FROM sub_capitol
			LEFT JOIN capitol 
				ON sub_capitol.capitol_id = capitol.id
			ORDER BY 
				capitol.id,
				sub_capitol.id
				
		");
		return $query->result();
		
	}
	
	public function getSubCapitol($id)
	{
		$query = $this->db->query("
			SELECT 
				sub_capitol.id AS sub_capitol_id,
				sub_capitol.nume,
				capitol.capitol,
				capitol.url,
				sub_capitol.capitol_id
			FROM sub_capitol
			LEFT JOIN capitol 
				ON sub_capitol.capitol_id = capitol.id
			WHERE 
				sub_capitol.id = '$id'
		");

		return $query->row();

	}

	
	
	public function getContentForSubCapitol($id)
	{
		$query = $this->db->query("
		SELECT 
			sub_sub_capitol.id AS sub_sub_capitol_id,
			sub_sub_capitol.nume, sub_sub_capitol.content,
			sub_capitol.id AS sub_capitol_id,
			capitol.id AS capitol_id
		FROM sub_sub_capitol 
		INNER JOIN sub_capitol
			on sub_sub_capitol.sub_capitol_id = sub_capitol.id
		INNER JOIN capitol
			ON sub_capitol.capitol_id = capitol.id
		WHERE 
			sub_sub_capitol.sub_capitol_id = '$id'
		");

		return $query->result();

	}
	
}