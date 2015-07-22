<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class paginator extends CI_Model{

    public function paginate($limit,$start){

        $this->db->limit($limit,$start);
        $q = $this->db->get('courses');
        return $q->result();    
    }

    public function count_all(){

        $q = $this->db->count_all_results('courses');
        return $q;
    }

}
