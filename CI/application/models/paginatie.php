<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/15/15
 * Time: 1:02 PM
 */

class Paginatie extends CI_Model{

   public function pag($limit,$start){
        $this->db->limit($limit,$start);
        $q = $this->db->get('courses');
        return $q->result();
    }
    public function count_all(){
        $q = $this->db->count_all_results('courses');
        return $q;
    }

}