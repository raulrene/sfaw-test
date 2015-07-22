<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemodel extends CI_Model{

    public function getComments(){
   
        $data = $this->db->get('comments');
        return $data->result();
    }
    
    public function getCommentsById($id){

        $this->db->where('id', $id);
        $data = $db->get('comments');
        return $data->result;
    }

    public function getReplies(){

        $data = $this->db->get('replies');
        return $data->result();
    }
    
    public function getReplyById($id){
        
        $this->db->where('id', $id);
        $data = $db->get('replies');
        return $data->result();
    }    

    public function getCourses(){
        
        $data = $db->get('courses');
        return $data->result();
    }
    public function getCourseById($id){

        $this->db->where('id',$id);            
        $data = $this->db->get('courses');
        return $data->row();
    }

    public function getCoursesHome(){

        $this->db->limit(4);
        $data = $this->db->get('courses');
        return $data->result();
    }   

	public function getHomeInfo(){
     
        $data = $this->db->get('home');
        return $data;
    }

    public function getInfoByTag($tag){
        $this->db->where('tag',$tag);
        $data = $this->db->get('home');
        return $data->result();
    } 

    public function paginate($limit,$start){

        $this->db->limit($limit,$start);
        $q = $this->db->get('courses');
        return $q->result();    
    }

    public function count_all(){

        $q = $this->db->count_all_results('courses');
        return $q;
    }

    public function getsubChapter(){

        $q = $this->db->get('sub_chapters');
        return $q->result();

    }

    public function getSubCHById($id){
        $this->db->where('id',$id);
        $$q = $this->db->get('subchapters');
        return $q->result();
    }

    public function getCombined(){
        if(!$this->uri->segment('4')){
            $url = 'online-learning';
        }else{
            $url = $this->uri->segment('4');
        }    
        $this->db->select('*');
        $this->db->from('sub_chapters');
        $this->db->join('sub_sub_ch', 'sub_sub_ch.sub_ch_id = sub_chapters.id','left');
        $this->db->join('content','sub_sub_ch.id = content.sub_sub_ch_id','left');
        $this->db->where('sub_chapters.friendly_url', $url);
        $q = $this->db->get();
        return $q->result();
    }

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
