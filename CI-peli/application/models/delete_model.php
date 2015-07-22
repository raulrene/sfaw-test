<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_model extends CI_Model{

	public function delete($id,$table){

		$this->db->where('id',$id);
		$q = $this->db->delete($table);
		if(!$q){
			return FALSE;
		}else{
			return TRUE;
		}

	}

}	