<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function check_login($name,$pass){
        $this->db->where('name', $name);
        $this->db->where('password', $pass);
        $q = $this->db->get('users');
        if($q->num_rows()== 1){
            return TRUE;
        }else{
            return FALSE;
        }    
    }

    public function loggingIn($name,$pass,$keep){
            
            $this->db->where('password',$pass);
            $q = $this->db->get('users');
            $row = $q->row();

            $sess_data = array(
                    'username'     => $row->name,
                    'validated'     => TRUE,
                    'loginDate'    => time(),
                    'lastlogged'   => time(),
                    'ip'           => $_SERVER[ 'REMOTE_ADDR' ],
                    'via'          => 'form',
                    'keepLoggedIn' => $keep,
                    'type'         => $row->type
             );
            session_start();
            $this->session->set_userdata($sess_data);
            if($this->session->userdata('type') == 'admin'){
                redirect('welcome/admin');  
            }else{
                redirect('welcome');
            }
            /*
            if($keep == 1){
                    $cookie = array(
                            'name'      => 'logindata',
                            'value'     => 'cooookie',
                            'expire'    =>  time() + 2592000,
                            'domain'    => base_url(),
                            'secure'    => TRUE
                        );
             
                $this->input->set_cookie($cookie);

            }else{
                 $cookie = array(
                            'name'      => 'logindata',
                            'value'     => 'login for'.$row->name,
                            'expire'    => time() - 2592000,
                            'domain'    => base_url(),
                            'secure'    => TRUE
                        ); 
                $this->input->set_cookie($cookie);
            } */
    }


}	