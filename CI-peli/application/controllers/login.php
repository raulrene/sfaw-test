<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$this->form_validation->set_rules('name','Name','trim|xss_clean|required');
		$this->form_validation->set_rules('pass','Password','trim|xss_clean|required|callback_check_login');
		if($this->form_validation->run()== FALSE){
			$data['title'] = 'Login';
			$this->load->view('admin/login',$data);
		}else{

			$name = $this->input->post('name');
			$pass = md5($this->input->post('pass'));
			$keep = $this->input->post('keep');
			
			$this->login_model->loggingIn($name,$pass,$keep);
		}
	}

	function check_login(){
			$name = $this->input->post('name');
			$name = strtolower($name); 
			$pass = md5($this->input->post('pass'));

			if($this->login_model->check_login($name,$pass) == TRUE){
				return TRUE;
			}else{
				$this->form_validation->set_message('check_login','invalid uname and|or password!');
				return FALSE;
			}	
	}
}	