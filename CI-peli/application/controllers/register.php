<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


interface Checking{
	public function check_pass($pass,$pass_2);
	public function check_name();
	public function check_email();
	public function check_phone();
}

class Register extends CI_Controller implements Checking{

	public function __construct(){

		parent::__construct();
		$this->load->model('register_model');
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
			if($this->register_model->registering($name,$email,$phone,$pass) == TRUE){
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
		$res = $this->register_model->check_name($name);	
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
		$res = $this->register_model->check_email($email);	
    	if(!$res){
    		$this->form_validation->set_message('check_email', 'diff email please');
    		return FALSE;
    	}else{
             return TRUE;
    	}
    }

    function check_phone(){
    	$phone = $this->input->post('phone');
		$res = $this->register_model->check_phone($phone);     	
    	if(!$res){
    		$this->form_validation->set_message('check_phone', 'phone already taken');
    		return FALSE;   
    	}else{
 			return TRUE;
    	}
    }	

}	