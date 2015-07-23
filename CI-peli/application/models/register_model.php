<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model{

   function registering($name,$email,$phone,$pass){
        $info = array(
                'name'     =>  $name,
                'email'    =>  $email,
                'phone'    =>  $phone,
                'password' =>  $pass,
                'type'     =>  'user'
        );
        $q =  $this->db->insert('users',$info); 
        if(!$q){
            return FALSE;
        }else{
            return TRUE; 
        }    
    }

    function check_name($name){
        $this->db->where('name', $name);
        $q = $this->db->get('users');
        if($q->num_rows() > 0){
            return FALSE;
        }else{
            return TRUE;
        }
    }


    public function check_email($email){
        $this->db->where('email', $email);
        $q = $this->db->get('users');
        if($q->num_rows() > 0){
            return FALSE;
        }else{
            return TRUE;
        }
    }   

 
    public function check_phone($phone){
        $this->db->where('phone', $phone);
        $q = $this->db->get('users');
        if($q->num_rows() > 0){
            return FALSE;
        }else{
            return TRUE;
        }
    }

}	