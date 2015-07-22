<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class welcome extends CI_Controller {

	public function login(){
		$this->form_validation->set_rules('name','Name','trim|xss_clean|required');
		$this->form_validation->set_rules('pass','Password','trim|xss_clean|required|callback_check_login');
		if($this->form_validation->run()== FALSE){
			$data['title'] = 'Login';
			$this->load->view('admin/login',$data);
		}else{

			$name = $this->input->post('name');
			$pass = md5($this->input->post('pass'));
			$keep = $this->input->post('keep');
			
			$this->sitemodel->loggingIn($name,$pass,$keep);
		}
	}

	function check_login(){
			$name = $this->input->post('name');
			$name = strtolower($name); 
			$pass = md5($this->input->post('pass'));

			if($this->sitemodel->check_login($name,$pass) == TRUE){
				return TRUE;
			}else{
				$this->form_validation->set_message('check_login','invalid uname and|or password!');
				return FALSE;
			}	
	}

	public function check_session(){
		if($this->session->userdata('validated') != TRUE){
			redirect('welcome/login');
		}
	}

	public function admin(){
		$data['title'] = 'Admin';
		$this->load->view('admin/forms',$data);
	}

	public function register(){
		$this->form_validation->set_rules('name','Name','trim|xss_clean|required|callback_check_name');
		$this->form_validation->set_rules('email','Email','trim|xss_clean|required|callback_check_email|valid_email');
		$this->form_validation->set_rules('phone','Phone','trim|xss_clean|required|numeric|callback_check_phone|min_length[10]|max_length[13]');
		$this->form_validation->set_rules('pass','Password','trim|xss_clean|required');	
		$this->form_validation->set_rules('pass_2','Password','trim|xss_clean|required|callback_check_pass');	

        $this->form_validation->set_message('required',' is required');
        $this->form_validation->set_message('min_length',' at least 10 characters');
        $this->form_validation->set_message('max_length','less than 13 characters');
        $this->form_validation->set_message('valid_email','must write valid email');

		if($this->form_validation->run()== FALSE){
			$data['title'] = 'Register';
			$this->load->view('admin/register',$data);
		}else{
			$name   = $this->input->post('name');
			$email  = $this->input->post('email');
			$phone  = $this->input->post('phone');
			$pass   = $this->input->post('pass');
			$pass   = md5($pass);
			$pass_2 = $this->input->post('pass_2');
			$pass_2 = md5($pass_2);
			if($this->sitemodel->registering($name,$email,$phone,$pass) == TRUE){
				redirect('welcome/login');
			}else{
				echo 'error inserting data.please retry !';
			}	
		}	
	}

	function check_pass($pass,$pass_2){
			$pass   = $this->input->post('pass');
			$pass   = md5($pass);
			$pass_2 = $this->input->post('pass_2');
			$pass_2 = md5($pass_2);
			if($pass == $pass_2){
				return TRUE;				
			}else{
				$this->form_validation->set_message('check_pass','passwords do not match');
				return FALSE;					
			}		
	}

    function check_name(){
    	$name = $this->input->post('name');
    	$name = strtolower($name);  
		$res = $this->sitemodel->check_name($name);	
    	if(!$res){
    		$this->form_validation->set_message('check_name', 'name exists');
    		return FALSE;
    	}else{
             return TRUE;
    	}
    }

    function check_email(){
    	$email = $this->input->post('email');
    	$email = strtolower($email);  
		$res = $this->sitemodel->check_email($email);	
    	if(!$res){
    		$this->form_validation->set_message('check_email', 'diff email please');
    		return FALSE;
    	}else{
             return TRUE;
    	}
    }

    function check_phone(){
    	$phone = $this->input->post('phone');
		$res = $this->sitemodel->check_phone($phone);     	
    	if(!$res){
    		$this->form_validation->set_message('check_phone', 'phone already taken');
    		return FALSE;   
    	}else{
 			return TRUE;
    	}
    }	

	public function index()	{

		$this->check_session();
		$data = array();
		$data['title'] = 'Academy-Learning';
		$tag = 'slider';
		$data['s'] = $this->sitemodel->getInfoByTag($tag);
		$tag = 'sub_sl';
		$data['ss'] = $this->sitemodel->getInfoByTag($tag);
		$data['crs'] = $this->sitemodel->getCoursesHome();
        $tag = 'testimonials';
        $data['t'] = $this->sitemodel->getInfoByTag($tag);
		$this->load->view('index',$data);
	
	}

	public function crs(){

		$this->check_session();
		$data = array();
		$data['title'] = 'Courses';	
		$config = array();
		$config['base_url'] = base_url()."welcome/crs";
		$total_row = $this->sitemodel->count_all();
		$config['total_rows'] = $total_row;
	    $config['per_page'] = 4;
	    $config['num_links'] = 1;
	    $config["uri_segment"] = 3;
	    $this->pagination->initialize($config);
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
	    $data['q'] = $this->sitemodel->paginate($config['per_page'], $page); 		
		$data['links'] = $this->pagination->create_links();
		$this->load->view('course',$data);
	}

	public function comm(){

		$this->check_session();
		$data = array();
		$data['title'] = 'Comments';
		$data['q'] = $this->sitemodel->getComments();
		$data['s'] = $this->sitemodel->getReplies();	
		$this->load->view('comments',$data);	
	}


	public function courseInfo(){

		$this->check_session();
		$data = array();
		$data['title'] = 'Course Info';
        $id = $this->uri->segment('3');
        $data['c'] = $this->sitemodel->getCourseById($id);
        $data['l'] = $this->sitemodel->getsubChapter();
        $data['j'] = $this->sitemodel->getCombined();
		$this->load->view('course_info',$data);
	}

	public function logout(){

		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect('welcome/login');
	}


}
